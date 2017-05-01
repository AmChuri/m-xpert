<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\uploaddata;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;

use \Storage;

use File;
use Image;

use App\addtocart;
use App\orders;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ordercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
   public function view()
    {
                 $user = Auth::user();
       $user=$user['attributes'];
        if($user==null)
 {

      return redirect()->to('home');
 }
 $orderdata=orders::where('email',$user['email'])->get();
 return view('order')->with('product',$orderdata);
    }
       public function adminview()
    {

 $orderdata=orders::get();
 return view('admin.order')->with('product',$orderdata);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // dd($request->all());
           $user = Auth::user();
       $user=$user['attributes'];
        if($user==null)
 {

      return redirect()->to('home');
 }
$order=addtocart::where('email',$user['email'])->where('checkout','YES')->get();
    
for($i=0;$i<count($order);$i++)
{
    $demodata=$order[$i];
    $demodata=$demodata['attributes'];
    orders::create([
        'email'=>$user['email'],
        'productid'=>$demodata['productid'],
        'name' =>$request['name'],
        'productname' =>$demodata['name'],
        'address'=>$request['address'],
        'imageid'=>$demodata['imageid'],
        'price' =>$demodata['price'],
        'quantity'=>1,
        ]);
    addtocart::where('email',$user['email'])->where('productid',$demodata['productid'])->where('checkout','YES')->delete();
   $uploaddata= uploaddata::where('id',$demodata['productid'])->first();
   $uploaddata=$uploaddata['attributes'];
   $quantity=(int)$uploaddata['quantity'];
   $quantity=$quantity-1;
    uploaddata::where('id',$demodata['productid'])->update(array('quantity' => $quantity
           ));
}

$orderdata=orders::where('email',$user['email'])->get();
 return redirect()->to('showorder')->with('product',$orderdata);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

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

class UploaddataController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data= $request->all();
        // dd($data);
        $data=$data['data'];

         $file = $request->file('image');
             $directory = 'image';

            $demo=Storage::makeDirectory($directory);
            $filemime = $file->getClientmimeType();
          $filemime = substr($filemime,6);
   $uniqueid=uniqid();
    $fileName = $uniqueid.'.'.$filemime; 
    $destinationPath = '/'.$directory.'/'.$fileName;

         uploaddata::create([
'name' =>$data['name'],
'category' => $data['category'],
'description' => $data['description'],
'price' => $data['price'],
'quantity' => $data['quantity'],
'image' => $fileName,
'imageid' => $uniqueid,
'subcategory' => $data['subcategory'],
'subdescription' =>$data['subdescription'],
'feature' =>$data['feature'],
            ]);

       
   
 $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));
  Session::flash('message', 'Product Added');
     return Redirect::back();

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

   public function homeview()
    {
        $user = Auth::user();
       $user=$user['attributes'];

        $data=uploaddata::orderBy('created_at','desc')->get();
 $featuredata=uploaddata::where('feature','YES')->get();
 if($user!=null)
 {
      return redirect()->to('home');
 }
 // dd($featuredata);
        return view('welcome')->with('data',$data)->with('featuredata',$featuredata);

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
 public function delete(Request $request)
    {
        
        $data= $request->all();
        $data=$data['uniqueid'];
        // dd($data);
         $get=uploaddata::where('id',$data)->first();
        $get=uploaddata::where('id',$data)->delete();
        Session::flash('message', 'Product deleted');
        return Redirect::back();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $get=uploaddata::where('id',$id)->first();
       $get=$get['attributes'];
       return view('editupload')->with('data',$get);
    }
    public function view()
    {
        $data=uploaddata::all();
        // dd($data);
        return view('admin')->with('data',$data);
    }

       public function mobileview()
    {
        $data=uploaddata::all();
        // dd($data);
        return view('mobile')->with('data',$data);
    }
    
        public function individualmobileview($id)
    {
        $data=uploaddata::where('id',$id)->first();
        // dd($data);
             $user = Auth::user();
       $user=$user['attributes'];
       // dd($user);
       $product = addtocart::where('email',$user['email'])->get();
      $amount=[];
      for($i=0;$i<count($product);$i++)
      {
        $demo=$product[$i];
        $demo=$demo['attributes'];
        // dd((int)$demo['price']);
        $amount[$i]=(int)$demo['price'];

      }

      // dd(array_sum($amount));
        return view('product-details')->with('data',$data)->with('cart',$product)->with('amount',$amount);
    }

           public function submobileview($id)
    {
         $data=uploaddata::where('id',$id)->first();
        // dd($data);
             $user = Auth::user();
        $data=uploaddata::where('subcategory',$id)->get();
        // dd($data);
 $product = addtocart::where('email',$user['email'])->get();
      $amount=[];
      for($i=0;$i<count($product);$i++)
      {
        $demo=$product[$i];
        $demo=$demo['attributes'];
        // dd((int)$demo['price']);
        $amount[$i]=(int)$demo['price'];

      }

        return view('submobile')->with('data',$data)->with('id',$id)->with('cart',$product)->with('amount',$amount);
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
    public function readdtocart($id)
{
     $user = Auth::user();
       $user=$user['attributes'];
addtocart::where('email',$user['email'])->where('productid',$id)->update(array('checkout' => 'YES',
           ));
 return Redirect::back();
}
     public function savetocart($id)

    {
  $user = Auth::user();
       $user=$user['attributes'];
       // dd($user);
       if($user==null)
       {
        // dd('hello');
 return redirect()->to('/login');
}
addtocart::where('email',$user['email'])->where('productid',$id)->update(array('checkout' => 'NO',
           ));
 return Redirect::back();
    }
 public function checkout()
    {
           $user = Auth::user();
       $user=$user['attributes'];
       // dd($user);
       if($user==null)
       {
        // dd('hello');
 return redirect()->to('/login');
}
// dd('hello');
  $product=addtocart::where('email',$user['email'])->where('checkout','YES')->get();
  // dd($product);
      $amount=[];
      for($i=0;$i<count($product);$i++)
      {
        $demo=$product[$i];
        $demo=$demo['attributes'];
        // dd((int)$demo['price']);
        $amount[$i]=(int)$demo['price'];

      }
       $saveproduct=addtocart::where('email',$user['email'])->where('checkout','NO')->get();
        return view('product-summary')->with('product',$product)->with('amount',$amount)->with('saveproduct',$saveproduct);
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
    public function imageview($id)
    {
        $demo=uploaddata::where('imageid',$id)->first();
$demo= $demo['attributes'];
$fileName = $demo['image'];
          $directory = 'image';
        $destinationPath = 'app/'.$directory.'/'.$fileName;
        //dd($destinationPath);
 return Image::make(storage_path() . '/' . $destinationPath)->response();
    }

 public function addtocart($id)
    {
         $user = Auth::user();
       $user=$user['attributes'];
       // dd($user);
       if($user==null)
       {
        // dd('hello');
 return redirect()->to('/login');
}
         $demo=uploaddata::where('id',$id)->first();
$demo= $demo['attributes'];
$check=addtocart::where('email',$user['email'])->where('productid',$id)->first();
if(!$check)
{
addtocart::create([
'email' =>$user['email'],
'productid'=>$id,
'name'=> $demo['name'],
'imageid'=> $demo['imageid'],
'price'=> $demo['price'],
'quantity'=> 1,
'checkout'=> 'YES',
    ]);
}
else{
    $check=$check['attributes'];
    $n=1;
    $n=$check['quantity']+$n;
    // dd($n);
   addtocart::where('email',$user['email'])->where('productid',$id)->update(array('quantity' => $n,
           ));
}
// dd(addtocart::all());
  Session::flash('message', 'Product Added');
     return Redirect::back();
    }

}

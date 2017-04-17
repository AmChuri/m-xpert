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
        $data=uploaddata::orderBy('created_at','desc')->get();

        return view('welcome')->with('data',$data);

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
        return view('product-details')->with('data',$data);
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
}

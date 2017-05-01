<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\uploaddata;
use App\addtocart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
       $user=$user['attributes'];
       $data=uploaddata::orderBy('created_at','desc')->get();
        $featuredata=uploaddata::where('feature','YESS')->get();
          $product = addtocart::where('email',$user['email'])->get();
      $amount=[];
      for($i=0;$i<count($product);$i++)
      {
        $demo=$product[$i];
        $demo=$demo['attributes'];
        // dd((int)$demo['price']);
        $amount[$i]=(int)$demo['price'];

      }
        return view('home')->with('user',$user)->with('data',$data)->with('featuredata',$featuredata)->with('cart',$product)->with('amount',$amount);
    }
}

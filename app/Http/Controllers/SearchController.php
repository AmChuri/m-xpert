<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\uploaddata;

class SearchController extends Controller
{
    //
  public function autocomplete(Request $request)
    {
        $data = uploaddata::select("name as name")->where("name","LIKE","%{$request->input('query')}%")->get();
        return response()->json($data);
    }

  public function view(Request $request)
  {
  	$data = uploaddata::select("*")->where("name","LIKE","%{$request->input('search')}%")->get();
  	if(count($data)==0)
  	{
  		$data = uploaddata::select("*")->where("category","LIKE","%{$request->input('search')}%")->get();
  	}
  	return view('search')->with('data',$data)->with('request',$request['search']);
  }


}

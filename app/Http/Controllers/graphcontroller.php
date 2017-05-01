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
use App\graph;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class graphcontroller extends Controller
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
    public function create()
    {
        //
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

 public function add($id,Request $request)
    {
       $data = uploaddata::where('id',$id)->first();
       $uploaddata = $request['data'];
       $checkdata= graph::where('pid',$id)->where('date',$uploaddata['date'])->first();
       if(!$checkdata)
       {
       graph::create([
        'pid'=>$id,
        'date'=> $uploaddata['date'],
        'price'=>$uploaddata['price']]);
   }
   else
   {
    graph::where('pid',$id)->where('date',$uploaddata['date'])->update(array('price' => $uploaddata['price']
           ));
   }
        Session::flash('message', 'Price Added');
     return Redirect::back();
    }


    public function view($id)
    {
        return view('addgraph')->with('id',$id);
    }


    public function graphview($id)
    {
        $data = uploaddata::where('id',$id)->first();
        $data=$data['attributes'];
        if(!$data)
        {
            return redirect()->to('/');
        }
        $graphdata= graph::where('pid',$id)->get();
        $graph=[];
        for($i=0;$i<count($graphdata);$i++)
        {
$demodata=$graphdata[$i];
$graph[$i]=$demodata['attributes'];
        }
        // dd($graph);

 $datauploaded=[];
 $today=date('w',time());
$today=intval($today);
// $today=2;
$day = array(0,1,2,3,4,5,6);
$start=  array_slice($day, 0,$today);
 $next= array_slice($day,$today+1);
 // dd($next);
for($i=0;$i<count($next);$i++)
{
  $datauploaded[$next[$i]]=0;
}
for($i=0;$i<count($start);$i++)
{
  $datauploaded[$start[$i]]=0;
}
$datauploaded[$today]=0;

$demotoday=$datauploaded;
for($i=0;$i<count($datauploaded);$i++)
{
  if(array_key_exists($i, $demotoday))
  {
    if($i==0)
    {
      $demotoday[$i]='Sun';
    }
     elseif($i==1)
    {
      $demotoday[$i]='Mon';
    }
     elseif($i==2)
    {
      $demotoday[$i]='Tue';
    }
     elseif($i==3)
    {
      $demotoday[$i]='Wed';
    }
     elseif($i==4)
    {
      $demotoday[$i]='Thu';
    }
     elseif($i==5)
    {
      $demotoday[$i]='Fri';
    }
     elseif($i==6)
    {
      $demotoday[$i]='Sat';
    }
  }
}
$pricegraph=[];
for($i=0;$i<count($graph);$i++)
{
$demo=$graph[$i];
$t=strtotime($demo['date']);
if($t==strtotime(date('Y-m-d',time())))
{
$pricegraph[0]=$demo['price'];
}
elseif($t==strtotime(date('Y-m-d',time()-60*60*24)))
{
    $pricegraph[1]=$demo['price'];
}
elseif($t==strtotime(date('Y-m-d',time()-60*60*24*2)))
{
    $pricegraph[2]=$demo['price'];
}
elseif($t==strtotime(date('Y-m-d',time()-60*60*24*3)))
{
    $pricegraph[3]=$demo['price'];
}
elseif($t==strtotime(date('Y-m-d',time()-60*60*24*4)))
{
    $pricegraph[4]=$demo['price'];
}
elseif($t==strtotime(date('Y-m-d',time()-60*60*24*5)))
{
    $pricegraph[5]=$demo['price'];
}
elseif($t==strtotime(date('Y-m-d',time()-60*60*24*6)))
{
    $pricegraph[6]=$demo['price'];
}
}
// ksort($pricegraph);
// dd($pricegraph);
for($i=0;$i<6;$i++)
{
if(!array_key_exists($i, $pricegraph))
{
  $pricegraph[$i]=$data['price'];
}
}
ksort($pricegraph);

        // $time = strtotime('2017-05-1');
        // $todaytime=date('Y-m-d',time()-60*60*24*5);
// dd($todaytime);
// dd($time,strtotime($todaytime));
// $newformat = date('Y-m-d',$time);
        return view('graph')->with('data',$data)->with('id',$id)->with('week',$demotoday)->with('price',$pricegraph);

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

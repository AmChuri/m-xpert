$id=Auth::guard('user')->user();
                          $newid=$id['attributes'];
   
    $userdata=mobileprice::where('profileurl',$newid['profileurl'])->first();


     if(!$superadmin)
{
  $superadmin = teacherclassroom::where('classroomcode',$id)->where('superadmin','YES')->first();
   if(!$superadmin)
{
  $superadmin = mobileprice::where('classroomcode',$id)->where('superadmin','YES')->first();
}
}

       $superadmin=$superadmin['attributes'];
    $newdata=[];
      for($i=1;$i<=12;$i++)
{

  if (!array_key_exists($i, $newdata)) {
$m=0;
$newdata[$i]=$m;
}
}
   
  $filedata=[];
  $j=0;
for($i=0;$i<count($mobiledata);$i++)
{
  $d=$mobiledata[$i];
  $d=$d['attributes'];



$filedata[$j]=$d;
$j=$j+1;
  
}



 $time=60*60*24*7;
 $te=date('Y-m-d',time()-$time);
 // dd($te);
 $filecount=0;
 for($i=0;$i<count($files);$i++)
 {
$file=$files[$i];
$file=$file['attributes'];
$t=$file['created_at'];
$space=strpos($t, ' ');
$t=substr($t, 0,$space);

if(strtotime($te) > strtotime($t)) /* Counts the number of files uploaded before the 7 days */
{
$filecount = $filecount+1;
}
 }
 /* Logic for getting last seven days where 0 is sunday and 6 is saturday */
 $fileuploaded=[];
 $today=date('w',time());
$today=intval($today);
// $today=2;
$day = array(0,1,2,3,4,5,6);
$start=  array_slice($day, 0,$today);
 $next= array_slice($day,$today+1);
 // dd(count($start));
for($i=0;$i<count($next);$i++)
{
  $fileuploaded[$next[$i]]=0;
}
for($i=0;$i<count($start);$i++)
{
  $fileuploaded[$start[$i]]=0;
}
$fileuploaded[$today]=0;
// dd(date('w',time()-60*60*24*6));
// dd($filedata);
$demotoday=$fileuploaded;
// dd($filedata);
for($i=0;$i<count($filedata);$i++)
{
  // dd($filedata);
  $file=$filedata[$i];
  // dd($file);
  $t=$file['created_at'];
$space=strpos($t, ' ');
$t=substr($t, 0,$space);
  if(strpos($file['activity'], 'Added new') !== false)
  {
      if(strtotime(date('Y-m-d',time())) == strtotime($t) )
  {$filecount=$filecount+1;
  $fileuploaded[$today]=$filecount;

  }
     elseif(strtotime(date('Y-m-d',time()-60*60*24)) == strtotime($t) )
  {
$checkdate= date('w',time()-60*60*24);
$checkdate=intval($checkdate);
$filecount=$filecount+1;

 $fileuploaded[$checkdate]=$filecount;
  }
   elseif(strtotime(date('Y-m-d',time()-60*60*24*2)) == strtotime($t) )
  {
$checkdate= date('w',time()-60*60*24*2);
$checkdate=intval($checkdate);

$filecount=$filecount+1;

 $fileuploaded[$checkdate]=$filecount;
  }
     elseif(strtotime(date('Y-m-d',time()-60*60*24*3)) == strtotime($t) )
  {
$checkdate= date('w',time()-60*60*24*3);
$checkdate=intval($checkdate);

$filecount=$filecount+1;

 $fileuploaded[$checkdate]=$filecount;
  }
     elseif(strtotime(date('Y-m-d',time()-60*60*24*4)) == strtotime($t) )
  {
$checkdate= date('w',time()-60*60*24*4);
$checkdate=intval($checkdate);
$filecount=$filecount+1;

 $fileuploaded[$checkdate]=$filecount;
  }
     elseif(strtotime(date('Y-m-d',time()-60*60*24*5)) == strtotime($t) )
  {
$checkdate= date('w',time()-60*60*24*5);
$checkdate=intval($checkdate);
$filecount=$filecount+1;

 $fileuploaded[$checkdate]=$filecount;
  }
     elseif(strtotime(date('Y-m-d',time()-60*60*24*6)) == strtotime($t) )
  {
$checkdate= date('w',time()-60*60*24*6);
$checkdate=intval($checkdate);
$filecount=$filecount+1;

 $fileuploaded[$checkdate]=$filecount;
  }
  }
  elseif($file['activity'] =='Deleted File')
  {
if(strtotime(date('Y-m-d',time())) == strtotime($t) )
  {$filecount=$filecount-1;
  $fileuploaded[$today]=$filecount;
  }
     elseif(strtotime(date('Y-m-d',time()-60*60*24)) == strtotime($t) )
  {
$checkdate= date('w',time()-60*60*24);
$checkdate=intval($checkdate);
$filecount=$filecount-1;

 $fileuploaded[$checkdate]=$filecount;
  }
   elseif(strtotime(date('Y-m-d',time()-60*60*24*2)) == strtotime($t) )
  {
$checkdate= date('w',time()-60*60*24*2);
$checkdate=intval($checkdate);
$filecount=$filecount-1;

 $fileuploaded[$checkdate]=$filecount;
  }
     elseif(strtotime(date('Y-m-d',time()-60*60*24*3)) == strtotime($t) )
  {
$checkdate= date('w',time()-60*60*24*3);
$checkdate=intval($checkdate);
$filecount=$filecount-1;

 $fileuploaded[$checkdate]=$filecount;
  }
     elseif(strtotime(date('Y-m-d',time()-60*60*24*4)) == strtotime($t) )
  {
    $checkdate= date('w',time()-60*60*24*4);
$checkdate=intval($checkdate);
$filecount=$filecount-1;

 $fileuploaded[$checkdate]=$filecount;
  }
     elseif(strtotime(date('Y-m-d',time()-60*60*24*5)) == strtotime($t) )
  {
    $checkdate= date('w',time()-60*60*24*5);
$checkdate=intval($checkdate);
$filecount=$filecount-1;

 $fileuploaded[$checkdate]=$filecount;
  }
     elseif(strtotime(date('Y-m-d',time()-60*60*24*6)) == strtotime($t) )
  {
    $checkdate= date('w',time()-60*60*24*6);
$checkdate=intval($checkdate);
$filecount=$filecount-1;

 $fileuploaded[$checkdate]=$filecount;
  }
  }
 
}
// dd($demotoday);
for($i=0;$i<count($fileuploaded);$i++)
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



  $eventuploaded=[];
  for($i=0;$i<count($next);$i++)
{
  $eventuploaded[$next[$i]]=0;
}
for($i=0;$i<count($start);$i++)
{
  $eventuploaded[$start[$i]]=0;
}
$eventuploaded[$today]=0;
for($i=0;$i<count($eventdata);$i++)
{
  // dd($filedata);
  $file=$eventdata[$i];
  // dd($file);
  $t=$file['created_at'];
$space=strpos($t, ' ');
$t=substr($t, 0,$space);

if(strtotime(date('Y-m-d',time())) == strtotime($t) )
  {$eventcount=$eventcount+1;
  $eventuploaded[$today]=$eventcount;

  }
     elseif(strtotime(date('Y-m-d',time()-60*60*24)) == strtotime($t) )
  {
$checkdate= date('w',time()-60*60*24);
$checkdate=intval($checkdate);
$eventcount=$eventcount+1;

 $eventuploaded[$checkdate]=$eventcount;
  }
   elseif(strtotime(date('Y-m-d',time()-60*60*24*2)) == strtotime($t) )
  {
$checkdate= date('w',time()-60*60*24*2);
$checkdate=intval($checkdate);

$eventcount=$eventcount+1;

 $eventuploaded[$checkdate]=$eventcount;
  }
     elseif(strtotime(date('Y-m-d',time()-60*60*24*3)) == strtotime($t) )
  {
$checkdate= date('w',time()-60*60*24*3);
$checkdate=intval($checkdate);

$eventcount=$eventcount+1;

 $eventuploaded[$checkdate]=$eventcount;
  }
     elseif(strtotime(date('Y-m-d',time()-60*60*24*4)) == strtotime($t) )
  {
$checkdate= date('w',time()-60*60*24*4);
$checkdate=intval($checkdate);
$eventcount=$eventcount+1;

 $eventuploaded[$checkdate]=$eventcount;
  }
     elseif(strtotime(date('Y-m-d',time()-60*60*24*5)) == strtotime($t) )
  {
$checkdate= date('w',time()-60*60*24*5);
$checkdate=intval($checkdate);
$eventcount=$eventcount+1;

 $eventuploaded[$checkdate]=$eventcount;
  }
     elseif(strtotime(date('Y-m-d',time()-60*60*24*6)) == strtotime($t) )
  {
$checkdate= date('w',time()-60*60*24*6);
$checkdate=intval($checkdate);
$eventcount=$eventcount+1;

 $eventuploaded[$checkdate]=$eventcount;
  }
  }



  return view('report')->with(array('classes' => $newdata))->with(array('fileupload' => $fileuploaded))->with(array('weekday' => $demotoday))->with(array('eventupload' => $eventuploaded))->with('notifications',$notifyuser)->with('superadmin',$superadmin)->with('userdata',$userdata['attributes']);

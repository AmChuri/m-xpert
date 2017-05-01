<?php
use App\uploaddata;

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);
     $data=uploaddata::all();
        // dd($data);
        // return view('admin')->with('data',$data);
    return view('admin.home')->with('data',$data);
})->name('home');


<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','UploaddataController@homeview');

Auth::routes();

Route::get('/home', 'HomeController@index');



Route::get('/admin/upload', function () {
    return view('upload');
});

Route::post('/dataupload', 'UploaddataController@create');
Route::post('/admin/deletedata', 'UploaddataController@delete');
Route::get('/admin','UploaddataController@view');
Route::get('/admin/editproduct/{id}','UploaddataController@edit');
Route::get('/image/{id}','UploaddataController@imageview');

Route::get('/product/mobiles','UploaddataController@mobileview');

Route::get('/product/mobiles/v/{id}','UploaddataController@individualmobileview');
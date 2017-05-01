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

Route::get('/product/mobiles/v/{id}/graph','graphcontroller@graphview');

Route::get('/product/mobiles/s/{id}','UploaddataController@submobileview');

Route::get('/product/add/{id}','UploaddataController@addtocart');
Route::get('/product/save/{id}','UploaddataController@savetocart');
Route::get('/product/checkout/','UploaddataController@checkout');
Route::get('/product/readd/{id}','UploaddataController@readdtocart');


Route::get('/demon', function () {
    return view('demo');
});

Route::get('search',array('as'=>'search','uses'=>'SearchController@search'));
Route::get('autocomplete',array('as'=>'autocomplete','uses'=>'SearchController@autocomplete'));
Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

Route::get('/search','SearchController@view');
Route::get('/admin/graph/{id}/view','graphcontroller@view');
Route::post('/admin/graph/{id}/add','graphcontroller@add');

Route::post('/order','ordercontroller@create');
Route::get('/showorder','ordercontroller@view');
Route::get('/admin/order','ordercontroller@adminview');
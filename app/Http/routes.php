<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//
Route::get('/', function () {
    return view('welcome');
    return "hi ";
});
//
//Route::get('/test/{id}/{text}', function ($id,$text) {
//   // return view('welcome');
//    return $id ." ".$text;
//});

//Route::get('/home/page/example',  array('as'=>'admin.home', function () {
//   $url=route('admin.home');
//    return $url;
//}));
//Route::resource('main','HeshamController');
//Route::get('/hesham/{id}','HeshamController@index');
//Route::get('/contact','HeshamController@contact');
//Route::get('/pass_data/{id}/{name}/{pass}','HeshamController@show_post');


//Route::get('/contact', function () {
//    return view('contact');
//   // return "hi ";
//});

Route::auth();

Route::get('/home', 'HomeController@index');

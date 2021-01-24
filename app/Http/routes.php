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
  //  return "hi ";
});

Route::group(['prefix' => 'api', 'middleware' => 'api'], function() {
    
    Route::get('api_test', 'HeshamController@api');
   
});

Route::auth();

Route::get('/home', 'HomeController@index');
 
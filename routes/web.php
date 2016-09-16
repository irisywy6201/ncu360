<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('home','buildingController@index');
Route::post('home','buildingController@store');
Route::get('home/{id}','buildingController@show');
Route::delete('home/{id}','buildingController@destroy');
Route::get('home/{id}/edit','buildingController@edit');
Route::patch('home/{id}', 'buildingController@update');

// Route::get('home/{id}','AdminController@index');
Route::post('home/{id}','AdminController@store');
Route::get('home/{id}/location','AdminController@show');
Route::delete('home/{id}/location','AdminController@destroy');
Route::get('home/{id}/location/edit','AdminController@edit');
Route::patch('home/{id}/location', 'AdminController@update');

Auth::routes();

Route::get('adminlogin', 'HomeController@index');

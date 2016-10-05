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
    return view('landing');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/user/{user}', 'UserController@dashboard');
Route::get('/dashboard', 'UserController@dashboard');
Route::get('/user/{user}/orders', 'UserController@orders');
Route::get('/user/{user}/recipients', 'UserController@recipients');

Route::get("/order/create", function(){ return view('order.create');});
Route::post("/order/create", "OrderController@create");
Route::get("/order/{order}", "OrderController@display");
Route::post("/order/update", "OrderController@update");

Route::get("/recipient/create", function(){return view('recipient.new');});
Route::post("/recipient/create", "RecipientController@create");
Route::get("/recipient/{recipient}", "RecipientController@display");
Route::post("/recipient/update", "RecipientController@update");
Route::get("/recipient/{recipient}/delete", "RecipientController@delete");

Route::get('/admin/dashboard',"AdminController@dashboard");

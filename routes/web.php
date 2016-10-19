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
    return view('welcome');
});

Auth::routes();

Route::get("/admin", [ "uses" => "AdminController@index" ]);
Route::get("/admin/accept", [ "uses" => "AcceptController@index" ]);
Route::get("/admin/reject", [ "uses" => "RejectController@index" ]);
Route::get("/admin/all", [ "uses" => "AllController@index" ]);
Route::get('/home', 'HomeController@index');

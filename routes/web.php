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

// Events Booking Section
Route::get('/', "WelcomeController@index");

Route::post("/iswWeb", "ISWController@test");

Route::get("/payUs", "ISWController@index");

Route::get('/events', "EventController@index");

Route::post("/createEvent", "EventController@store");

Auth::routes();

// Display view with required individual data

Route::get('/home', 'HomeController@index');

Route::get('/admin', 'AdminController@index');

Route::get("/pend", 'PendController@index');

Route::get("/accept", 'AcceptController@index');

Route::get('/cancel', 'CancelController@index');

// Get required data asychronously and updating the database

Route::get('/rec/{id}', 'AdminController@show');

Route::put('/accept/update/{id}', 'AdminController@update');

Route::put('/cancel/update/{id}', 'AdminController@updateCancel');

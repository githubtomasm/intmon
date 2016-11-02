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

Route::get('/', "HomeController@index")->name('home')->middleware("auth");
Route::get('api/geo', "HomeController@geo")->name('geo');
Route::get("api/fields/{muniId}", "HomeController@fields")->name('getFields');
Route::get("api/movi", "MovController@index")->name('movIndex');
Route::get("api/incs", "IncController@index")->name('incIndex');


Auth::routes();


<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

// Route::get('/home', 'HomeController@index');


// Route::put('/api/jrv/apertura',"JrvController@apertura")->name('guardar.apertura')->middleware('auth:api');
// Route::put('/api/jrv/cierre',"JrvController@cierre")->name('guardar.cierre')->middleware('auth:api');
// Route::get('/api/jrv/apertura',"JrvController@show")->name('abrir.apertura')->middleware('auth:api');

// Route::put('/api/proc',"ProcController@guardar")->name('guardar.procuradores')->middleware('auth:api');
// Route::get('/api/proc',"ProcController@show")->name('abrir.procuradores')->middleware('auth:api');

// Route::put('/api/movi',"MovController@guardar")->name('guardar.movilizacion')->middleware('auth:api');
// Route::get('/api/movi',"MovController@show")->name('abrir.movilizacion')->middleware('auth:api');

// Route::post('/api/incs',"IncController@create")->name('guardar.inicidencias')->middleware('auth:api');
// Route::get('/api/incs',"IncController@show")->name('abrir.inicidencias')->middleware('auth:api');

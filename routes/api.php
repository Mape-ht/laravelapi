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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/client','ApiclientController@create');
Route::get('/clients','ApiclientController@show');
Route::get('/showclient/{id}','ApiclientController@showById');
Route::put('/updateclient/{id}','ApiclientController@update');

Route::post('/compte','ApicompteController@create');
Route::get('/comptes','ApicompteController@show');
Route::get('/showcompte/{id}','ApicompteController@showById');


Route::post('/operation','ApioperationController@create');
Route::get('/operations','ApioperationController@show');
Route::get('/showoperation/{id}','ApioperationController@showById');
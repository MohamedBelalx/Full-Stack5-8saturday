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



Route::get('/all','TaskApiController@index');
Route::get('/all/{id}','TaskApiController@show');
Route::post('/all/store','TaskApiController@store');
Route::delete('/all/destroy/{id}','TaskApiController@destroy');
Route::patch('/all/update/{id}','TaskApiController@update');
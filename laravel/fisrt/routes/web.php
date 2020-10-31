<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/task/add','TaskController@insert')->name('insert');
Route::get('/task/delete/{id}','HomeController@delete')->name('delete');
Route::get('/task/done/{id}','HomeController@done')->name('done');

Route::get('/task/edit/{id}','HomeController@edit')->name('edit');
Route::post('/task/update/{id}','HomeController@update')->name('update');


Route::get('/task/restore/{id}','HomeController@restore')->name('restore');
Route::get('/task/destroy/{id}','HomeController@destroy')->name('destroy');

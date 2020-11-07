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
Route::get('/create','ProductController@create')->name('create');
Route::get('/all','ProductController@index')->name('all');
Route::get('/trashed','ProductController@trashed')->name('trashed');
Route::post('/insert','ProductController@store')->name('product.insert');

/* category routes */
Route::get('/category','CategoryController@index')->name('category');
Route::get('/category/create','CategoryController@create')->name('category.create');

Route::get('/category/edit/{id}','CategoryController@edit')->name('category.edit');
Route::get('/category/delete/{id}','CategoryController@delete')->name('category.delete');



Route::post('/category/insert','CategoryController@insert')->name('category.insert');
Route::post('/category/update','CategoryController@update')->name('category.update');
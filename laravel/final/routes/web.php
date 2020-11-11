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
/*user routes*/


Route::get('/index','IndexController@index')->name('index');

Route::get('/product/{id}','IndexController@show')->name('show');


Route::get('/product/show/all','IndexController@showAll')->name('show.all');

Route::get('/cart','CartController@index')->name('cart');
Route::post('/cart/add','CartController@add')->name('cart.add');
Route::get('/cart/delete/{rowId}','CartController@delete')->name('cart.delete');
Route::get('/cart/reset','CartController@reset')->name('cart.reset');



/*user routes*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create','ProductController@create')->name('create');
Route::get('/all','ProductController@index')->name('all');
Route::get('/trash/{id}','ProductController@trash')->name('trash');
Route::get('/edit/{id}','ProductController@edit')->name('edit');
Route::post('/insert','ProductController@store')->name('product.insert');
Route::post('/update/{id}','ProductController@update')->name('product.update');

Route::get('/trashed','ProductController@trashed')->name('trashed');
Route::get('/restore/{id}','ProductController@restore')->name('restore');
Route::get('/destroy/{id}','ProductController@destroy')->name('destroy');



/* category routes */
Route::get('/category','CategoryController@index')->name('category');
Route::get('/category/create','CategoryController@create')->name('category.create');

Route::get('/category/edit/{id}','CategoryController@edit')->name('category.edit');
Route::get('/category/delete/{id}','CategoryController@delete')->name('category.delete');



Route::post('/category/insert','CategoryController@insert')->name('category.insert');
Route::post('/category/update','CategoryController@update')->name('category.update');
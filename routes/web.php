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

Route::get('/', function(){
	return redirect()->route('public_login');
});

Route::get('admin', function(){
	return redirect()->route('login');
});

Route::post('search', 'ProductController@searchProduct')->name('search');

Route::get('product_show/{id}', 'ProductController@show');

Route::get('public_login', 'UserController@login')->name('public_login');

Route::get('catalog/products', 'ProductController@index')->name('public_catalog');

Route::get('/product/category/{category}', 'ProductController@showByCategory');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Grupo de rutas para los usuarios Autenticados*/
Route::middleware('auth')->group(function () {

	Route::resource('products', 'ProductController');

	Route::get('/panel/admin', 'ProductController@catalogShow')->name('panel-admin');

	Route::get('/product/delete', 'ProductController@showDeleteForm');

	Route::get('/product/edit', 'ProductController@showEditForm');

	Route::get('/product/delete_show/{product_code}', 'ProductController@showByCode');
	
	Route::get('/product/edit_show/{product_code}', 'ProductController@showByCode');
});

Route::resource('slider', 'SliderImageController');

Route::get('slider/{id}/delete', 'SliderImageController@destroy')->name('slider.destroy');

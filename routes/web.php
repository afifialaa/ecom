<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;

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
    return response('Ecommerce home page', 200);
});

#Route::resource('suppliers', SupplierController::class);
Route::get('/suppliers', 'App\Http\Controllers\SupplierController@index');
Route::post('/suppliers', 'App\Http\Controllers\SupplierController@create');
Route::delete('/suppliers/{id}', 'App\Http\Controllers\SupplierController@destroy');
Route::put('/suppliers/{id}', 'App\Http\Controllers\SupplierController@update');
Route::get('/suppliers/{id}', 'App\Http\Controllers\SupplierController@show');


Route::post('/category', 'App\Http\Controllers\CategoryController@create');
Route::get('/category', 'App\Http\Controllers\CategoryController@index');
Route::delete('/category/{id}', 'App\Http\Controllers\CategoryController@destroy');
Route::put('/category/{id}', 'App\Http\Controllers\CategoryController@update');
Route::get('/category/{id}', 'App\Http\Controllers\CategoryController@show');

Route::post('/product', 'App\Http\Controllers\ProductController@create');
Route::get('/product', 'App\Http\Controllers\ProductController@index');
Route::delete('/product/{id}', 'App\Http\Controllers\ProductController@destroy');
Route::put('/product/{id}', 'App\Http\Controllers\ProductController@update');
Route::get('/product/{id}', 'App\Http\Controllers\ProductController@show');

Route::post('/customer', 'App\Http\Controllers\CustomerController@create');
Route::get('/customer', 'App\Http\Controllers\CustomerController@index');
Route::delete('/customer/{id}', 'App\Http\Controllers\CustomerController@destroy');
Route::put('/customer/{id}', 'App\Http\Controllers\CustomerController@update');
Route::get('/customer/{id}', 'App\Http\Controllers\CustomerController@show');
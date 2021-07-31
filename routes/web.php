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
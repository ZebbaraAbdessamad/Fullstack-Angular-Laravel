<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/products', 'ProductController@index');
Route::get('/products/search/{request}', 'ProductController@search');
Route::get('/products/status/available', 'ProductController@available');
Route::get('/products/status/unavailable', 'ProductController@unavailable');
Route::put('/products/status/{id}', 'ProductController@update_status');
Route::delete('/products/delete/{id}', 'ProductController@destroy');
Route::post('/products/add-product/', 'ProductController@store');
Route::put('/product/update/{id}', 'ProductController@update_product');
Route::get('/product/{id}', 'ProductController@show_product');


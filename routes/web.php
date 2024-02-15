<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ProductController
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', 'App\Http\Controllers\ProductController@index');
Route::get('/', 'App\Http\Controllers\ProductController@index');
Route::get('/product/{ID}', 'App\Http\Controllers\ProductController@product');
Route::get('/productdetail/{ID}', 'App\Http\Controllers\ProductController@productdetail');
Route::get('/news', 'App\Http\Controllers\ProductController@showNews');
Route::get('/contactUs', 'App\Http\Controllers\ProductController@contactUs');


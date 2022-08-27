<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\PostController@index');
Route::post('/posts', 'App\Http\Controllers\PostController@store');
Route::get('/post/spot', 'App\Http\Controllers\PostController@spot');
Route::get('/posts/create', 'App\Http\Controllers\PostController@create');
Route::get('/posts/{post}','App\Http\Controllers\PostController@show');




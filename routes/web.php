<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SpotController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\UserController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/spots/{spot}', [SpotController::class, 'index']);

Route::controller(PostController::class)->group(function () {
    Route::get('/posts', 'index');
    Route::post('/posts', 'store');
    Route::get('/posts/create', 'create');
    Route::get('/posts/{post}', 'show' );
    Route::get('/posts/{post}/edit', 'edit');
    Route::put('/posts/{post}', 'update');
    Route::delete('/posts/{post}', 'delete');
   
   //コメント機能
    Route::post('/posts/{post}', 'store_comment' );
    Route::delete('/posts/{post}', 'delete_comment' );
   
    // いいね機能
    Route::post('/posts/{post}/like', 'like')->middleware('auth');
    Route::post('/posts/{post}/unlike', 'unlike')->middleware('auth');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/mypage', 'index');
    Route::get('/mypage/create', 'create');
    Route::post('/mypage', 'store');
    Route::get('/mypage/edit', 'edit');
    Route::put('/mypage/update', 'update');
});


Route::controller(LogController::class)->group(function () {
    Route::get('/logs', 'index');
    Route::post('/logs', 'store');
    Route::get('/logs/create', 'create');
    Route::get('/logs/{log}', 'show');
    Route::get('/logs/{log}/edit', 'edit');
    Route::put('/logs/{log}', 'update');
    Route::delete('/logs/{log}', 'delete');
    
});
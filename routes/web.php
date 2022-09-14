<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SpotController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Post_commentController;


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
      Route::get('/posts', 'index')->middleware('auth');
      Route::post('/posts/search', 'search');
      Route::post('/posts/store', 'store');
      Route::get('/posts/create', 'create');
      Route::get('/posts/{post}', 'show' )->name('post.show');
      Route::get('/posts/{post}/edit', 'edit');
      Route::put('/posts/{post}/update', 'update');
      Route::delete('/posts/{post}/delete', 'delete');
   
   // いいね機能
      Route::post('/posts/{post}/like', 'like')->middleware('auth');
      Route::post('/posts/{post}/unlike', 'unlike')->middleware('auth');
});   


Route::controller(Post_commentController::class)->group(function () {
      Route::post('/posts/{post}/comment', 'store' );
      Route::delete('/posts/{post}/comment', 'delete' )->name('comment.delete');
});


Route::controller(UserController::class)->group(function () {
      Route::get('/mypage/{user}', 'index');
      Route::get('/mypage/{user}/edit', 'edit');
      Route::put('/mypage/{user}/update', 'update');
      Route::get('/mypage/{user}/editUser', 'editUser')->middleware('auth');
      Route::put('/mypage/{user}/updateUser', 'updateUser');
      Route::post('/mypage/{user}/follow', 'follow');
      Route::post('/mypage/{user}/unfollow', 'unfollow');
    
});


Route::controller(LogController::class)->group(function () {
      Route::get('/logs', 'index');
      Route::post('/logs/store', 'store');
      Route::get('/logs/create', 'create');
      Route::get('/logs/{log}', 'show');
      Route::get('/logs/{log}/edit', 'edit');
      Route::put('/logs/{log}update', 'update');
      Route::delete('/logs/{log}/delete', 'delete');
    
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SpotController;
use App\Http\Controllers\LogController;
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
    Route::get('/posts/{post}', 'show');
    Route::get('/posts/{post}/edit', 'edit');
    Route::put('/posts/{post}', 'update');
    Route::delete('/posts/{post}', 'delete');
});

Route::controller(LogController::class)->group(function () {
    Route::get('/logs', 'index');
    Route::post('/logs', 'store');
    Route::get('/logs/create', 'create');
    Route::get('/logs/{log}', 'show');
    Route::get('/logs/{log}/edit', 'edit');
    Route::put('/logs/{log}', 'update');
    
});
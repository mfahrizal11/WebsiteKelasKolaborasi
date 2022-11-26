<?php

use Illuminate\Support\Facades\Routes;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\PostController;
use App\Models\Post;


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


Route::get('/',[PostController::class, 'index']);

Route::get('/post', [PostController::class, 'index']);

Route::get('/post/{post:slug}',[PostController::class, 'show']);
 
Route::get('/dashboard', function () {
    return view('dashboard.index');
});
 
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
 
Route::resource('/dashboard/posts/', DashboardPostController::class);

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSLug']);
Route::get('/create', function(){
    return view('dashboard.create');
});

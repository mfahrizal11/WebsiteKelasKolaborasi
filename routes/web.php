<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

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
    return view('home');
}, 
);

// User Login
Route::post('/login',[LoginController::class,'authenticate']);
Route::get('/login',[LoginController::class,'alihkan']);
Route::get('/logout',[LoginController::class,'logout']);
Route::post('/logout',[LoginController::class,'alihkan']);

// Dashboard
Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');

Route::get('/post', function () {
    return view('post');
}, 
);
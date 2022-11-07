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

Route::get('/', function () {
    return view('home');
}, 
);

Route::get('/post', [PostController::class, 'index']);


Route::get('/login', [LoginController::class, 'index']) ->middleware('guest'
);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function(){
    return view('dashboard.dashboard');
}) ;   

Route::resource('/dashboard/posts', DashboardPostController::class);
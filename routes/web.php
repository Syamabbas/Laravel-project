<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;

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

Route::get('/produk', function(){
    return view('posts', [
        "title" => "produk"
    ]);
});

Route::get('/', function(){
    return view('dashboard', [
        "title" => "home"
    ]);
});


Route::get('/', [DashboardController::class, 'index']);

Route::get('/signin', [SigninController::class, 'index']);
Route::post('/signin', [SigninController::class, 'store']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
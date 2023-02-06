<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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

Route::get('/', [LoginController::class, 'show'])->middleware('guest');

Route::get('/register', [RegisterController::class, 'show'])->middleware('guest');

Route::get('/home', [HomeController::class, 'normal']);

Route::get('/logout', [LogoutController::class, 'logout']);

Route::post('store-user', [RegisterController::class, 'register']);

Route::post('login-user', [LoginController::class, 'login']);

//Admin

Route::get('/admin/home', [HomeController::class, 'admin'])->middleware('is_admin');

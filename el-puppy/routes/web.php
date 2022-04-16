<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/klinik', function () {
    return view('klinik');
});

Route::get('/service', function () {
    return view('service');
});

// Route::get('/login', function () {
//     return view('loginForm');
// });

// Route::get('/register', function () {
//     return view('registerForm');
// });

Route::resource('/', SiteController::class);

Route::resource('product', ShopController::class);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authentication']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index']);

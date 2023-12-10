<?php

use Illuminate\Support\Facades\Route;
use App\Controllers\Controller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);

Route::get('/', function () {
    return view('beranda');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/promo', function () {
    return view('promo');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/detail1', function () {
    return view('detail1');
});

Route::get('/detail2', function () {
    return view('detail2');
});

Route::get('/produk1', function () {
    return view('produk1');
});

Route::get('/produk2', function () {
    return view('produk2');
});

Route::get('/produk3', function () {
    return view('produk3');
});

Route::get('/tampil',[PostController::class, 'tampil']);

Route::get('/search',[PostController::class, 'search']);

Route::get('/menu',[PostController::class, 'menu']);

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register',[AuthController::class, 'register'])->name('register');
    Route::post('/register',[AuthController::class, 'registerPost'])->name('registerPost');
    Route::get('/login',[AuthController::class, 'login'])->name('login');
    Route::post('/login',[AuthController::class, 'loginPost'])->name('loginPost');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home',[HomeController::class, 'index']);
    Route::delete('/logout',[AuthController::class, 'logout'])->name('logout');
});
<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardBeritaController;

Route::get('/', function () {
    return view('home',[
        "title"=>"Home"
    ]);
});
Route::get('/about', function () {
    return view('about',[
        "title"=>"About"
    ]);
});

Route::get('/berita',[BeritaController::class, 'index']);
Route::get('/berita/{detil_berita:slug}',[BeritaController::class, 'show']);

Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);

Route::get('/register',[RegisterController::class, 'index'])->middleware('guest');
Route::post('/register',[RegisterController::class, 'store']);

Route::get('/dashboard',[DashboardController::class, 'index'])->middleware('auth');

Route::get('/dashboard/berita/checkSlug', [DashboardBeritaController::class, 'checkSlug'])->Middleware('auth');

Route::resource('/dashboard/berita', DashboardBeritaController::class)->Middleware('auth');
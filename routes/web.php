<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;//php artisan make:controller UserController
use App\Http\Controllers\LoginController;//php artisan make:controller LoginController
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/login', function () {
    return view('login');
})->name('login')->middleware('guest');


Route::get('/', function () {
    return view('home');
})->middleware('auth')->name('home');


Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/sell', function () {
    return view('sell');
})->middleware('auth')->name('sell');

Route::get('/mantencion', function () {
    return view('mantencion');
})->middleware('auth')->name('mantencion');

Auth::Route(UserController::class);

Route::post('/register', [UserController::class, 'create']);

Route::post('/login', [LoginController::class, 'login']);

Route::put('/login', [LoginController::class, 'logout']);

Route::get('/admin', [AdminController::class, 'index'])
->middleware('auth.admin')    
->name('admin.index');

Route::get('/admin/mantencion', [AdminController::class, 'mantencion'])
->middleware('auth.admin')    
->name('admin.mantencion');


<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/category-run', function () {
    return view('category-run');
});

Route::get('/login-page', function () {
    return view('auth.login-page');
})->name('login-page');

Route::get('/register-page', function () {
    return view('auth.register-page');
})->name('register-page');

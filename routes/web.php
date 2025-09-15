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

Route::get('/registration-one', function () {
    return view('registration.registration-one');
})->name('registration-one');

Route::get('/registration-two', function () {
    return view('registration.registration-two');
})->name('registration-two');

Route::get('/registration-three', function () {
    return view('registration.registration-three');
})->name('registration-three');

Route::get('/data-confirmation', function () {
    return view('registration.data-confirmation');
})->name('data-confirmation');

Route::get('terms-and-conditions', function () {
    return view('terms-and-conditions');
})->name('terms-and-conditions');

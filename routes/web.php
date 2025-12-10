<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Homepage - Public
Route::get('/', function () {
    return view('home');
})->name('home');

// Placeholder auth routes (to be replaced when auth is implemented)
Route::get('/login', function () {
    return redirect('/')->with('message', 'Login coming soon!');
})->name('login');

Route::get('/register', function () {
    return redirect('/')->with('message', 'Registration coming soon!');
})->name('register');

<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Auth;
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

// Guest Routes (only accessible when NOT logged in)
Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
});

// Auth Routes (only accessible when logged in)
Route::middleware('auth')->group(function () {
    // Logout
    Route::post('/logout', function () {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        
        return redirect()->route('home');
    })->name('logout');
    
    // Dashboard placeholder
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
})->name('home');


// Proses login
Route::post('/login', [LoginController::class, 'login'])
    ->name('login.process');

// Dashboard admin
Route::get('/admin/dashboard', [LoginController::class, 'dashboard'])
    ->name('admin.dashboard');

// Logout
Route::post('/logout', [LoginController::class, 'logout'])
    ->name('logout');






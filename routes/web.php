<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;

Route::get('/', function () {
    return view('welcome');
})->name('home');


// Proses login
Route::post('/login', [LoginController::class, 'login'])
    ->name('login.process');


// Data pegawai
Route::get('/admin/data-pegawai', [PegawaiController::class, 'index'])->name('admin.data-pegawai');
Route::get('/admin/data-pegawai/input-pegawai', [PegawaiController::class, 'create'])->name('pegawai.create');
Route::post('/admin/data-pegawai/simpan-pegawai', [PegawaiController::class, 'store'])->name('pegawai.store');

// Logout
Route::post('/logout', [LoginController::class, 'logout'])
    ->name('logout');

    






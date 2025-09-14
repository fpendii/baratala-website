<?php

use App\Http\Controllers\admin\DashboardControllerAdmin;
use App\Http\Controllers\user\UserController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function () {
    // Rute untuk dashboard admin
    Route::get('/dashboard', [DashboardControllerAdmin::class, 'index'])->name('admin.dashboard');
});

Route::get('/', [UserController::class, 'index']);
Route::get('/tentang', [UserController::class, 'tentang']);
Route::get('/kontak', [UserController::class, 'kontak']);
Route::get('/galeri', [UserController::class, 'galeri']);
Route::get('/berita', [UserController::class, 'berita']);

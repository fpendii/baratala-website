<?php

use App\Http\Controllers\admin\DashboardControllerAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    // Rute untuk dashboard admin
    Route::get('/dashboard', [DashboardControllerAdmin::class, 'index'])->name('admin.dashboard');
});

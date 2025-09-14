<?php

use App\Http\Controllers\admin\DashboardControllerAdmin;
use App\Http\Controllers\admin\LaporanKeuanganController;
use App\Http\Controllers\admin\SuratMasukController;
use App\Http\Controllers\admin\LaporanKegiatanController;
use App\Http\Controllers\admin\BeritaAcaraController;
use App\Http\Controllers\admin\BeritaAcaraControllerAdmin;
use App\Http\Controllers\admin\LaporanKegiatanControllerAdmin;
use App\Http\Controllers\admin\LaporanKeuanganControllerAdmin;
use App\Http\Controllers\admin\ProfilPerusahaanController;
use App\Http\Controllers\admin\ProfilPerusahaanControllerAdmin;
use App\Http\Controllers\admin\SuratMasukControllerAdmin;
use App\Http\Controllers\admin\UangMasukController;
use App\Http\Controllers\admin\UangKeluarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('logout', BeritaAcaraControllerAdmin::class);

Route::prefix('admin')->name('admin.')->group(function () {
    // Rute untuk dashboard admin
    Route::get('/dashboard', [DashboardControllerAdmin::class, 'index'])->name('dashboard');

    // Rute resource untuk setiap fitur
    Route::resource('laporan-keuangan', LaporanKeuanganControllerAdmin::class);
    Route::resource('surat-masuk', SuratMasukControllerAdmin::class);
    Route::resource('laporan-kegiatan', LaporanKegiatanControllerAdmin::class);
    Route::resource('berita-acara', BeritaAcaraControllerAdmin::class);
    Route::resource('profil-perusahaan', ProfilPerusahaanControllerAdmin::class);
    Route::resource('uang-masuk', UangMasukController::class);
    Route::resource('uang-keluar', UangKeluarController::class);

    // Rute untuk ekspor laporan
    Route::get('laporan-keuangan/export/pdf', [LaporanKeuanganController::class, 'exportPdf'])->name('laporan-keuangan.export.pdf');
    Route::get('laporan-keuangan/export/excel', [LaporanKeuanganController::class, 'exportExcel'])->name('laporan-keuangan.export.excel');
});

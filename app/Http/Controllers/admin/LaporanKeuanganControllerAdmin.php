<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LaporanKeuanganControllerAdmin extends Controller
{
     public function index()
    {
        // Di sini Anda bisa menambahkan logika untuk mengambil data keuangan dari database.
        // Misalnya:
        // $laporan_keuangan = LaporanKeuangan::all();
        // return view('admin.laporan_keuangan', compact('laporan_keuangan'));

        return view('admin.laporan_keuangan.index');
    }
}

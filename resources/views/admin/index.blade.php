@extends('layouts.app')
@section('content')

        <!-- ===== KONTEN UTAMA ===== -->
        <div class="main-content flex-1 p-6 pb-20 md:pb-6">
            <h2 class="text-2xl font-bold mb-4">Ringkasan Uang Masuk/Keluar Bulan Ini</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <!-- Card Uang Masuk -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-gray-500 text-sm font-semibold uppercase mb-2">Total Uang Masuk</h3>
                    <p class="text-3xl font-bold text-green-600">Rp 0</p>
                </div>
                <!-- Card Uang Keluar -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-gray-500 text-sm font-semibold uppercase mb-2">Total Uang Keluar</h3>
                    <p class="text-3xl font-bold text-red-600">Rp 0</p>
                </div>
            </div>

            <!-- Sisa Anggaran -->
            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                <h3 class="text-gray-500 text-sm font-semibold uppercase mb-2">Sisa Anggaran</h3>
                <p class="text-3xl font-bold text-blue-600">Rp 0</p>
            </div>

            <!-- Notifikasi Surat Masuk Terbaru -->
            <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                <h3 class="text-xl font-bold mb-4">Notifikasi Surat Masuk Terbaru</h3>
                <ul class="divide-y divide-gray-200">
                    <li class="py-4">
                        <p class="font-medium text-gray-900">Surat 1: Pemberitahuan penting</p>
                        <p class="text-sm text-gray-500">Tanggal: 14 Sep 2025</p>
                    </li>
                    <li class="py-4">
                        <p class="font-medium text-gray-900">Surat 2: Laporan bulanan</p>
                        <p class="text-sm text-gray-500">Tanggal: 12 Sep 2025</p>
                    </li>
                    <li class="py-4">
                        <p class="font-medium text-gray-900">Surat 3: Undangan rapat</p>
                        <p class="text-sm text-gray-500">Tanggal: 10 Sep 2025</p>
                    </li>
                </ul>
            </div>

            <!-- Ringkasan Kegiatan -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold mb-4">Ringkasan Kegiatan</h3>
                <ul class="divide-y divide-gray-200">
                    <li class="py-4">
                        <p class="font-medium text-gray-900">Menambahkan data pengeluaran baru</p>
                        <p class="text-sm text-gray-500">Waktu: 15:30 WITA</p>
                    </li>
                    <li class="py-4">
                        <p class="font-medium text-gray-900">Mencetak laporan keuangan</p>
                        <p class="text-sm text-gray-500">Waktu: 11:00 WITA</p>
                    </li>
                    <li class="py-4">
                        <p class="font-medium text-gray-900">Mengelola pengguna</p>
                        <p class="text-sm text-gray-500">Waktu: 09:15 WITA</p>
                    </li>
                </ul>
            </div>

        </div>
@endsection

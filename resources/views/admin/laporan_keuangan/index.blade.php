@extends('layouts.app')

@section('title', 'Laporan Keuangan')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">Laporan Keuangan</h2>

        <!-- Bagian Input Data Keuangan -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <!-- Header dengan Tombol Tambah -->
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold text-gray-700">Input Data Keuangan</h3>
                <div class="flex flex-col md:flex-row gap-2">
                    <a href="{{ route('admin.uang-masuk.create') }}" class="inline-flex items-center space-x-2 bg-green-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-green-600 transition duration-200 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        <span>Tambah Uang Masuk</span>
                    </a>
                    <a href="{{ route('admin.uang-keluar.create') }}" class="inline-flex items-center space-x-2 bg-red-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-red-600 transition duration-200 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                        <span>Tambah Uang Keluar</span>
                    </a>
                </div>
            </div>
            <!-- Laporan Bulanan -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center mb-6">
                <!-- Rekapitulasi -->
                <div class="p-4 bg-blue-100 rounded-lg">
                    <p class="text-gray-500 text-sm">Uang Masuk</p>
                    <p class="text-2xl font-bold text-blue-600">Rp 0</p>
                </div>
                <div class="p-4 bg-red-100 rounded-lg">
                    <p class="text-gray-500 text-sm">Uang Keluar</p>
                    <p class="text-2xl font-bold text-red-600">Rp 0</p>
                </div>
                <div class="p-4 bg-green-100 rounded-lg">
                    <p class="text-gray-500 text-sm">Saldo Akhir</p>
                    <p class="text-2xl font-bold text-green-600">Rp 0</p>
                </div>
            </div>

            <!-- Grafik Pemasukan & Pengeluaran -->
            <h4 class="text-lg font-semibold text-gray-700 mb-2">Grafik Pemasukan dan Pengeluaran</h4>
            <div class="w-full h-80 bg-gray-200 rounded-lg flex items-center justify-center">
                <p class="text-gray-500">Placeholder untuk grafik (misalnya: Chart.js)</p>
            </div>
        </div>

        <!-- Bagian Export -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-xl font-semibold text-gray-700 mb-4">Export Laporan</h3>
            <p class="text-gray-600 mb-4">Pilih format laporan yang Anda inginkan.</p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{ route('admin.laporan-keuangan.export.pdf') }}" class="flex-1 bg-red-600 text-white font-bold py-2 px-4 rounded-lg block text-center hover:bg-red-700 transition duration-200">
                    Export ke PDF
                </a>
                <a href="{{ route('admin.laporan-keuangan.export.excel') }}" class="flex-1 bg-green-600 text-white font-bold py-2 px-4 rounded-lg block text-center hover:bg-green-700 transition duration-200">
                    Export ke Excel
                </a>
            </div>
        </div>
    </div>
@endsection

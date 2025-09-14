@extends('layouts.app')

@section('title', 'Laporan Kegiatan')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">Laporan Kegiatan</h2>

        <!-- Bagian Laporan Kegiatan -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <!-- Header dengan Tombol Tambah -->
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold text-gray-700">Ringkasan Laporan Kegiatan</h3>
                <a href="{{ route('admin.laporan-kegiatan.create') }}" class="bg-blue-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-200 text-center inline-flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                    </svg>
                    <span>Tambah</span>
                </a>
            </div>

            <!-- Filter Laporan -->
            <div class="flex flex-col md:flex-row justify-between items-center mb-4 space-y-4 md:space-y-0 md:space-x-4">
                <div class="w-full md:w-1/2">
                    <label for="filterProyek" class="block text-gray-700 font-medium mb-2">Laporan per Proyek</label>
                    <select id="filterProyek" name="filterProyek" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-200">
                        <option value="semua">Semua Proyek</option>
                        <option value="proyek-a">Proyek Eksplorasi A</option>
                        <option value="proyek-b">Proyek Penggalian B</option>
                    </select>
                </div>
                <div class="w-full md:w-1/2">
                    <label for="filterTanggal" class="block text-gray-700 font-medium mb-2">Laporan per Tanggal</label>
                    <input type="date" id="filterTanggal" name="filterTanggal" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-200">
                </div>
            </div>

            <!-- Tabel Data Kegiatan -->
            <div class="overflow-x-auto mt-6">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                    <thead>
                        <tr class="w-full bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Tanggal</th>
                            <th class="py-3 px-6 text-left">Kegiatan</th>
                            <th class="py-3 px-6 text-left">Tipe</th>
                            <th class="py-3 px-6 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        <!-- Contoh Data -->
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">2023-10-27</td>
                            <td class="py-3 px-6 text-left">Pengiriman hasil tambang ke pelabuhan</td>
                            <td class="py-3 px-6 text-left">Harian</td>
                            <td class="py-3 px-6 text-center">
                                <a href="#" class="text-blue-500 hover:text-blue-700">Lihat Dokumentasi</a>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">2023-10-20</td>
                            <td class="py-3 px-6 text-left">Laporan mingguan kemajuan proyek A</td>
                            <td class="py-3 px-6 text-left">Mingguan</td>
                            <td class="py-3 px-6 text-center">
                                <a href="#" class="text-blue-500 hover:text-blue-700">Lihat Dokumentasi</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

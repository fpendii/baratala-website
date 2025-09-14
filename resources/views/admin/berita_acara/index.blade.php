@extends('layouts.app')

@section('title', 'Berita Acara')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">Berita Acara</h2>

        <!-- Bagian Daftar Berita Acara -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold text-gray-700">Daftar Berita Acara</h3>
                <a href="{{ route('admin.berita-acara.create') }}" class="inline-flex items-center space-x-2 bg-blue-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-200 text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                    </svg>
                    <span>Tambah</span>
                </a>
            </div>

            <!-- Tabel Data Berita Acara -->
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                    <thead>
                        <tr class="w-full bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Judul</th>
                            <th class="py-3 px-6 text-left">Kategori</th>
                            <th class="py-3 px-6 text-center">Tanggal</th>
                            <th class="py-3 px-6 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        <!-- Contoh Data -->
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">Berita Acara Rapat Direksi November</td>
                            <td class="py-3 px-6 text-left">Rapat Direksi</td>
                            <td class="py-3 px-6 text-center">2023-11-01</td>
                            <td class="py-3 px-6 text-center">
                                <a href="#" class="text-blue-500 hover:text-blue-700">Lihat</a> |
                                <a href="#" class="text-red-500 hover:text-red-700">Hapus</a>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">Berita Acara Kejadian Lapangan Proyek B</td>
                            <td class="py-3 px-6 text-left">Kejadian Lapangan</td>
                            <td class="py-3 px-6 text-center">2023-10-28</td>
                            <td class="py-3 px-6 text-center">
                                <a href="#" class="text-blue-500 hover:text-blue-700">Lihat</a> |
                                <a href="#" class="text-red-500 hover:text-red-700">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

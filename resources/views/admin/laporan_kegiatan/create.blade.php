@extends('layouts.app')

@section('title', 'Tambah Laporan Kegiatan')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Tambah Laporan Kegiatan</h2>

    <div class="bg-white rounded-lg shadow-md p-6">
        <form action="{{ route('admin.laporan-kegiatan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Tanggal -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Tanggal Kegiatan</label>
                <input type="date" name="tanggal" class="w-full border rounded-lg px-3 py-2" required>
            </div>

            <!-- Judul -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Judul Kegiatan</label>
                <input type="text" name="judul" class="w-full border rounded-lg px-3 py-2" required>
            </div>

            <!-- Deskripsi -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Deskripsi</label>
                <textarea name="deskripsi" rows="4" class="w-full border rounded-lg px-3 py-2"></textarea>
            </div>

            <!-- Dokumentasi -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Upload Dokumentasi</label>
                <input type="file" name="dokumentasi" accept="image/*,application/pdf" class="w-full border rounded-lg px-3 py-2">
                <p class="text-sm text-gray-500 mt-1">Format: JPG, PNG, atau PDF (opsional)</p>
            </div>

            <!-- Tombol -->
            <div class="flex gap-4">
                <button type="submit" class="bg-blue-600 text-white font-bold px-4 py-2 rounded-lg hover:bg-indigo-700">
                    Simpan
                </button>
                <a href="{{ route('admin.laporan-kegiatan.index') }}" class="bg-gray-400 text-white font-bold px-4 py-2 rounded-lg hover:bg-gray-500">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection

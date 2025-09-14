@extends('layouts.app')

@section('title', 'Tambah Berita Acara')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Tambah Berita Acara</h2>

    <div class="bg-white rounded-lg shadow-md p-6">
        <form action="{{ route('admin.berita-acara.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Tanggal -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Tanggal</label>
                <input type="date" name="tanggal" class="w-full border rounded-lg px-3 py-2" required>
            </div>

            <!-- Judul -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Judul Berita Acara</label>
                <input type="text" name="judul" class="w-full border rounded-lg px-3 py-2" required>
            </div>

            <!-- Isi / Notulen -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Isi / Notulen</label>
                <textarea name="isi" rows="5" class="w-full border rounded-lg px-3 py-2" required></textarea>
            </div>

            <!-- Lampiran File -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Upload Lampiran</label>
                <input type="file" name="file_berita" accept="image/*,application/pdf" class="w-full border rounded-lg px-3 py-2">
                <p class="text-sm text-gray-500 mt-1">Format: JPG, PNG, atau PDF (opsional)</p>
            </div>

            <!-- Tombol -->
            <div class="flex gap-4">
                <button type="submit" class="bg-blue-600 text-white font-bold px-4 py-2 rounded-lg hover:bg-purple-700">
                    Simpan
                </button>
                <a href="{{ route('admin.berita-acara.index') }}" class="bg-gray-400 text-white font-bold px-4 py-2 rounded-lg hover:bg-gray-500">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection

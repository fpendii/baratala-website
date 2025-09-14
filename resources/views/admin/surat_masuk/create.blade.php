@extends('layouts.app')

@section('title', 'Tambah Surat Masuk')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Tambah Surat Masuk</h2>

    <div class="bg-white rounded-lg shadow-md p-6">
        <form action="{{ route('admin.surat-masuk.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Nomor Surat -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Nomor Surat</label>
                <input type="text" name="nomor_surat" class="w-full border rounded-lg px-3 py-2" required>
            </div>

            <!-- Tanggal Surat Masuk -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Tanggal Masuk</label>
                <input type="date" name="tanggal_masuk" class="w-full border rounded-lg px-3 py-2" required>
            </div>

            <!-- Pengirim -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Pengirim</label>
                <input type="text" name="pengirim" class="w-full border rounded-lg px-3 py-2" required>
            </div>

            <!-- Perihal -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Perihal</label>
                <input type="text" name="perihal" class="w-full border rounded-lg px-3 py-2" required>
            </div>

            <!-- Upload Surat -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Upload File Surat</label>
                <input type="file" name="file_surat" accept="image/*,application/pdf" class="w-full border rounded-lg px-3 py-2">
                <p class="text-sm text-gray-500 mt-1">Format: JPG, PNG, atau PDF (opsional)</p>
            </div>

            <!-- Tombol -->
            <div class="flex gap-4">
                <button type="submit" class="bg-blue-600 text-white font-bold px-4 py-2 rounded-lg hover:bg-blue-700">
                    Simpan
                </button>
                <a href="{{ route('admin.surat-masuk.index') }}" class="bg-gray-400 text-white font-bold px-4 py-2 rounded-lg hover:bg-gray-500">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection

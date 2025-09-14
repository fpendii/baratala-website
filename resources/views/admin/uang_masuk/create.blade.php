@extends('layouts.app')

@section('title', 'Tambah Uang Masuk')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Tambah Uang Masuk</h2>

    <div class="bg-white rounded-lg shadow-md p-6">
        <form action="{{ route('admin.uang-masuk.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Tanggal -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Tanggal</label>
                <input type="date" name="tanggal" class="w-full border rounded-lg px-3 py-2" required>
            </div>

            <!-- Jumlah -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Jumlah (Rp)</label>
                <input type="number" name="jumlah" class="w-full border rounded-lg px-3 py-2" required>
            </div>

            <!-- Keterangan -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Keterangan</label>
                <textarea name="keterangan" rows="3" class="w-full border rounded-lg px-3 py-2"></textarea>
            </div>

            <!-- Bukti -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Upload Bukti</label>
                <input type="file" name="bukti" accept="image/*,application/pdf" class="w-full border rounded-lg px-3 py-2">
                <p class="text-sm text-gray-500 mt-1">Format: JPG, PNG, atau PDF (opsional)</p>
            </div>

            <!-- Tombol -->
            <div class="flex gap-4">
                <button type="submit" class="bg-blue-600 text-white font-bold px-4 py-2 rounded-lg hover:bg-green-700">
                    Simpan
                </button>
                <a href="{{ route('admin.laporan-keuangan.index') }}" class="bg-gray-400 text-white font-bold px-4 py-2 rounded-lg hover:bg-gray-500">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection

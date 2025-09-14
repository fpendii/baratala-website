@extends('layouts.app')

@section('title', 'Daftar Pengguna')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">Daftar Pengguna</h2>

        <div class="bg-white rounded-lg shadow-md p-6">
            <!-- Header dengan Tombol Tambah -->
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-xl font-semibold text-gray-700">Data Pengguna</h3>
                <a href="{{ route('admin.pengguna.create') }}"
                   class="inline-flex items-center bg-blue-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-200 text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                              clip-rule="evenodd" />
                    </svg>
                    Tambah
                </a>
            </div>

            <!-- Tabel Pengguna -->
            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden">
                    <thead class="bg-gray-100 text-gray-700 text-sm uppercase font-semibold">
                        <tr>
                            <th class="py-3 px-6 text-left">Nama</th>
                            <th class="py-3 px-6 text-left">Email</th>
                            <th class="py-3 px-6 text-left">Role</th>
                            <th class="py-3 px-6 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 text-gray-600 text-sm">
                        <!-- Dummy Data 1 -->
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-6 whitespace-nowrap">Budi Santoso</td>
                            <td class="py-3 px-6">budi@example.com</td>
                            <td class="py-3 px-6">Admin</td>
                            <td class="py-3 px-6 text-center space-x-2">
                                <a href="#" class="inline-block bg-green-500 text-white px-3 py-1 rounded-lg text-xs font-medium hover:bg-green-600">Detail</a>
                                <a href="#" class="inline-block bg-yellow-500 text-white px-3 py-1 rounded-lg text-xs font-medium hover:bg-yellow-600">Edit</a>
                                <a href="#" class="inline-block bg-red-500 text-white px-3 py-1 rounded-lg text-xs font-medium hover:bg-red-600">Hapus</a>
                            </td>
                        </tr>
                        <!-- Dummy Data 2 -->
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-6 whitespace-nowrap">Siti Rahma</td>
                            <td class="py-3 px-6">siti@example.com</td>
                            <td class="py-3 px-6">User</td>
                            <td class="py-3 px-6 text-center space-x-2">
                                <a href="#" class="inline-block bg-green-500 text-white px-3 py-1 rounded-lg text-xs font-medium hover:bg-green-600">Detail</a>
                                <a href="#" class="inline-block bg-yellow-500 text-white px-3 py-1 rounded-lg text-xs font-medium hover:bg-yellow-600">Edit</a>
                                <a href="#" class="inline-block bg-red-500 text-white px-3 py-1 rounded-lg text-xs font-medium hover:bg-red-600">Hapus</a>
                            </td>
                        </tr>
                        <!-- Dummy Data 3 -->
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-6 whitespace-nowrap">Andi Wijaya</td>
                            <td class="py-3 px-6">andi@example.com</td>
                            <td class="py-3 px-6">User</td>
                            <td class="py-3 px-6 text-center space-x-2">
                                <a href="#" class="inline-block bg-green-500 text-white px-3 py-1 rounded-lg text-xs font-medium hover:bg-green-600">Detail</a>
                                <a href="#" class="inline-block bg-yellow-500 text-white px-3 py-1 rounded-lg text-xs font-medium hover:bg-yellow-600">Edit</a>
                                <a href="#" class="inline-block bg-red-500 text-white px-3 py-1 rounded-lg text-xs font-medium hover:bg-red-600">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

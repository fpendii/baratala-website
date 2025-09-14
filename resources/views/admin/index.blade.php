<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Gaya tambahan untuk bottom navigation agar tidak tumpang tindih */
        .bottom-nav {
            transform: translateY(0);
            transition: transform 0.3s ease-in-out;
            z-index: 50;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal pb-16 md:pb-0">

    <div class="flex flex-col md:flex-row min-h-screen">
        <!-- ===== SIDEBAR (Hanya tampil di layar md dan ke atas) ===== -->
        <div class="hidden md:block bg-gray-800 text-gray-100 flex-none w-64">
            <div class="p-6">
                <h1 class="text-white text-3xl font-bold">Baratala App</h1>
                <p class="text-sm text-gray-400">Dashboard Admin</p>
            </div>

            <!-- Button Bar untuk Navigasi -->
            <div class="flex flex-col p-4 space-y-2">
                <a href="{{ url('/admin/dashboard') }}" class="flex items-center justify-start w-full px-4 py-3 text-sm font-medium rounded-lg text-gray-100 bg-gray-700 hover:bg-gray-600 transition duration-150">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                    Dashboard
                </a>
                <a href="{{ url('/admin/pendapatan') }}" class="flex items-center justify-start w-full px-4 py-3 text-sm font-medium rounded-lg text-gray-100 hover:bg-gray-700 transition duration-150">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M8.433 7.026a.22.22 0 01.196.34L6.96 10.51a.252.252 0 00.323.344l2.164-1.39a.253.253 0 01.295.459l-2.164 1.39c-.846.54-1.956.126-2.497-.72C4.194 9.947 4.54 8.875 5.405 8.353l2.155-1.385zM11.567 12.974a.22.22 0 01-.196-.34L13.04 9.49a.252.252 0 00-.323-.344l-2.164 1.39a.253.253 0 01-.295-.459l2.164-1.39c.846-.54 1.956-.126 2.497.72.541.845.195 1.918-.67 2.44L12 14.363l-.433-.277zM10 18a8 8 0 100-16 8 8 0 000 16z" />
                    </svg>
                    Pendapatan
                </a>
                <a href="{{ url('/admin/pengeluaran') }}" class="flex items-center justify-start w-full px-4 py-3 text-sm font-medium rounded-lg text-gray-100 hover:bg-gray-700 transition duration-150">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-1.556-2.617A.525.525 0 0110.51 12H16a.5.5 0 00.5-.5v-4A.5.5 0 0016 7h-5.49a.525.525 0 01-.367-.156L8 4.293V2a2 2 0 012-2h6a2 2 0 012 2v3zM4 2v3a2 2 0 002 2h6.293a.5.5 0 01.367.156L14 9.617V12a2 2 0 01-2 2h-5l-1.556-2.617A.525.525 0 013.49 12H4a.5.5 0 00.5-.5v-4A.5.5 0 004 7h1.49a.525.525 0 01.367.156L8 9.617V2a2 2 0 012-2h6a2 2 0 012 2v3z" clip-rule="evenodd" />
                    </svg>
                    Pengeluaran
                </a>
                <a href="{{ url('/admin/kategori') }}" class="flex items-center justify-start w-full px-4 py-3 text-sm font-medium rounded-lg text-gray-100 hover:bg-gray-700 transition duration-150">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M9.243 3.03a1 1 0 01.727 1.213L9.5 6h1.5a1 1 0 010 2H9.5l-.27.258a1 1 0 01-1.213-.727L8.5 6H7a1 1 0 110-2h1.5l.243-.27a1 1 0 011.213-.727zM12.757 7.03a1 1 0 01.727 1.213L13.5 10h1.5a1 1 0 110 2h-1.5l-.27.258a1 1 0 01-1.213-.727L12.5 10H11a1 1 0 010-2h1.5l.243-.27a1 1 0 011.213-.727zM12.5 14h-1.5a1 1 0 110-2h1.5l.27.258a1 1 0 011.213-.727L14.5 14h1.5a1 1 0 110 2h-1.5l-.243.27a1 1 0 01-1.213-.727zM6.5 14h1.5a1 1 0 010 2H7.5l.243.27a1 1 0 01-1.213-.727L6.5 14H5a1 1 0 110-2h1.5l-.27.258a1 1 0 01-1.213-.727L4.5 14H3a1 1 0 110-2h1.5l.243-.27a1 1 0 011.213-.727z" clip-rule="evenodd" />
                    </svg>
                    Kategori Keuangan
                </a>
                <a href="{{ url('/admin/aset') }}" class="flex items-center justify-start w-full px-4 py-3 text-sm font-medium rounded-lg text-gray-100 hover:bg-gray-700 transition duration-150">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-8V6a1 1 0 012 0v2a1 1 0 10-2 0zm1-5a1 1 0 100-2 1 1 0 000 2zm1-5a1 1 0 100-2 1 1 0 000 2z" />
                    </svg>
                    Manajemen Aset
                </a>
                <a href="{{ url('/admin/pengguna') }}" class="flex items-center justify-start w-full px-4 py-3 text-sm font-medium rounded-lg text-gray-100 hover:bg-gray-700 transition duration-150">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" />
                    </svg>
                    Manajemen Pengguna
                </a>
            </div>
        </div>

        <!-- ===== KONTEN UTAMA ===== -->
        <div class="main-content flex-1 p-6 pb-20 md:pb-6">
            <h2 class="text-2xl font-bold mb-4">Ringkasan Keuangan</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <!-- Card Total Pendapatan -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-gray-500 text-sm font-semibold uppercase mb-2">Total Pendapatan</h3>
                    <p class="text-3xl font-bold text-green-600">Rp 0</p>
                </div>

                <!-- Card Total Pengeluaran -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-gray-500 text-sm font-semibold uppercase mb-2">Total Pengeluaran</h3>
                    <p class="text-3xl font-bold text-red-600">Rp 0</p>
                </div>

                <!-- Card Laba Bersih -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-gray-500 text-sm font-semibold uppercase mb-2">Laba Bersih</h3>
                    <p class="text-3xl font-bold text-blue-600">Rp 0</p>
                </div>
            </div>

            <!-- Bagian untuk grafik atau tabel lainnya -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-bold mb-4">Grafik Keuangan</h3>
                <div class="h-64 bg-gray-200 flex items-center justify-center rounded-lg text-gray-500">
                    Placeholder untuk grafik
                </div>
            </div>
        </div>
    </div>

    <!-- ===== BOTTOM NAVIGATION (Hanya tampil di layar sm dan ke bawah) ===== -->
    <div class="fixed bottom-0 left-0 w-full bg-white shadow-lg md:hidden bottom-nav">
        <div class="flex justify-around items-center h-16">
            <a href="{{ url('/admin/dashboard') }}" class="flex flex-col items-center justify-center text-gray-800 hover:text-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                </svg>
                <span class="text-xs mt-1">Dashboard</span>
            </a>
            <a href="{{ url('/admin/pendapatan') }}" class="flex flex-col items-center justify-center text-gray-800 hover:text-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M8.433 7.026a.22.22 0 01.196.34L6.96 10.51a.252.252 0 00.323.344l2.164-1.39a.253.253 0 01.295.459l-2.164 1.39c-.846.54-1.956.126-2.497-.72C4.194 9.947 4.54 8.875 5.405 8.353l2.155-1.385zM11.567 12.974a.22.22 0 01-.196-.34L13.04 9.49a.252.252 0 00-.323-.344l-2.164 1.39a.253.253 0 01-.295-.459l2.164-1.39c.846-.54 1.956-.126 2.497.72.541.845.195 1.918-.67 2.44L12 14.363l-.433-.277zM10 18a8 8 0 100-16 8 8 0 000 16z" />
                </svg>
                <span class="text-xs mt-1">Pendapatan</span>
            </a>
            <a href="{{ url('/admin/pengeluaran') }}" class="flex flex-col items-center justify-center text-gray-800 hover:text-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-1.556-2.617A.525.525 0 0110.51 12H16a.5.5 0 00.5-.5v-4A.5.5 0 0016 7h-5.49a.525.525 0 01-.367-.156L8 4.293V2a2 2 0 012-2h6a2 2 0 012 2v3zM4 2v3a2 2 0 002 2h6.293a.5.5 0 01.367.156L14 9.617V12a2 2 0 01-2 2h-5l-1.556-2.617A.525.525 0 013.49 12H4a.5.5 0 00.5-.5v-4A.5.5 0 004 7h1.49a.525.525 0 01.367.156L8 9.617V2a2 2 0 012-2h6a2 2 0 012 2v3z" clip-rule="evenodd" />
                </svg>
                <span class="text-xs mt-1">Pengeluaran</span>
            </a>
        </div>
    </div>
</body>
</html>

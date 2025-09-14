<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard Admin')</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
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

            <!-- Sidebar Menu -->
            <div class="flex flex-col p-4 space-y-2">
                <!-- Dashboard -->
                <a href="{{ url('/admin/dashboard') }}"
                    class="flex items-center px-4 py-3 text-sm font-medium rounded-lg
                    {{ request()->is('admin/dashboard') ? 'bg-gray-700 text-white' : 'text-gray-100 hover:bg-gray-700' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                    Dashboard
                </a>

                <!-- Laporan Keuangan -->
                <a href="{{ url('/admin/laporan-keuangan') }}"
                    class="flex items-center px-4 py-3 text-sm font-medium rounded-lg
                    {{ request()->is('admin/laporan-keuangan') ? 'bg-gray-700 text-white' : 'text-gray-100 hover:bg-gray-700' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M2 11a1 1 0 011-1h14a1 1 0 011 1v6a2 2 0 01-2 2H4a2 2 0 01-2-2v-6zm3-7a1 1 0 00-1 1v3h12V5a1 1 0 00-1-1H5z"
                            clip-rule="evenodd" />
                    </svg>
                    Laporan Keuangan
                </a>

                <!-- Surat Masuk -->
                <a href="{{ url('/admin/surat-masuk') }}"
                    class="flex items-center px-4 py-3 text-sm font-medium rounded-lg
                    {{ request()->is('admin/surat-masuk') ? 'bg-gray-700 text-white' : 'text-gray-100 hover:bg-gray-700' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M2.94 6.94A1.5 1.5 0 014.5 6h11a1.5 1.5 0 011.06 2.56l-6.25 6.25a1.5 1.5 0 01-2.12 0L2.94 8.56A1.5 1.5 0 012.94 6.94z" />
                    </svg>
                    Surat Masuk
                </a>

                <!-- Laporan Kegiatan -->
                <a href="{{ url('/admin/laporan-kegiatan') }}"
                    class="flex items-center px-4 py-3 text-sm font-medium rounded-lg
                    {{ request()->is('admin/laporan-kegiatan') ? 'bg-gray-700 text-white' : 'text-gray-100 hover:bg-gray-700' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M9 2a1 1 0 00-1 1v1H5a2 2 0 00-2 2v1h14V6a2 2 0 00-2-2h-3V3a1 1 0 00-1-1H9zm-4 7h10v7a2 2 0 01-2 2H7a2 2 0 01-2-2V9z"
                            clip-rule="evenodd" />
                    </svg>
                    Laporan Kegiatan
                </a>

                <!-- Berita Acara -->
                <a href="{{ url('/admin/berita-acara') }}"
                    class="flex items-center px-4 py-3 text-sm font-medium rounded-lg
                    {{ request()->is('admin/berita-acara') ? 'bg-gray-700 text-white' : 'text-gray-100 hover:bg-gray-700' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M4 3a2 2 0 012-2h6.586a2 2 0 011.414.586l3.414 3.414A2 2 0 0118 6.414V17a2 2 0 01-2 2H6a2 2 0 01-2-2V3zm8 0v4a1 1 0 001 1h4"
                            clip-rule="evenodd" />
                    </svg>
                    Berita Acara
                </a>

                <!-- Profil Perusahaan -->
                <a href="{{ url('/admin/profil-perusahaan') }}"
                    class="flex items-center px-4 py-3 text-sm font-medium rounded-lg
                    {{ request()->is('admin/profil-perusahaan') ? 'bg-gray-700 text-white' : 'text-gray-100 hover:bg-gray-700' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M4 6a2 2 0 012-2h1V2h2v2h2V2h2v2h1a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V6zm3 2v2h6V8H7zm0 4v2h6v-2H7z"
                            clip-rule="evenodd" />
                    </svg>
                    Profil Perusahaan
                </a>

                <!-- Pengguna -->
                <a href="{{ url('/admin/pengguna') }}"
                    class="flex items-center px-4 py-3 text-sm font-medium rounded-lg
                    {{ request()->is('admin/pengguna') ? 'bg-gray-700 text-white' : 'text-gray-100 hover:bg-gray-700' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5.121 17.804A9 9 0 1112 21a9 9 0 01-6.879-3.196zM12 12a3 3 0 100-6 3 3 0 000 6z" />
                    </svg>
                    Pengguna
                </a>

                {{-- <!-- Logout -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="w-full flex items-center px-4 py-3 text-sm font-medium rounded-lg
                        text-red-400 hover:bg-gray-700 hover:text-red-300 transition duration-150">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M3 4a1 1 0 011-1h6a1 1 0 010 2H5v10h5a1 1 0 010 2H4a1 1 0 01-1-1V4zm10.293 1.293a1 1 0 011.414 0L18 8.586l-3.293 3.293a1 1 0 01-1.414-1.414L14.586 9H9a1 1 0 110-2h5.586l-1.293-1.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                        Logout
                    </button>
                </form> --}}
            </div>
        </div>

        <!-- ===== MAIN CONTENT ===== -->
        <div class="main-content flex-1 p-6 pb-20 md:pb-6">
            @yield('content')
        </div>
    </div>

    <!-- ===== BOTTOM NAVIGATION (Mobile) ===== -->
    <div class="fixed bottom-0 left-0 w-full bg-white shadow-lg md:hidden bottom-nav">
        <div class="flex justify-around items-center h-16">
            <a href="{{ url('/admin/dashboard') }}"
                class="flex flex-col items-center justify-center {{ request()->is('admin/dashboard') ? 'text-blue-500' : 'text-gray-800 hover:text-blue-500' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="currentColor">
                    <path
                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                </svg>
                <span class="text-xs mt-1">Dashboard</span>
            </a>
            <a href="{{ url('/admin/pendapatan') }}"
                class="flex flex-col items-center justify-center {{ request()->is('admin/pendapatan') ? 'text-blue-500' : 'text-gray-800 hover:text-blue-500' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="currentColor">
                    <path
                        d="M8.433 7.026a.22.22 0 01.196.34L6.96 10.51a.252.252 0 00.323.344l2.164-1.39a.253.253 0 01.295-.459l2.164-1.39c-.846-.54-1.956-.126-2.497.72.541.845.195 1.918-.67 2.44L12 14.363l-.433-.277zM11.567 12.974a.22.22 0 01-.196-.34L13.04 9.49a.252.252 0 00-.323-.344l-2.164 1.39a.253.253 0 01-.295-.459l2.164-1.39c.846-.54 1.956-.126 2.497.72.541.845.195 1.918-.67 2.44L12 14.363l-.433-.277zM10 18a8 8 0 100-16 8 8 0 000 16z" />
                </svg>
                <span class="text-xs mt-1">Pendapatan</span>
            </a>
            <a href="{{ url('/admin/pengeluaran') }}"
                class="flex flex-col items-center justify-center {{ request()->is('admin/pengeluaran') ? 'text-blue-500' : 'text-gray-800 hover:text-blue-500' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M18 5v8a2 2 0 01-2 2h-5l-1.556-2.617A.525.525 0 0110.51 12H16a.5.5 0 00.5-.5v-4A.5.5 0 0016 7h-5.49a.525.525 0 01-.367-.156L8 4.293V2a2 2 0 012-2h6a2 2 0 012 2v3zM4 2v3a2 2 0 002 2h6.293a.5.5 0 01.367.156L14 9.617V12a2 2 0 01-2 2h-5l-1.556-2.617A.525.525 0 013.49 12H4a.5.5 0 00.5-.5v-4A.5.5 0 004 7h1.49a.525.525 0 01.367.156L8 9.617V2a2 2 0 012-2h6a2 2 0 012 2v3z"
                        clip-rule="evenodd" />
                </svg>
                <span class="text-xs mt-1">Pengeluaran</span>
            </a>
        </div>
    </div>
</body>

</html>

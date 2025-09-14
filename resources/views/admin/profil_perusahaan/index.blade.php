@extends('layouts.app')

@section('title', 'Profil Perusahaan')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-bold text-gray-800">Profil Perusahaan</h2>
            <a href="{{ route('admin.profil-perusahaan.edit', 1) }}" class="inline-flex items-center space-x-2 bg-yellow-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-yellow-600 transition duration-200 text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                </svg>
                <span>Edit</span>
            </a>
        </div>

        <!-- Identitas Perusahaan -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h3 class="text-xl font-semibold text-gray-700 mb-4">Identitas Perusahaan</h3>
            <p class="text-gray-600 mb-2"><strong>Nama Perusahaan:</strong> PT. Sumber Tambang Jaya</p>
            <p class="text-gray-600 mb-2"><strong>Bidang Usaha:</strong> Pertambangan Batu Bara</p>
            <p class="text-gray-600 mb-2"><strong>Alamat:</strong> Jl. Raya Tambang No. 123, Kota Industri, Negara Makmur</p>
            <p class="text-gray-600 mb-2"><strong>Tahun Berdiri:</strong> 2005</p>
        </div>

        <!-- Visi & Misi -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h3 class="text-xl font-semibold text-gray-700 mb-4">Visi & Misi</h3>
            <div class="mb-6">
                <h4 class="text-lg font-bold text-blue-600 mb-2">Visi</h4>
                <p class="text-gray-600">Menjadi perusahaan tambang terkemuka yang bertanggung jawab dan berkelanjutan, memberikan nilai optimal bagi pemangku kepentingan dan masyarakat.</p>
            </div>
            <div>
                <h4 class="text-lg font-bold text-blue-600 mb-2">Misi</h4>
                <ul class="list-disc list-inside text-gray-600">
                    <li>Melaksanakan operasi tambang dengan standar keselamatan dan lingkungan tertinggi.</li>
                    <li>Mengoptimalkan efisiensi produksi untuk memenuhi kebutuhan pasar global.</li>
                    <li>Membangun hubungan yang kuat dan saling menguntungkan dengan masyarakat sekitar.</li>
                </ul>
            </div>
        </div>

        <!-- Struktur Organisasi -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h3 class="text-xl font-semibold text-gray-700 mb-4">Struktur Organisasi</h3>
            <div class="w-full flex justify-center items-center">
                <img src="https://placehold.co/800x400/E5E7EB/4B5563?text=Struktur+Organisasi" alt="Struktur Organisasi" class="w-full rounded-lg shadow-inner">
            </div>
        </div>

        <!-- Kontak Perusahaan -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-xl font-semibold text-gray-700 mb-4">Kontak Perusahaan</h3>
            <p class="text-gray-600 mb-2"><strong>Telepon:</strong> +62 21 1234 5678</p>
            <p class="text-gray-600 mb-2"><strong>Email:</strong> info@sumbertambangjaya.co.id</p>
            <p class="text-gray-600 mb-2"><strong>Website:</strong> www.sumbertambangjaya.co.id</p>
        </div>
    </div>
@endsection

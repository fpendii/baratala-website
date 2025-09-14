@extends('layouts.app')

@section('title', 'Edit Profil Perusahaan')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-bold text-gray-800">Edit Profil Perusahaan</h2>
        </div>

        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Identitas Perusahaan -->
            <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                <h3 class="text-xl font-semibold text-gray-700 mb-4">Identitas Perusahaan</h3>
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Nama Perusahaan</label>
                    <input type="text" name="nama_perusahaan" value="PT. Sumber Tambang Jaya" class="w-full border rounded-lg px-3 py-2">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Bidang Usaha</label>
                    <input type="text" name="bidang_usaha" value="Pertambangan Batu Bara" class="w-full border rounded-lg px-3 py-2">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Alamat</label>
                    <textarea name="alamat" rows="2" class="w-full border rounded-lg px-3 py-2">Jl. Raya Tambang No. 123, Kota Industri, Negara Makmur</textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Tahun Berdiri</label>
                    <input type="number" name="tahun_berdiri" value="2005" class="w-full border rounded-lg px-3 py-2">
                </div>
            </div>

            <!-- Visi & Misi -->
            <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                <h3 class="text-xl font-semibold text-gray-700 mb-4">Visi & Misi</h3>
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Visi</label>
                    <textarea name="visi" rows="2" class="w-full border rounded-lg px-3 py-2">Menjadi perusahaan tambang terkemuka yang bertanggung jawab dan berkelanjutan, memberikan nilai optimal bagi pemangku kepentingan dan masyarakat.</textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Misi</label>
                    <textarea name="misi" rows="4" class="w-full border rounded-lg px-3 py-2">- Melaksanakan operasi tambang dengan standar keselamatan dan lingkungan tertinggi.
- Mengoptimalkan efisiensi produksi untuk memenuhi kebutuhan pasar global.
- Membangun hubungan yang kuat dan saling menguntungkan dengan masyarakat sekitar.</textarea>
                </div>
            </div>

            <!-- Struktur Organisasi -->
            <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                <h3 class="text-xl font-semibold text-gray-700 mb-4">Struktur Organisasi</h3>
                <input type="file" name="struktur" id="strukturInput" class="w-full border rounded-lg px-3 py-2" accept="image/*">
                <p class="text-sm text-gray-500 mt-2">Preview Struktur Organisasi:</p>
                <img id="strukturPreview" src="https://placehold.co/800x400/E5E7EB/4B5563?text=Struktur+Organisasi"
                     alt="Preview Struktur Organisasi" class="mt-2 w-full rounded-lg shadow-inner">
            </div>

            <!-- Kontak Perusahaan -->
            <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                <h3 class="text-xl font-semibold text-gray-700 mb-4">Kontak Perusahaan</h3>
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Telepon</label>
                    <input type="text" name="telepon" value="+62 21 1234 5678" class="w-full border rounded-lg px-3 py-2">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Email</label>
                    <input type="email" name="email" value="info@sumbertambangjaya.co.id" class="w-full border rounded-lg px-3 py-2">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Website</label>
                    <input type="text" name="website" value="www.sumbertambangjaya.co.id" class="w-full border rounded-lg px-3 py-2">
                </div>
            </div>

            <!-- Tombol -->
            <div class="flex gap-4">
                <button type="submit" class="bg-green-600 text-white font-bold px-4 py-2 rounded-lg hover:bg-green-700">
                    Simpan Perubahan
                </button>
                <a href="{{ route('admin.profil-perusahaan.show', 1) }}" class="bg-gray-400 text-white font-bold px-4 py-2 rounded-lg hover:bg-gray-500">
                    Batal
                </a>
            </div>
        </form>
    </div>

    <!-- Script Preview Gambar -->
    <script>
        document.getElementById('strukturInput').addEventListener('change', function(e) {
            const preview = document.getElementById('strukturPreview');
            const file = e.target.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    preview.src = event.target.result;
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
@endsection

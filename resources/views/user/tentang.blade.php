@extends("layouts.user")
@section("content")

{{-- VISI & MISI --}}
<section>
  <div class="half d-lg-flex d-block">
    <div class="image element-animate" data-animate-effect="fadeIn"
         style="background-image: url('{{ asset('assets/images/industrial_hero_1.jpg') }}')"></div>
    <div class="text text-center element-animate">
      <h3 class="mb-4">Visi BARATALA</h3>
      <p class="mb-5">
        Menjadi perusahaan tambang bijih besi terpercaya dari Tanah Laut yang berkelanjutan,
        berdaya saing global, dan memberi nilai tambah bagi pelanggan, karyawan, dan masyarakat.
      </p>
      <p><a href="{{ url('/about#visi-misi') }}" class="btn btn-primary btn-sm px-3 py-2">Pelajari Lebih Lanjut</a></p>
    </div>
  </div>

  <div class="half d-lg-flex d-block">
    <div class="image order-2 element-animate" data-animate-effect="fadeIn"
         style="background-image: url('{{ asset('assets/images/industrial_hero_2.jpg') }}')"></div>
    <div class="text text-center element-animate">
      <h3 class="mb-4">Misi BARATALA</h3>
      <p class="mb-5">
        Mengelola operasi penambangan, pengolahan, dan logistik bijih besi secara aman, efisien,
        dan ramah lingkungan; menjaga konsistensi kadar Fe; serta memastikan pengiriman tepat waktu
        melalui rantai pasok yang terintegrasi dari pit hingga pelabuhan.
      </p>
      <p><a href="{{ url('/about#visi-misi') }}" class="btn btn-primary btn-sm px-3 py-2">Pelajari Lebih Lanjut</a></p>
    </div>
  </div>
</section>

{{-- TIGA KEUNGGULAN --}}
<section class="section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-4 element-animate">
        <div class="media block-6 d-block text-center">
          <div class="icon mb-3"><span class="ion-android-notifications text-primary"></span></div>
          <div class="media-body">
            <h3 class="heading">Operasi Terkendali</h3>
            <p>Perencanaan tambang, dispatch, dan pemantauan produksi untuk produktivitas maksimal.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 element-animate">
        <div class="media block-6 d-block text-center">
          <div class="icon mb-3"><span class="ion-heart text-primary"></span></div>
          <div class="media-body">
            <h3 class="heading">K3L & Lingkungan</h3>
            <p>Budaya keselamatan kerja dan praktik ramah lingkungan di setiap aktivitas tambang.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 element-animate">
        <div class="media block-6 d-block text-center">
          <div class="icon mb-3"><span class="ion-flash text-primary"></span></div>
          <div class="media-body">
            <h3 class="heading">Pengiriman Tepat Waktu</h3>
            <p>Kontrol kualitas kadar Fe dan jadwal pengapalan yang andal untuk memenuhi spesifikasi.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- TIM INTI --}}
<section class="section">
  <div class="container">
    <div class="row justify-content-center mb-5 element-animate">
      <div class="col-md-8 text-center">
        <h2 class="heading mb-4">Tim Inti BARATALA</h2>
        <p class="mb-5 lead">Tim profesional dengan pengalaman eksplorasi, produksi, logistik, dan K3L.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-3">
        <div class="media d-block media-custom text-center">
          <a href="#"><img src="{{ asset('assets/images/person_1.jpg') }}" alt="CEO BARATALA" class="img-fluid"></a>
          <div class="media-body">
            <h3 class="mt-0 text-black">Raka Wiratama</h3>
            <small>Chief Executive Officer</small>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="media d-block media-custom text-center">
          <a href="#"><img src="{{ asset('assets/images/person_2.jpg') }}" alt="Operasional" class="img-fluid"></a>
          <div class="media-body">
            <h3 class="mt-0 text-black">Sari Nugraha</h3>
            <small>Head of Operations</small>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="media d-block media-custom text-center">
          <a href="#"><img src="{{ asset('assets/images/person_4.jpg') }}" alt="K3L" class="img-fluid"></a>
          <div class="media-body">
            <h3 class="mt-0 text-black">Aldo Prasetyo</h3>
            <small>HSE & Environment</small>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="media d-block media-custom text-center">
          <a href="#"><img src="{{ asset('assets/images/person_3.jpg') }}" alt="Logistik" class="img-fluid"></a>
          <div class="media-body">
            <h3 class="mt-0 text-black">Maya Putri</h3>
            <small>Logistics & Shipping</small>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

{{-- STRUKTUR ORGANISASI --}}
<section class="section bg-light" id="struktur-organisasi">
  <div class="container">
    <div class="row justify-content-center mb-4">
      <div class="col-md-8 text-center">
        <h2 class="heading mb-3">Struktur Organisasi</h2>
        <p class="lead">Struktur organisasi BARATALA untuk mendukung operasi terintegrasi dari pit hingga pelabuhan.</p>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-10">
        <a href="https://contoh.baratala.co.id/struktur-organisasi" target="_blank" rel="noopener">
          <img src="{{ asset('assets/images/struktur.png') }}"
               alt="Struktur Organisasi BARATALA"
               class="img-fluid"
               style="border-radius:8px;border:1px solid #eee;">
        </a>
        <p class="text-center mt-2">
          <small>(Klik gambar untuk melihat versi penuh • tautan dummy)</small>
        </p>
      </div>
    </div>
  </div>
</section>
 

@endsection

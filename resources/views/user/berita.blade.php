@extends("layouts.user")
@section("content")

<section>
  {{-- Post 1 --}}
  <div class="half d-md-flex d-block">
    <div class="image" style="background-image: url('{{ asset('assets/images/industrial_hero_1.jpg') }}')"></div>
    <div class="text text-center element-animate">
      <span class="post-meta">12 Agustus 2025</span>
      <h3 class="mb-4">Eksplorasi Bijih Besi di Tanah Laut</h3>
      <p class="mb-5">
        Ringkasan kegiatan pemetaan geologi, sampling, dan pemboran awal untuk memastikan potensi
        sumber daya serta kualitas kadar Fe di area operasi BARATALA.
      </p>
      <p><a href="{{ url('/blog/eksplorasi-tanah-laut') }}" class="btn btn-primary btn-sm px-3 py-2">Baca Selengkapnya</a></p>
    </div>
  </div>

  {{-- Post 2 --}}
  <div class="half d-md-flex d-block">
    <div class="image order-2" style="background-image: url('{{ asset('assets/images/industrial_hero_2.jpg') }}')"></div>
    <div class="text text-center element-animate">
      <span class="post-meta">28 Juli 2025</span>
      <h3 class="mb-4">Uji Coba Crushing &amp; Screening 600 TPH</h3>
      <p class="mb-5">
        Pengujian performa plant—kapasitas, efisiensi pemisahan ukuran, dan konsistensi kadar Fe
        untuk memenuhi spesifikasi pelanggan.
      </p>
      <p><a href="{{ url('/blog/crushing-600-tph') }}" class="btn btn-primary btn-sm px-3 py-2">Baca Selengkapnya</a></p>
    </div>
  </div>

  {{-- Post 3 --}}
  <div class="half d-md-flex d-block">
    <div class="image" style="background-image: url('{{ asset('assets/images/industrial_hero_1.jpg') }}')"></div>
    <div class="text text-center element-animate">
      <span class="post-meta">10 Juli 2025</span>
      <h3 class="mb-4">Optimalisasi Hauling &amp; Logistik</h3>
      <p class="mb-5">
        Penataan rute, dispatch, dan antrian pelabuhan untuk menjamin keandalan suplai
        dari pit hingga pengapalan.
      </p>
      <p><a href="{{ url('/blog/hauling-logistik') }}" class="btn btn-primary btn-sm px-3 py-2">Baca Selengkapnya</a></p>
    </div>
  </div>

  {{-- Post 4 --}}
  <div class="half d-md-flex d-block">
    <div class="image order-2" style="background-image: url('{{ asset('assets/images/industrial_hero_2.jpg') }}')"></div>
    <div class="text text-center element-animate">
      <span class="post-meta">22 Juni 2025</span>
      <h3 class="mb-4">K3L: Budaya &amp; Implementasi di Tambang</h3>
      <p class="mb-5">
        Menguatkan budaya keselamatan, perlindungan lingkungan, dan kepatuhan regulasi
        dalam setiap aktivitas BARATALA.
      </p>
      <p><a href="{{ url('/blog/k3l-tambang') }}" class="btn btn-primary btn-sm px-3 py-2">Baca Selengkapnya</a></p>
    </div>
  </div>

  <div class="col-md-12 py-5 text-center bg-light">
    <a href="{{ url('/blog?page=2') }}" class="btn btn-primary">Muat Artikel Lainnya...</a>
  </div>
</section>

{{-- Penataan tinggi & cover untuk konsistensi tampilan gambar latar --}}
<style>
  .half .image{
    min-height: 380px;
    background-size: cover;
    background-position: center center;
  }
</style>


@endsection
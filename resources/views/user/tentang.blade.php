@extends('layouts.user')

@section('content')
  <!-- bradcam_area -->
  <div class="bradcam_area bradcam_bg_2">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="bradcam_text text-center">
            <h3>Tentang Kami</h3>
            <p><a href="{{ url('/') }}">Home</a> / About</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /bradcam_area -->

  <!-- about_area_start -->
  <div class="about_area add_padding">
    <div class="container">
      <div class="border_1px">
        <div class="row align-items-center">
          <div class="col-xl-6 col-md-6">
            <div class="about_thumb">
              <img src="{{ asset('assets/img/about/about2.png') }}" alt="Operasi BARATALA">
              <div class="pattern_img d-none d-lg-block">
                <img src="{{ asset('assets/img/pattern/pattern.svg') }}" alt="">
              </div>
            </div>
          </div>

          <div class="col-xl-6 col-md-6">
            <div class="about_info">
              <h3>
                Kami melayani seluruh kebutuhan
                <br>pertambangan bijih besi Anda
              </h3>
              <p class="first_para">
                BARATALA beroperasi di Tanah Laut, Kalimantan Selatan. Kami menangani
                eksplorasi, penambangan, pengolahan (crushing &amp; screening), hingga pengapalan
                dengan standar K3L dan kontrol kualitas kadar Fe yang ketat.
              </p>
              <p>
                Fokus kami adalah produktivitas tinggi, pasokan andal, dan kepatuhan terhadap
                regulasi. Dengan tim berpengalaman dan peralatan modern, kami memastikan
                spesifikasi produk terpenuhi sesuai kebutuhan pelanggan.
              </p>
              <a href="{{ url('/contact') }}" class="boxed-btn3">Hubungi Kami</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- about_area_end -->

  <!-- visi_misi -->
  <section id="visi-misi" class="add_padding">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="section_title text-center mb-50">
            <h3>Visi &amp; Misi</h3>
          </div>
        </div>
      </div>

      <div class="row gy-4">
        <div class="col-lg-5">
          <div class="single_feature text-left" style="padding:24px;border:1px solid #eee;border-radius:8px;">
            <div class="icon"><i class="flaticon-helmet"></i></div>
            <h3>Visi</h3>
            <p>
              Menjadi perusahaan tambang bijih besi terpercaya dari Tanah Laut
              yang berkelanjutan, berdaya saing, dan memberikan nilai bagi pemangku kepentingan.
            </p>
          </div>
        </div>

        <div class="col-lg-7">
          <div class="single_feature text-left" style="padding:24px;border:1px solid #eee;border-radius:8px;">
            <div class="icon"><i class="flaticon-sketch"></i></div>
            <h3>Misi</h3>
            <ul style="margin:0;padding-left:18px;">
              <li>Mengelola operasi tambang secara aman, efisien, dan ramah lingkungan.</li>
              <li>Menjaga konsistensi kualitas produk melalui pengendalian kadar Fe.</li>
              <li>Mengembangkan SDM lokal dan membangun kemitraan dengan komunitas.</li>
              <li>Menerapkan teknologi untuk meningkatkan produktivitas dan ketertelusuran.</li>
              <li>Memenuhi komitmen pengiriman dan spesifikasi pelanggan.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /visi_misi -->

  <!-- struktur_organisasi -->
  <section id="struktur-organisasi" class="add_padding">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="section_title text-center mb-50">
            <h3>Struktur Organisasi</h3>
          </div>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-10">
          <a href="https://contoh.baratala.co.id/struktur-organisasi" target="_blank" rel="noopener">
            <img
              src="{{ asset('assets/img/struktur.png') }}"
              alt="Struktur Organisasi BARATALA"
              class="img img-responsive"
              style="width:100%;border-radius:8px;border:1px solid #eee;"
            >
          </a>
          <p class="text-center" style="margin-top:10px;">
            <small>(Klik gambar untuk melihat versi penuh • tautan dummy)</small>
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- /struktur_organisasi -->

  <!-- features_area_start -->
  <div class="features_area add_padding">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="section_title text-center mb-50">
            <h3>Keunggulan Kami</h3>
          </div>
        </div>
      </div>

      <div class="row no-gutters">
        <div class="col-lg-4 col-md-4">
          <div class="single_feature text-center">
            <div class="icon"><i class="flaticon-sketch"></i></div>
            <h3>Eksplorasi Terukur</h3>
            <p>Survei geologi, pemboran, dan estimasi cadangan untuk keputusan tambang yang presisi.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-4">
          <div class="single_feature text-center">
            <div class="icon"><i class="flaticon-helmet"></i></div>
            <h3>K3L &amp; Kepatuhan</h3>
            <p>Budaya keselamatan kerja dan pemenuhan regulasi lingkungan di setiap aktivitas.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-4">
          <div class="single_feature text-center">
            <div class="icon"><i class="flaticon-support"></i></div>
            <h3>Teknologi &amp; Efisiensi</h3>
            <p>Peralatan modern untuk crushing, screening, dan hauling yang andal dan efisien.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- features_area_end -->

@endsection

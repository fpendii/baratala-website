@extends("layouts.user")
@section("content")

{{-- SECTION: Layanan Inti --}}
<section class="section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-12 text-center">
        <h2>BARATALA Menangani Kebutuhan Tambang Anda</h2>
      </div>
    </div>

    <div class="row align-items-stretch">
      {{-- Ilustrasi tengah --}}
      <div class="col-lg-4 order-lg-2">
        <div class="scaling-image h-100">
          <div class="frame h-100">
            <div class="feature-img-bg h-100"
                 style="background-image: url('{{ asset('assets/images/industrial_feature_1.jpg') }}');">
            </div>
          </div>
        </div>
      </div>

      {{-- Kolom kiri --}}
      <div class="col-md-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-1">
        <div class="feature-1 d-md-flex">
          <div class="align-self-center">
            <span class="ion ion-easel display-4 text-primary"></span>
            <h3>Eksplorasi & Geologi</h3>
            <p>Pemetaan, pemboran, dan estimasi cadangan untuk keputusan penambangan yang presisi.</p>
          </div>
        </div>

        <div class="feature-1 d-md-flex">
          <div class="align-self-center">
            <span class="ion ion-hammer display-4 text-primary"></span>
            <h3>Crushing &amp; Screening</h3>
            <p>Pengolahan bijih besi dengan kontrol ukuran dan kadar Fe yang konsisten.</p>
          </div>
        </div>
      </div>

      {{-- Kolom kanan --}}
      <div class="col-md-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-3">
        <div class="feature-1 d-md-flex">
          <div class="align-self-center">
            <span class="ion ion-cube display-4 text-primary"></span>
            <h3>Hauling & Logistik</h3>
            <p>Pengangkutan dari pit ke stockpile dan pelabuhan secara efisien & tepat waktu.</p>
          </div>
        </div>

        <div class="feature-1 d-md-flex">
          <div class="align-self-center">
            <span class="ion ion-clipboard display-4 text-primary"></span>
            <h3>Quality Control Kadar Fe</h3>
            <p>Sampel & pengujian berjenjang untuk menjamin spesifikasi produk.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- SECTION: Tiga Keunggulan --}}
<section class="section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-4 element-animate">
        <div class="media block-6 d-block text-center">
          <div class="icon mb-3"><span class="ion-android-notifications text-primary"></span></div>
          <div class="media-body">
            <h3 class="heading">Operasi Efisien</h3>
            <p>Perencanaan tambang yang rapi untuk biaya rendah dan produktivitas tinggi.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 element-animate">
        <div class="media block-6 d-block text-center">
          <div class="icon mb-3"><span class="ion-heart text-primary"></span></div>
          <div class="media-body">
            <h3 class="heading">K3L & Lingkungan</h3>
            <p>Budaya keselamatan dan praktik ramah lingkungan di setiap aktivitas.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 element-animate">
        <div class="media block-6 d-block text-center">
          <div class="icon mb-3"><span class="ion-flash text-primary"></span></div>
          <div class="media-body">
            <h3 class="heading">Cepat & Andal</h3>
            <p>Keandalan waktu muat dan jadwal pengapalan untuk memenuhi komitmen.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- SECTION: Feature Image + Copy 1 --}}
<section class="section element-animate">
  <div class="container">
    <div class="row align-items-center mb-5">
      <div class="col-lg-7 order-md-2">
        <div class="scaling-image">
          <div class="frame">
            <img src="{{ asset('assets/images/industrial_featured_img_1.jpg') }}"
                 alt="Operasi BARATALA"
                 class="img-fluid">
          </div>
        </div>
      </div>
      <div class="col-md-5 pr-md-5 mb-5">
        <div class="block-41">
          <h2 class="block-41-heading mb-5">Bangun Rantai Pasok Bijih Besi yang Andal</h2>
          <div class="block-41-text">
            <p>BARATALA mengintegrasikan eksplorasi, penambangan, pengolahan, hingga pengiriman agar pelanggan mendapatkan produk sesuai spesifikasi dan tepat waktu.</p>
            <p><a href="{{ url('/services') }}" class="readmore">Pelajari Layanan <span class="ion-android-arrow-dropright-circle"></span></a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- SECTION: Feature Image + Copy 2 (bg-light) --}}
<section class="section element-animate bg-light">
  <div class="container">
    <div class="row align-items-center mb-5">
      <div class="col-lg-7 order-md-1">
        <div class="scaling-image">
          <div class="frame">
            <img src="{{ asset('assets/images/industrial_featured_img_2.jpg') }}"
                 alt="Stockpile BARATALA"
                 class="img-fluid">
          </div>
        </div>
      </div>
      <div class="col-md-5 pl-md-5 mb-5 order-md-2">
        <div class="block-41">
          <h2 class="block-41-heading mb-5">Penanganan Material & Desain Stockpile</h2>
          <div class="block-41-text">
            <p>Desain stockpile dan alur material yang tepat menjaga kadar, mengurangi rehandle, serta mempercepat proses pemuatan.</p>
            <p><a href="{{ url('/projects') }}" class="readmore">Lihat Proyek <span class="ion-android-arrow-dropright-circle"></span></a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- SECTION: Projects --}}
<section class="section border-t pb-0">
  <div class="container">
    <div class="row justify-content-center mb-5 element-animate">
      <div class="col-md-8 text-center">
        <h2 class="heading mb-4">Proyek</h2>
        <p class="mb-5 lead">Sejumlah pekerjaan eksplorasi, produksi, dan logistik bijih besi yang kami tangani di Tanah Laut.</p>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row no-gutters">
      <div class="col-md-4 element-animate">
        <a href="{{ url('/projects/eksplorasi-pit-a') }}" class="link-thumbnail">
          <h3>Eksplorasi Pit A Tanah Laut</h3>
          <span class="ion-plus icon"></span>
          <img src="{{ asset('assets/images/industrial_img_1.jpg') }}" alt="Eksplorasi Pit A" class="img-fluid">
        </a>
      </div>
      <div class="col-md-4 element-animate">
        <a href="{{ url('/projects/crushing-600-tph') }}" class="link-thumbnail">
          <h3>Crushing &amp; Screening 600 TPH</h3>
          <span class="ion-plus icon"></span>
          <img src="{{ asset('assets/images/industrial_img_2.jpg') }}" alt="Crushing 600 TPH" class="img-fluid">
        </a>
      </div>
      <div class="col-md-4 element-animate">
        <a href="{{ url('/projects/hauling-pelabuhan') }}" class="link-thumbnail">
          <h3>Hauling ke Pelabuhan</h3>
          <span class="ion-plus icon"></span>
          <img src="{{ asset('assets/images/industrial_img_3.jpg') }}" alt="Hauling" class="img-fluid">
        </a>
      </div>
      <div class="col-md-4 element-animate">
        <a href="{{ url('/projects/stockpile-management') }}" class="link-thumbnail">
          <h3>Manajemen Stockpile</h3>
          <span class="ion-plus icon"></span>
          <img src="{{ asset('assets/images/industrial_img_4.jpg') }}" alt="Stockpile" class="img-fluid">
        </a>
      </div>
      <div class="col-md-4 element-animate">
        <a href="{{ url('/projects/qc-kadar-fe') }}" class="link-thumbnail">
          <h3>QC Kadar Fe &amp; Sampling</h3>
          <span class="ion-plus icon"></span>
          <img src="{{ asset('assets/images/industrial_img_5.jpg') }}" alt="QC Fe" class="img-fluid">
        </a>
      </div>
      <div class="col-md-4 element-animate">
        <a href="{{ url('/projects/pemuatan-kapal') }}" class="link-thumbnail">
          <h3>Pemuatan Kapal</h3>
          <span class="ion-plus icon"></span>
          <img src="{{ asset('assets/images/industrial_img_6.jpg') }}" alt="Loading Vessel" class="img-fluid">
        </a>
      </div>
    </div>
  </div>
</section>

{{-- SECTION: Testimonial --}}
<section class="section bg-light block-11">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-8 text-center">
        <h2 class="heading mb-4">Testimoni</h2>
      </div>
    </div>

    <div class="nonloop-block-11 owl-carousel">
      <div class="item">
        <div class="block-33 h-100">
          <div class="vcard d-flex mb-3">
            <div class="image align-self-center">
              <img src="{{ asset('assets/images/person_1.jpg') }}" alt="Klien 1">
            </div>
            <div class="name-text align-self-center">
              <h2 class="heading">Andi Pratama</h2>
              <span class="meta">Mitra Pengapalan</span>
            </div>
          </div>
          <div class="text">
            <blockquote>
              <p>&rdquo; Kualitas dan jadwal BARATALA konsisten. Koordinasi di pelabuhan sangat rapi. &ldquo;</p>
            </blockquote>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="block-33 h-100">
          <div class="vcard d-flex mb-3">
            <div class="image align-self-center">
              <img src="{{ asset('assets/images/person_2.jpg') }}" alt="Klien 2">
            </div>
            <div class="name-text align-self-center">
              <h2 class="heading">Sari Nugraha</h2>
              <span class="meta">Pembeli Bijih Besi</span>
            </div>
          </div>
          <div class="text">
            <blockquote>
              <p>&rdquo; Kadar Fe sesuai spesifikasi. Dokumentasi QC jelas dan transparan. &ldquo;</p>
            </blockquote>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="block-33 h-100">
          <div class="vcard d-flex mb-3">
            <div class="image align-self-center">
              <img src="{{ asset('assets/images/person_3.jpg') }}" alt="Klien 3">
            </div>
            <div class="name-text align-self-center">
              <h2 class="heading">Johanes Lim</h2>
              <span class="meta">Kontraktor Logistik</span>
            </div>
          </div>
          <div class="text">
            <blockquote>
              <p>&rdquo; Rantai pasok dari pit ke vessel berjalan efisien—downtime minim. &ldquo;</p>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- SECTION: Blog Posts --}}
<section class="section blog">
  <div class="container">
    <div class="row justify-content-center mb-5 element-animate">
      <div class="col-md-8 text-center">
        <h2 class="heading mb-4">Artikel Terbaru</h2>
        <p class="mb-5 lead">Update kegiatan operasional, praktik K3L, dan wawasan teknis pertambangan BARATALA.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="media mb-4 d-md-flex d-block element-animate">
          <a href="{{ url('/blog/eksplorasi-tanah-laut') }}" class="mr-5">
            <img src="{{ asset('assets/images/industrial_blog_1.jpg') }}" alt="Eksplorasi Tanah Laut" class="img-fluid">
          </a>
          <div class="media-body">
            <span class="post-meta">Aug 12, 2025</span>
            <h3 class="mt-2 text-black">
              <a href="{{ url('/blog/eksplorasi-tanah-laut') }}">Eksplorasi Tanah Laut: Data untuk Produksi Andal</a>
            </h3>
            <p>Peran pemodelan geologi dan kualitas data untuk keputusan produksi.</p>
            <p><a href="{{ url('/blog/eksplorasi-tanah-laut') }}" class="readmore">Baca Selengkapnya <span class="ion-android-arrow-dropright-circle"></span></a></p>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="media mb-4 d-md-flex d-block element-animate">
          <a href="{{ url('/blog/crushing-600-tph') }}" class="mr-5">
            <img src="{{ asset('assets/images/industrial_blog_2.jpg') }}" alt="Crushing 600 TPH" class="img-fluid">
          </a>
          <div class="media-body">
            <span class="post-meta">Jul 28, 2025</span>
            <h3 class="mt-2 text-black">
              <a href="{{ url('/blog/crushing-600-tph') }}">Uji Coba Crushing &amp; Screening 600 TPH</a>
            </h3>
            <p><a href="{{ url('/blog/crushing-600-tph') }}" class="readmore">Baca Selengkapnya <span class="ion-android-arrow-dropright-circle"></span></a></p>
          </div>
        </div>

        <div class="media mb-4 d-md-flex d-block element-animate">
          <a href="{{ url('/blog/k3l-tambang') }}" class="mr-5">
            <img src="{{ asset('assets/images/industrial_blog_3.jpg') }}" alt="K3L Tambang" class="img-fluid">
          </a>
          <div class="media-body">
            <span class="post-meta">Jun 22, 2025</span>
            <h3 class="mt-2 text-black">
              <a href="{{ url('/blog/k3l-tambang') }}">K3L: Budaya Keselamatan di Area Tambang</a>
            </h3>
            <p><a href="{{ url('/blog/k3l-tambang') }}" class="readmore">Baca Selengkapnya <span class="ion-android-arrow-dropright-circle"></span></a></p>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

{{-- SECTION: CTA --}}
<section class="section bg-primary">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <h2 class="text-white mb-0">Siap Tingkatkan Operasi Tambang Anda?</h2>
        <p class="text-white lead">Hubungi tim BARATALA untuk solusi eksplorasi, produksi, dan logistik bijih besi yang andal.</p>
      </div>
      <div class="col-lg-4 text-lg-right">
        <a href="{{ url('/contact') }}" class="btn btn-outline-white px-4 py-3">Hubungi Kami</a>
      </div>
    </div>
  </div>
</section>


@endsection

@extends("layouts.user")
@section("content")

<section class="section">
  <div class="container">
    <div class="row">
      {{-- Form Kontak --}}
      <div class="col-md-6 mb-5 order-2">
        <form action="{{ url('/contact/send') }}" method="post" class="contact_form" id="contactForm" novalidate>
          @csrf
          <div class="row">
            <div class="col-md-6 form-group">
              <label for="name">Nama Lengkap</label>
              <input type="text" id="name" name="name" class="form-control" placeholder="Nama lengkap" required>
            </div>
            <div class="col-md-6 form-group">
              <label for="phone">No. Telepon</label>
              <input type="text" id="phone" name="phone" class="form-control" placeholder="08xxxxxxxxxx">
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 form-group">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" class="form-control" placeholder="nama@perusahaan.com" required>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 form-group">
              <label for="message">Pesan</label>
              <textarea name="message" id="message" class="form-control" cols="30" rows="8" placeholder="Tulis kebutuhan Anda (mis. spesifikasi kadar Fe, volume, jadwal pengiriman)"></textarea>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 form-group">
              <button type="submit" class="btn btn-primary px-3 py-3">Kirim Pesan</button>
            </div>
          </div>
        </form>
      </div>

      {{-- Info Kontak --}}
      <div class="col-md-6 order-2 mb-5">
        <div class="row justify-content-right">
          <div class="col-md-8 mx-auto contact-form-contact-info">
            <p class="d-flex">
              <span class="ion-ios-location icon mr-5"></span>
              <span>Tanah Laut, Kalimantan Selatan, Indonesia</span>
            </p>
            <p class="d-flex">
              <span class="ion-ios-telephone icon mr-5"></span>
              <span>+62 811-0000-000</span>
            </p>
            <p class="d-flex">
              <span class="ion-android-mail icon mr-5"></span>
              <span>sales@baratala.co.id</span>
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="section bg-primary">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <h2 class="text-white mb-0">Diskusikan Kebutuhan Bijih Besi Anda</h2>
        <p class="text-white lead">BARATALA menyediakan solusi tambang terintegrasi: eksplorasi, produksi, hingga pengapalan dengan kontrol kualitas kadar Fe.</p>
      </div>
      <div class="col-lg-4 text-lg-right">
        <a href="{{ url('/contact') }}" class="btn btn-outline-white px-4 py-3">Hubungi BARATALA</a>
      </div>
    </div>
  </div>
</section>


@endsection

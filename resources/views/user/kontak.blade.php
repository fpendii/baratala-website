@extends('layouts.user')

@section('content')
  <!-- bradcam_area  -->
  <div class="bradcam_area bradcam_bg_2">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="bradcam_text text-center">
            <h3>Kontak</h3>
            <p><a href="{{ url('/') }}">Home</a> / Kontak</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /bradcam_area -->

  <!-- contact section -->
  <section class="contact-section">
    <div class="container">

      {{-- Map --}}
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map" style="height:480px; position:relative; overflow:hidden;"></div>
      </div>

      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Hubungi Kami</h2>
        </div>

        {{-- Form --}}
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="{{ url('/contact') }}" method="post" id="contactForm" novalidate="novalidate">
            @csrf
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                            placeholder="Tulis pesan Anda"></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control valid" name="name" id="name" type="text" placeholder="Nama lengkap">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control valid" name="email" id="email" type="email" placeholder="Email">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" placeholder="Subjek">
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm boxed-btn">Kirim</button>
            </div>
          </form>
        </div>

        {{-- Info --}}
        <div class="col-lg-3 offset-lg-1">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Tanah Laut, Kalimantan Selatan</h3>
              <p>Pelaihari, Indonesia</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>+62 812-3456-7890</h3>
              <p>Senin–Jumat, 09.00–17.00 WITA</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>info@baratala.co.id</h3>
              <p>Kami siap membantu kebutuhan Anda.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- Google Maps (ganti API key) --}}
    <script>
      // Koordinat Pelaihari (Tanah Laut)
      const BARATALA_COORD = { lat: -3.799, lng: 114.761 };

      function initMap() {
        const grayStyles = [
          { featureType: "all", stylers: [{ saturation: -90 }, { lightness: 50 }] },
          { elementType: "labels.text.fill", stylers: [{ color: "#ccdee9" }] }
        ];

        const map = new google.maps.Map(document.getElementById('map'), {
          center: BARATALA_COORD,
          zoom: 11,
          styles: grayStyles,
          scrollwheel: false
        });

        new google.maps.Marker({
          position: BARATALA_COORD,
          map,
          title: "BARATALA — Tanah Laut"
        });
      }
    </script>

    {{-- Jika layout sudah memuat Maps API, hapus baris script di bawah ini --}}
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&callback=initMap" defer></script>
  </section>
  <!-- /contact section -->
@endsection

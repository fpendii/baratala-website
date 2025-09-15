<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Industrial — Website Template by Colorlin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- Google Fonts (biarkan eksternal) --}}
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Oxygen:400,700" rel="stylesheet">

    {{-- CSS (lokal di assets) --}}
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/fonts/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/css/font-awesome.min.css') }}">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  </head>
  <body>

    <header role="banner">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ url('/') }}">Industrial</a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav pl-md-5 ml-auto">
              <li class="nav-item">
                <a class="nav-link active" href="{{ url('/') }}">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/tentang') }}">Tentang</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ url('/') }}" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kegiatan</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="{{ url('/berita') }}">Berita</a>
                  <a class="dropdown-item" href="{{ url('/galeri') }}">Galeri</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/kontak') }}">Kontak</a>
              </li>
            </ul>

            <div class="navbar-nav ml-auto">
              <form method="GET" action="{{ url('/search') }}" class="search-form">
                <span class="icon ion ion-search"></span>
                <input type="text" name="q" class="form-control" placeholder="Search...">
              </form>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

     <div class="top-shadow"></div>

    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('assets/images/industrial_hero_1.jpg');">
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-lg-7 text-center col-sm-12 element-animate">
              <div class="btn-play-wrap mx-auto"><p class="mb-4"><a href="https://vimeo.com/59256790" data-fancybox data-ratio="2" class="btn-play"><span class="ion ion-ios-play"></span></a></p></div>
              <h1 class="mb-4"><span>We Are Industrial Company</span></h1>
              <p class="mb-5 w-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias iste ipsa excepturi nostrum sequi molestias?</p>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('assets/images/industrial_hero_2.jpg');">
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-lg-7 text-center col-sm-12 element-animate">
              <div class="btn-play-wrap mx-auto"><p class="mb-4"><a href="https://vimeo.com/59256790" data-fancybox data-ratio="2" class="btn-play"><span class="ion ion-ios-play"></span></a></p></div>
              <h1><span>The Best Level of Excellence in Steel Fabrication</span></h1>
              <p class="mb-5 w-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae fuga, hic quae molestias aperiam deserunt!</p>
            </div>
          </div>
        </div>
        
      </div>

    </section>
    <!-- END slider -->
    </div>
    


    @yield('content')

 <footer class="site-footer" role="contentinfo">
  <div class="container">
    <div class="row mb-5">
      {{-- Tentang BARATALA --}}
      <div class="col-md-4 mb-5">
        <h3>Tentang BARATALA</h3>
        <p class="mb-4">
          BARATALA adalah perusahaan pertambangan bijih besi berbasis di Tanah Laut, Kalimantan Selatan.
          Kami menjalankan operasi terintegrasi mulai dari eksplorasi, penambangan, crushing &amp; screening,
          hingga logistik dan pengapalan dengan standar K3L dan kontrol kualitas kadar Fe yang ketat.
        </p>
        <ul class="list-unstyled footer-link d-flex footer-social">
          <li><a href="{{ url('#') }}" class="p-2" aria-label="Twitter"><span class="fa fa-twitter"></span></a></li>
          <li><a href="{{ url('#') }}" class="p-2" aria-label="Facebook"><span class="fa fa-facebook"></span></a></li>
          <li><a href="{{ url('#') }}" class="p-2" aria-label="LinkedIn"><span class="fa fa-linkedin"></span></a></li>
          <li><a href="{{ url('#') }}" class="p-2" aria-label="Instagram"><span class="fa fa-instagram"></span></a></li>
        </ul>
      </div>

      {{-- Info Kontak --}}
      <div class="col-md-4 mb-5 pl-md-5">
        <h3>Info Kontak</h3>
        <ul class="list-unstyled footer-link">
          <li class="d-block">
            <span class="d-block">Alamat:</span>
            <span>Tanah Laut, Kalimantan Selatan, Indonesia</span>
          </li>
          <li class="d-block">
            <span class="d-block">Telepon:</span>
            <span><a href="tel:+628110000000">+62 811-0000-000</a></span>
          </li>
          <li class="d-block">
            <span class="d-block">Email:</span>
            <span><a href="mailto:sales@baratala.co.id">sales@baratala.co.id</a></span>
          </li>
        </ul>
      </div>

      {{-- Tautan Cepat --}}
      <div class="col-md-4 mb-5">
        <h3>Tautan Cepat</h3>
        <ul class="list-unstyled footer-link">
          <li><a href="{{ url('/') }}">Beranda</a></li>
          <li><a href="{{ url('/tentang') }}">Tentang</a></li>
          <li><a href="{{ url('/berita') }}">Berita</a></li>
          <li><a href="{{ url('/galeri') }}">Galeri</a></li>
          <li><a href="{{ url('/kontak') }}">Kontak</a></li>
        </ul>
      </div>
    </div>

    <div class="row">
      <div class="col-12 text-md-center text-left">
        <p class="copyright mb-0">
          &copy;<script>document.write(new Date().getFullYear());</script> BARATALA. All rights reserved.
          <span class="d-block d-md-inline">Template base by <a href="https://colorlib.com" target="_blank" rel="noopener">Colorlib</a></span>
        </p>
      </div>
    </div>
  </div>
</footer>

    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/>
      </svg>
    </div>

    {{-- JS (lokal di assets) --}}
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="themexriver">

    <!-- Page Title -->
    <title>Baratala</title>

    <!-- Favicon and Touch Icons -->
    <link href="{{ asset('assets/images/favicon/favicon.png') }}" rel="shortcut icon" type="image/png">
    <link href="{{ asset('assets/images/favicon/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('assets/images/favicon/apple-touch-icon-72x72.png') }}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{ asset('assets/images/favicon/apple-touch-icon-114x114.png') }}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{ asset('assets/images/favicon/apple-touch-icon-144x144.png') }}" rel="apple-touch-icon" sizes="144x144">

    <!-- Icon fonts -->
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Plugins for this template -->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="page-wrapper">

    <!-- start preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <span></span><span></span><span></span><span></span><span></span>
            <span></span><span></span><span></span><span></span>
        </div>
    </div>
    <!-- end preloader -->

    <!-- Start header -->
    <header class="site-header header-style-1">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col col-sm-6 contact-info">
                        <ul>
                            <li><i class="fa fa-envelope-o" aria-hidden="true"></i> baratala@gmai.com</li>
                            <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +62 852 5180 1111</li>
                        </ul>
                    </div>
                    <div class="col col-sm-6 language-login-wrapper">
                        <div class="language-login clearfix">
                            <div class="language">
                                <i class="fa fa-globe" aria-hidden="true"></i> Lang:
                                <form>
                                    <select class="selectpicker">
                                        <option>ENG</option>
                                        <option>IND</option>
                                    </select>
                                </form>
                            </div>
                            <div class="client-login">
                                <a href="#" id="client-login-btn"><i class="fa fa-key" aria-hidden="true"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navigation navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="open-btn">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" style="width: 70px; height: auto;">
                    </a>
                </div>
                <div class="navbar-header">
                    <h1 class="text-white" style="color:#fff">BARATALA</h1>
                </div>
                

                <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                    <button class="close-navbar"><i class="fa fa-close"></i></button>
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/') }}">Beranda</a></li>
                        <li><a href="{{ url('/tentang') }}">Tentang</a></li>
                        <li class="menu-item-has-children">
                            <a href="">Kegiatan</a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('/galeri') }}">Galeri</a></li>
                                <li><a href="{{ url('/berita') }}">Berita</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/kontak') }}">Kontak</a></li>
                    </ul>
                </div>

                <div class="social-links-holder">
                    <ul class="social-links">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- end of header -->

    @yield('content')

    <!-- start footer-->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col col-lg-4 col-md-3 col-xs-6">
                    <div class="widget about-widget">
                        <h3><a href="#" class="logo">Baratala</a></h3>
                        <p>BARATALA berfokus pada eksplorasi, penambangan, dan pengolahan bijih besi di Tanah Laut, Kalimantan Selatan. </p>
                    </div>
                </div>

                <div class="col col-lg-2 col-md-3 col-xs-6">
                    <div class="widget site-map-widget">
                        <h3>Halaman</h3>
                        <ul>
                            <li><a href="{{ url('/') }}">Beranda</a></li>
                            <li><a href="{{ url('/about') }}">Tentang</a></li>
                            <li><a href="{{ url('/service') }}">Galeri</a></li>
                            <li><a href="{{ url('/projects') }}">Berita</a></li>
                            <li><a href="{{ url('/contact') }}">Kontak</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col col-lg-3 col-md-3 col-xs-6">
                    <div class="widget news-widget">
                        <h3>Berita Terbaru</h3>
                        <ul>
                            <li>
                                <div class="entry-media">
                                    <img src="{{ asset('assets/images/blog/thumb/img-1.jpg') }}" alt="">
                                </div>
                                <div class="entry-details">
                                    <h5><a href="#">New ch017y concrete mixer is bought</a></h5>
                                    <span class="date">19 FEB</span>
                                </div>
                            </li>
                            <li>
                                <div class="entry-media">
                                    <img src="{{ asset('assets/images/blog/thumb/img-1.jpg') }}" alt="">
                                </div>
                                <div class="entry-details">
                                    <h5><a href="#">New ch017y concrete mixer is bought</a></h5>
                                    <span class="date">16 FEB</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col col-lg-3 col-md-3 col-xs-6">
                    <div class="widget newsletter-widget">
                        <h3>Subscription</h3>
                        <p>Enter your email address to subscribe our weekly newsletter</p>
                        <form class="form">
                            <div>
                                <input type="text" class="form-control" placeholder="email address">
                                <button class="btn" type="submit"><i class="fa fa-send"></i></button>
                            </div>
                        </form>
                    </div>

                    <div class="widget social-media-widget">
                        <ul class="social-links">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- end footer-->

    <div class="client-login-area">
        <div class="client-login-form">
            <h3>Client Login area</h3>
            <form class="form">
                <div>
                    <label for="username">Username</label>
                    <input type="text" id="username" class="form-control">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" id="password" class="form-control">
                </div>
                <div>
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- All JavaScript files -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<!-- Plugins for this template -->
<script src="{{ asset('assets/js/jquery-plugin-collection.js') }}"></script>
<script src="{{ asset('assets/js/portfolio.js') }}"></script>

<!-- Google map api (biarkan external atau masukkan API key-mu) -->
<script src="https://maps.googleapis.com/maps/api/js?key"></script>

<!-- Custom script for this template -->
<script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>

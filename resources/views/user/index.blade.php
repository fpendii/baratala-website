@extends("layouts.user")
@section("content")

<section class="hero hero-slider-wrapper hero-slider-s1">
    <div class="hero-slider">
        <div class="slide">
            <img src="{{ asset('assets/images/slider/slide-1.jpg') }}" alt class="slider-bg">
            <div class="container">
                <div class="row">
                    <div class="col col-md-10 col-md-offset-1 slide-caption">
                        <span class="trending"><i class="fa fa-bolt" aria-hidden="true"></i> Trending</span>
                        <h1 class="slide-title">BARATALA Mulai Tahap Eksplorasi Bijih Besi di Tanah Laut</h1>
                        <h5 class="slide-subtitle">Segmen: Mining | 2 menit baca</h5>
                        <a href="#" class="theme-btn-s1">Baca Artikel</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide">
            <img src="{{ asset('assets/images/slider/slide-2.jpg') }}" alt class="slider-bg">
            <div class="container">
                <div class="row">
                    <div class="col col-md-10 col-md-offset-1 slide-caption">
                        <span class="trending"><i class="fa fa-bolt" aria-hidden="true"></i> Update</span>
                        <h1 class="slide-title">Fasilitas Crushing & Screening 600 TPH Siap Beroperasi</h1>
                        <h5 class="slide-subtitle">Operasi: Processing | 3 menit baca</h5>
                        <a href="#" class="theme-btn-s1">Pelajari</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide">
            <img src="{{ asset('assets/images/slider/slide-3.jpg') }}" alt class="slider-bg">
            <div class="container">
                <div class="row">
                    <div class="col col-md-10 col-md-offset-1 slide-caption">
                        <span class="trending"><i class="fa fa-bolt" aria-hidden="true"></i> Logistik</span>
                        <h1 class="slide-title">Kontrak Hauling Koridor Tanah Laut – Pelabuhan</h1>
                        <h5 class="slide-subtitle">Segmen: Hauling & Shipping | 2 menit baca</h5>
                        <a href="#" class="theme-btn-s1">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of hero slider -->


<section class="about-us section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-md-6">
                <div class="section-title-s1">
                    <span>Tentang BARATALA</span>
                    <h2>Mitra <span>pertambangan bijih besi</span> berkelanjutan di Tanah Laut</h2>
                </div>
                <div class="about-details">
                    <p>BARATALA berfokus pada eksplorasi, penambangan, dan pengolahan bijih besi di Tanah Laut, Kalimantan Selatan. Dengan tim ahli geologi dan operasional berpengalaman, kami mengintegrasikan keselamatan kerja (K3), efisiensi produksi, dan kepatuhan lingkungan untuk menghadirkan pasokan Fe yang andal bagi industri baja dalam negeri.</p>
                    <ul>
                        <li>Eksplorasi terukur: pemetaan, pengeboran inti, dan estimasi sumber daya</li>
                        <li>Operasi tambang efisien: drill & blast, load & haul, dan pengelolaan overburden</li>
                        <li>Pengolahan berkualitas: crushing–screening untuk kadar Fe yang stabil</li>
                        <li>Komitmen K3L & pemberdayaan tenaga kerja lokal Tanah Laut</li>
                    </ul>
                </div>
            </div>
            <div class="col col-md-6 about-image-col">
                <div class="img-holder">
                    <img src="{{ asset('assets/images/about-us/img-1.jpg') }}" alt class="img img-responsive">
                    <img src="{{ asset('assets/images/about-us/img-2.jpg') }}" alt class="img img-responsive">
                    <img src="{{ asset('assets/images/about-us/img-3.jpg') }}" alt class="img img-responsive">
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>



<!-- start of services-section --> 
<section class="services-section section-padding">
    <div class="container">        
        <div class="row section-title-s2">
            <div class="col col-lg-3">
                <h2><span>Layanan</span> BARATALA</h2>
            </div>
            <div class="col col-lg-7">
                <p>Kami menyediakan layanan end-to-end rantai nilai bijih besi—mulai dari eksplorasi hingga pengapalan. Fokus kami pada keandalan kualitas, keselamatan, dan kepatuhan memastikan kontinuitas pasokan untuk mitra industri.</p>
            </div>
        </div> <!-- end row -->

        <div class="row services-grids">
            <div class="col col-lg-4 col-xs-6">
                <div class="grid">
                    <div class="bg-image">
                        <img src="{{ asset('assets/images/services/img-1.jpg') }}" alt>
                    </div>
                    <span class="icon"><i class="fi flaticon-construction"></i></span>
                    <div class="service-details">
                        <h3><a href="#">Eksplorasi & Studi Geologi</a></h3>
                        <p>Pemetaan geologi, sampling, dan pengeboran inti untuk definisi sumber daya yang akurat.</p>
                    </div>
                </div>
            </div>
            <div class="col col-lg-4 col-xs-6">
                <div class="grid">
                    <div class="bg-image">
                        <img src="{{ asset('assets/images/services/img-2.jpg') }}" alt>
                    </div>
                    <span class="icon"><i class="fi flaticon-construction"></i></span>
                    <div class="service-details">
                        <h3><a href="#">Pembukaan Lahan & Overburden</a></h3>
                        <p>Pengelolaan OB yang terencana untuk mengoptimalkan siklus penambangan dan biaya.</p>
                    </div>
                </div>
            </div>
            <div class="col col-lg-4 col-xs-6">
                <div class="grid">
                    <div class="bg-image">
                        <img src="{{ asset('assets/images/services/img-3.jpg') }}" alt>
                    </div>
                    <span class="icon"><i class="fi flaticon-construction"></i></span>
                    <div class="service-details">
                        <h3><a href="#">Penambangan (Drill & Blast)</a></h3>
                        <p>Operasi drill, peledakan, pemuatan, dan pengangkutan dengan standar K3 tinggi.</p>
                    </div>
                </div>
            </div>
            <div class="col col-lg-4 col-xs-6">
                <div class="grid">
                    <div class="bg-image">
                        <img src="{{ asset('assets/images/services/img-4.jpg') }}" alt>
                    </div>
                    <span class="icon"><i class="fi flaticon-construction"></i></span>
                    <div class="service-details">
                        <h3><a href="#">Crushing & Screening</a></h3>
                        <p>Pengolahan ukuran dan peningkatan konsistensi kadar Fe sesuai spesifikasi pabrik baja.</p>
                    </div>
                </div>
            </div>
            <div class="col col-lg-4 col-xs-6">
                <div class="grid">
                    <div class="bg-image">
                        <img src="{{ asset('assets/images/services/img-5.jpg') }}" alt>
                    </div>
                    <span class="icon"><i class="fi flaticon-construction"></i></span>
                    <div class="service-details">
                        <h3><a href="#">Hauling & Logistik</a></h3>
                        <p>Transportasi tambang–stockpile–pelabuhan yang efisien dan tepat waktu.</p>
                    </div>
                </div>
            </div>
            <div class="col col-lg-4 col-xs-6">
                <div class="grid">
                    <div class="bg-image">
                        <img src="{{ asset('assets/images/services/img-6.jpg') }}" alt>
                    </div>
                    <span class="icon"><i class="fi flaticon-construction"></i></span>
                    <div class="service-details">
                        <h3><a href="#">Reklamasi & K3L</a></h3>
                        <p>Praktik lingkungan dan keselamatan kerja untuk operasi tambang yang berkelanjutan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</section>
<!-- end of services-section -->


<!-- start of testimonial-section --> 
<section class="testimonial-section section-padding">
    <div class="container">
        <div class="row section-title-s3">
            <div class="col col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <h2>Apa Kata <span>Mitra</span> Kami</h2>
                <p>Mitra industri menilai BARATALA sebagai partner andal berkat kualitas konsisten, respon cepat, dan komitmen keselamatan kerja.</p>
            </div>
        </div> <!-- end section-title -->

        <div class="row">
            <div class="col col-xs-12">
                <div class="testimonials-slider dots-style-1">
                    <div class="grid">
                        <div class="client-quote">
                            <p>Kualitas Fe stabil dan pengiriman tepat waktu membuat lini produksi kami berjalan lebih efisien.</p>
                        </div>
                        <div class="client-info">
                            <div class="client-pic">
                                <img src="{{ asset('assets/images/testimonials/img-1.jpg') }}" alt>
                            </div>
                            <div class="client-details">
                                <h4>Marcus Finn</h4>
                                <span>CEO, Axura Steel</span>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="client-quote">
                            <p>Komunikasi operasional yang transparan dan patuh K3L—BARATALA adalah mitra jangka panjang kami.</p>
                        </div>
                        <div class="client-info">
                            <div class="client-pic">
                                <img src="{{ asset('assets/images/testimonials/img-1.jpg') }}" alt>
                            </div>
                            <div class="client-details">
                                <h4>Marcus Finn</h4>
                                <span>CEO, Axura Steel</span>
                            </div>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="client-quote">
                            <p>Supply chain dari pit ke pelabuhan tertata rapi sehingga variabilitas pasokan berkurang signifikan.</p>
                        </div>
                        <div class="client-info">
                            <div class="client-pic">
                                <img src="{{ asset('assets/images/testimonials/img-1.jpg') }}" alt>
                            </div>
                            <div class="client-details">
                                <h4>Marcus Finn</h4>
                                <span>CEO, Axura Steel</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end of testimonial-section -->


<!-- start of latest-projects --> 
<section class="latest-projects section-padding">
    <div class="container">
        <div class="row section-title-s3">
            <div class="col col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <h2>Proyek <span>Terbaru</span> Kami</h2>
                <p>Rangkaian aktivitas BARATALA di Tanah Laut—dari eksplorasi hingga pengolahan—untuk menghadirkan pasokan bijih besi yang berkelanjutan.</p>
            </div>
        </div> <!-- end section-title -->

        <div class="portfolio gallery-grid">
            <div class="row">
                <ul class="portfolio-sorting gallery-button list-inline text-center">
                    <li><a href="#" data-group="all" class="filter-btn active">Semua</a></li>
                    <li><a class="filter-btn" href="#" data-group="exploration">Eksplorasi</a></li>
                    <li><a class="filter-btn" href="#" data-group="mining">Penambangan</a></li>
                    <li><a class="filter-btn" href="#" data-group="processing">Pengolahan</a></li>
                    <li><a class="filter-btn" href="#" data-group="logistics">Logistik</a></li>
                </ul> <!--end portfolio sorting -->

                <div id="lightBox" class="gallery-wrapper">
                    <ul class="portfolio-items courses list-unstyled" id="grid">
                        <li class="col-md-3 col-sm-6" data-groups='["exploration"]'>
                            <figure class="portfolio-item gallery-caption grid">
                                <div class="inner">
                                    <a href="{{ asset('assets/images/latest-projects/img-1.jpg') }}" class="fancybox">
                                        <img src="{{ asset('assets/images/latest-projects/img-1.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="project-title">
                                    <h3><a href="#">Survei Geofisika Tanah Laut</a></h3>
                                </div>
                            </figure>
                        </li>

                        <li class="col-md-3 col-sm-6" data-groups='["exploration"]'>
                            <figure class="portfolio-item gallery-caption grid">
                                <div class="inner">
                                    <a href="{{ asset('assets/images/latest-projects/img-2.jpg') }}" class="fancybox">
                                        <img src="{{ asset('assets/images/latest-projects/img-2.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="project-title">
                                    <h3><a href="#">Pengeboran Inti & Sampling Fe</a></h3>
                                </div>
                            </figure>
                        </li>

                        <li class="col-md-3 col-sm-6" data-groups='["mining"]'>
                            <figure class="portfolio-item gallery-caption grid">
                                <div class="inner">
                                    <a href="{{ asset('assets/images/latest-projects/img-3.jpg') }}" class="fancybox">
                                        <img src="{{ asset('assets/images/latest-projects/img-3.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="project-title">
                                    <h3><a href="#">Operasi Drill & Blast</a></h3>
                                </div>
                            </figure>
                        </li>

                        <li class="col-md-3 col-sm-6" data-groups='["mining"]'>
                            <figure class="portfolio-item gallery-caption grid">
                                <div class="inner">
                                    <a href="{{ asset('assets/images/latest-projects/img-4.jpg') }}" class="fancybox">
                                        <img src="{{ asset('assets/images/latest-projects/img-4.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="project-title">
                                    <h3><a href="#">Load & Haul ke Stockpile</a></h3>
                                </div>
                            </figure>
                        </li>

                        <li class="col-md-3 col-sm-6" data-groups='["processing"]'>
                            <figure class="portfolio-item gallery-caption grid">
                                <div class="inner">
                                    <a href="{{ asset('assets/images/latest-projects/img-5.jpg') }}" class="fancybox">
                                        <img src="{{ asset('assets/images/latest-projects/img-5.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="project-title">
                                    <h3><a href="#">Crushing & Screening 600 TPH</a></h3>
                                </div>
                            </figure>
                        </li>

                        <li class="col-md-3 col-sm-6" data-groups='["processing"]'>
                            <figure class="portfolio-item gallery-caption grid">
                                <div class="inner">
                                    <a href="{{ asset('assets/images/latest-projects/img-6.jpg') }}" class="fancybox">
                                        <img src="{{ asset('assets/images/latest-projects/img-6.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="project-title">
                                    <h3><a href="#">Quality Control Kadar Fe</a></h3>
                                </div>
                            </figure>
                        </li>

                        <li class="col-md-3 col-sm-6" data-groups='["logistics"]'>
                            <figure class="portfolio-item gallery-caption grid">
                                <div class="inner">
                                    <a href="{{ asset('assets/images/latest-projects/img-7.jpg') }}" class="fancybox">
                                        <img src="{{ asset('assets/images/latest-projects/img-7.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="project-title">
                                    <h3><a href="#">Hauling ke Pelabuhan</a></h3>
                                </div>
                            </figure>
                        </li>

                        <li class="col-md-3 col-sm-6" data-groups='["logistics"]'>
                            <figure class="portfolio-item gallery-caption grid">
                                <div class="inner">
                                    <a href="{{ asset('assets/images/latest-projects/img-8.jpg') }}" class="fancybox">
                                        <img src="{{ asset('assets/images/latest-projects/img-8.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="project-title">
                                    <h3><a href="#">Pengapalan & Dokumentasi</a></h3>
                                </div>
                            </figure>
                        </li>
                    </ul> <!--end portfolio grid -->
                </div> <!-- gallery-wrapper -->
            </div> <!--end row -->
        </div>
    </div> <!-- end container -->
</section>
<!-- end of latest-projects -->


<!-- start of fun-fact --> 
<section class="fun-fact section-padding">
    <div class="container">
        <div class="row section-title-s4">
            <div class="col col-xs-12">
                <h2>Fakta BARATALA dalam <span>Angka</span></h2>
            </div>
        </div> <!-- end section-title -->

        <div class="row start-count">
            <div class="col col-sm-4">
                <div class="grid">
                    <h4><span class="counter" data-count="1200">00</span><span>+</span></h4>
                    <h3>Kumulatif Pengiriman (kt)</h3>
                    <p>Pengiriman bijih besi ke mitra industri secara berkelanjutan.</p>
                </div>
            </div>
            <div class="col col-sm-4">
                <div class="grid">
                    <h4><span class="counter" data-count="800">00</span><span>+</span></h4>
                    <h3>Tenaga Kerja Lokal</h3>
                    <p>Pemberdayaan SDM Tanah Laut sebagai prioritas operasional kami.</p>
                </div>
            </div>
            <div class="col col-sm-4">
                <div class="grid">
                    <h4><span class="counter" data-count="99">00</span><span>%</span></h4>
                    <h3>Kepuasan Mitra</h3>
                    <p>Konsistensi kualitas, keselamatan, dan layanan yang responsif.</p>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end of fun-fact -->


<!-- start of faq-blog --> 
<section class="faq-blog section-padding">
    <div class="container">
        <div class="row">
            <div class="col col-lg-5">
                <div class="section-title-s5">
                    <h2>Pertanyaan yang <span>Sering Diajukan</span></h2>
                </div>
                <div class="panel-group faq-accordion theme-accordion" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true">Bagaimana BARATALA memastikan kepatuhan AMDAL?</a>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <div class="img-holder">
                                    <img src="{{ asset('assets/images/faq/img-1.jpg') }}" alt class="img img-responsive">
                                </div>
                                <p>Kami menerapkan pemantauan lingkungan berkala, pengelolaan air & sedimen, serta reklamasi progresif sesuai regulasi.</p>
                                <a href="#" class="read-more">Baca selengkapnya</a>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Seperti apa spesifikasi produk bijih besi BARATALA?</a>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="img-holder">
                                    <img src="{{ asset('assets/images/faq/img-1.jpg') }}" alt class="img img-responsive">
                                </div>
                                <p>Kami menyediakan rentang ukuran dan kadar Fe yang disesuaikan dengan kebutuhan pabrik baja mitra.</p>
                                <a href="#" class="read-more">Baca selengkapnya</a>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Bagaimana jaminan keselamatan kerja di area tambang?</a>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="img-holder">
                                    <img src="{{ asset('assets/images/faq/img-1.jpg') }}" alt class="img img-responsive">
                                </div>
                                <p>Standar K3 diterapkan ketat: pelatihan rutin, inspeksi alat, dan budaya pelaporan insiden tanpa sanksi.</p>
                                <a href="#" class="read-more">Baca selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-lg-7 blog-col">
                <div class="section-title-s5">
                    <h2>Artikel <span>BARATALA</span></h2>
                </div>

                <div class="blog">
                    <div class="grid">
                        <div class="entry-media">
                            <img src="{{ asset('assets/images/blog/img-1.jpg') }}" alt class="img img-responsive">
                        </div>
                        <div class="entry-body">
                            <h3><a href="#">Optimasi Recovery Fe untuk Pasokan Stabil</a></h3>
                            <a href="#" class="read-more">Baca</a>
                        </div>
                    </div>
                    <div class="grid">
                        <div class="entry-media">
                            <img src="{{ asset('assets/images/blog/img-2.jpg') }}" alt class="img img-responsive">
                        </div>
                        <div class="entry-body">
                            <h3><a href="#">Rantai Suplai Berkelanjutan dari Tanah Laut</a></h3>
                            <a href="#" class="read-more">Baca</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end of faq-blog -->


<!-- start of partners-section --> 
<section class="partners-section">
    <h2 class="hidden">Mitra</h2>
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="partners-slider">
                    <div class="grid">
                        <img src="{{ asset('assets/images/partners/img-1.jpg') }}" alt class="img img-responsive">
                    </div>
                    <div class="grid">
                        <img src="{{ asset('assets/images/partners/img-2.jpg') }}" alt class="img img-responsive">
                    </div>
                    <div class="grid">
                        <img src="{{ asset('assets/images/partners/img-3.jpg') }}" alt class="img img-responsive">
                    </div>
                    <div class="grid">
                        <img src="{{ asset('assets/images/partners/img-4.jpg') }}" alt class="img img-responsive">
                    </div>
                    <div class="grid">
                        <img src="{{ asset('assets/images/partners/img-5.jpg') }}" alt class="img img-responsive">
                    </div>
                    <div class="grid">
                        <img src="{{ asset('assets/images/partners/img-2.jpg') }}" alt class="img img-responsive">
                    </div>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end of partners-section -->

@endsection

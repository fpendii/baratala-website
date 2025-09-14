@extends("layouts.user")
@section("content")

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <h3>BARATALA – Operasi Tambang Aman & Andal</h3>
                                <p>Solusi pertambangan bijih besi terintegrasi dari Tanah Laut, Kalsel.</p>
                                <a href="{{ url('/services') }}" class="boxed-btn3">Layanan Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center slider_bg_2 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Eksplorasi, Penambangan, Hingga Pengapalan</h3>
                                <p>Efisiensi operasi dengan standar K3L dan kualitas produk terjaga.</p>
                                <a href="{{ url('/projects') }}" class="boxed-btn3">Lihat Proyek</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Kualitas Bijih Besi Konsisten</h3>
                                <p>Quality Control kadar Fe untuk memenuhi kebutuhan industri.</p>
                                <a href="{{ url('/contact') }}" class="boxed-btn3">Hubungi Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- features_area_start -->
    <div class="features_area">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-4 col-md-4">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <i class="flaticon-sketch"></i>
                        </div>
                        <h3>Eksplorasi Terukur</h3>
                        <p>Pemetaan & survei geologi untuk memastikan cadangan dan kelayakan tambang.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <i class="flaticon-helmet"></i>
                        </div>
                        <h3>Tim Berpengalaman</h3>
                        <p>Geolog, mining engineer, dan HSE berpengalaman menjaga operasi aman & efisien.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single_feature text-center">
                        <div class="icon">
                            <i class="flaticon-support"></i>
                        </div>
                        <h3>Peralatan Modern</h3>
                        <p>Peremukan, screening, dan hauling yang andal untuk produktivitas tinggi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features_area_end -->

    <!-- about_area_start  -->
    <div class="about_area">
        <div class="container">
            <div class="border_1px">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-md-6">
                        <div class="about_thumb">
                            <img src="{{ asset('assets/img/about/about.png') }}" alt="Tentang BARATALA">
                            <div class="pattern_img d-none d-lg-block">
                                <img src="{{ asset('assets/img/pattern/pattern.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="about_info">
                            <h3>Kami melayani kebutuhan <br> pertambangan bijih besi Anda</h3>
                            <p class="first_para">
                                BARATALA adalah perusahaan pertambangan di Tanah Laut, Kalimantan Selatan,
                                menyediakan layanan dari eksplorasi hingga pengapalan dengan fokus pada K3L dan kualitas.
                            </p>
                            <p>
                                Kami menerapkan praktik penambangan bertanggung jawab, pengawasan kadar Fe yang ketat,
                                dan optimalisasi rantai logistik untuk memenuhi spesifikasi pelanggan.
                            </p>
                            <a href="{{ url('/about') }}" class="boxed-btn3">Tentang Kami</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- about_area_end  -->

    <!-- service_area_start  -->
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50">
                        <h3>Layanan Kami</h3>
                    </div>
                </div>
            </div>
            <div class="border_bottom_1px position-relative">
                <div class="pattern_img d-none d-xl-block">
                    <img src="{{ asset('assets/img/pattern/pattern.png') }}" alt="">
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="service_active owl-carousel">
                            <div class="single_service">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/service/1.png') }}" alt="Eksplorasi & Pemetaan">
                                </div>
                                <div class="service_info">
                                    <a href="{{ url('/services#eksplorasi') }}">
                                        <h3>Eksplorasi & Pemetaan</h3>
                                    </a>
                                    <p>Survei geologi, pemboran, dan estimasi cadangan.</p>
                                    <a class="d-flex align-items-center" href="{{ url('/services#eksplorasi') }}">More <i class="ti-angle-right"></i></a>
                                </div>
                            </div>
                            <div class="single_service">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/service/2.png') }}" alt="Penambangan & Hauling">
                                </div>
                                <div class="service_info">
                                    <a href="{{ url('/services#penambangan') }}">
                                        <h3>Penambangan & Hauling</h3>
                                    </a>
                                    <p>Operasi pit, loading, dan pengangkutan ke ROM/port.</p>
                                    <a class="d-flex align-items-center" href="{{ url('/services#penambangan') }}">More <i class="ti-angle-right"></i></a>
                                </div>
                            </div>
                            <div class="single_service">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/service/3.png') }}" alt="Crushing & Screening">
                                </div>
                                <div class="service_info">
                                    <a href="{{ url('/services#processing') }}">
                                        <h3>Crushing & Screening</h3>
                                    </a>
                                    <p>Kapasitas tinggi dengan kontrol ukuran dan kadar.</p>
                                    <a class="d-flex align-items-center" href="{{ url('/services#processing') }}">More <i class="ti-angle-right"></i></a>
                                </div>
                            </div>
                            <div class="single_service">
                                <div class="thumb">
                                    <img src="{{ asset('assets/img/service/1.png') }}" alt="QC & Logistik">
                                </div>
                                <div class="service_info">
                                    <a href="{{ url('/services#logistik') }}">
                                        <h3>Quality Control & Logistik</h3>
                                    </a>
                                    <p>Pengujian kadar Fe dan pengiriman tepat waktu.</p>
                                    <a class="d-flex align-items-center" href="{{ url('/services#logistik') }}">More <i class="ti-angle-right"></i></a>
                                </div>
                            </div>
                        </div><!-- /.service_active -->
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- service_area_end  -->

    <!-- gallery_area-START -->
    <div class="gallery_area">
        <div class="container">
            <div class="gallery_nav">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-6">
                        <h3 class="gallery_title">Beberapa proyek & aktivitas kami</h3>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="portfolio-menu">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".cat1">Eksplorasi</button>
                            <button data-filter=".cat2">Penambangan</button>
                            <button data-filter=".cat3">Pengolahan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="row grid no-gutters">
                <div class="col-xl-3 col-lg-3 col-md-6 grid-item cat3">
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/gallery/1.png') }}" alt="Crushing & Screening">
                        </div>
                        <div class="gallery_hover">
                            <div class="hover_inner d-flex align-items-center justify-content-between">
                                <h3>Crushing & Screening</h3>
                                <div class="icon">
                                    <a href="{{ url('/project-details') }}"><i class="ti-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 grid-item cat3">
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/gallery/2.png') }}" alt="Stockpile Management">
                        </div>
                        <div class="gallery_hover">
                            <div class="hover_inner d-flex align-items-center justify-content-between">
                                <h3>Stockpile Management</h3>
                                <div class="icon">
                                    <a href="{{ url('/project-details') }}"><i class="ti-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 grid-item cat2">
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/gallery/3.png') }}" alt="Pit Operation">
                        </div>
                        <div class="gallery_hover">
                            <div class="hover_inner d-flex align-items-center justify-content-between">
                                <h3>Pit Operation</h3>
                                <div class="icon">
                                    <a href="{{ url('/project-details') }}"><i class="ti-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 grid-item cat1 cat3">
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/gallery/4.png') }}" alt="Sampling & QC">
                        </div>
                        <div class="gallery_hover">
                            <div class="hover_inner d-flex align-items-center justify-content-between">
                                <h3>Sampling & QC</h3>
                                <div class="icon">
                                    <a href="{{ url('/project-details') }}"><i class="ti-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 grid-item cat2 cat3">
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/gallery/5.png') }}" alt="Hauling">
                        </div>
                        <div class="gallery_hover">
                            <div class="hover_inner d-flex align-items-center justify-content-between">
                                <h3>Hauling</h3>
                                <div class="icon">
                                    <a href="{{ url('/project-details') }}"><i class="ti-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 grid-item cat1 cat2">
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/gallery/6.png') }}" alt="Drill & Blast">
                        </div>
                        <div class="gallery_hover">
                            <div class="hover_inner d-flex align-items-center justify-content-between">
                                <h3>Drill & Blast</h3>
                                <div class="icon">
                                    <a href="{{ url('/project-details') }}"><i class="ti-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 grid-item cat1">
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/gallery/7.png') }}" alt="Geologi & Pemetaan">
                        </div>
                        <div class="gallery_hover">
                            <div class="hover_inner d-flex align-items-center justify-content-between">
                                <h3>Geologi & Pemetaan</h3>
                                <div class="icon">
                                    <a href="{{ url('/project-details') }}"><i class="ti-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 grid-item cat1 cat2 cat3">
                    <div class="single_gallery">
                        <div class="thumb">
                            <img src="{{ asset('assets/img/gallery/8.png') }}" alt="Pengapalan">
                        </div>
                        <div class="gallery_hover">
                            <div class="hover_inner d-flex align-items-center justify-content-between">
                                <h3>Pengapalan</h3>
                                <div class="icon">
                                    <a href="{{ url('/project-details') }}"><i class="ti-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- /.row -->
        </div>
    </div>
    <!-- gallery_area-END -->

    <!-- more_pro_btn_start  -->
    <a href="{{ url('/projects') }}" class="more_pro_btn">More Projects</a>
    <!-- more_pro_btn_end  -->

    <!-- chose_us_area start -->
    <div class="chose_us_area chose_bg_1">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-6 col-md-8">
                    <div class="chose_info">
                        <h3>Mengapa Memilih BARATALA?</h3>
                        <p class="lasrge_text">
                            Operasi terintegrasi dengan standar K3L, produktivitas tinggi, dan kualitas konsisten.
                        </p>
                        <p>
                            Dari eksplorasi hingga pengapalan, kami mengelola rantai nilai untuk memastikan pasokan
                            andal dan tepat spesifikasi.
                        </p>
                        <div class="icon_video">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=Spi1vvZgLXw">
                                <i class="fa fa-caret-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- chose_us_area end -->

    <div class="testimonial_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-55">
                        <h3>Testimoni</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="{{ asset('assets/img/testimonial/1.png') }}" alt="Klien">
                                    </div>
                                    <h4>Jordan Adams</h4>
                                    <span>Client</span>
                                </div>
                                <p>“Pengiriman tepat waktu dan kualitas konsisten—BARATALA sangat bisa diandalkan.”</p>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="{{ asset('assets/img/testimonial/1.png') }}" alt="Klien">
                                    </div>
                                    <h4>Jordan Adams</h4>
                                    <span>Client</span>
                                </div>
                                <p>“Tim profesional dan responsif dari pit hingga pelabuhan.”</p>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="{{ asset('assets/img/testimonial/1.png') }}" alt="Klien">
                                    </div>
                                    <h4>Jordan Adams</h4>
                                    <span>Client</span>
                                </div>
                                <p>“Standar K3L dijalankan dengan baik, operasi aman dan efisien.”</p>
                            </div>
                        </div>
                    </div><!-- /.testmonial_active -->
                </div>
            </div>
        </div>
    </div>

    <!-- contact_us_start  -->
    <div class="contact_us overlay">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-7">
                    <div class="contact_text">
                        <h3>Mencari mitra pertambangan bijih besi yang andal?</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="contact_btn">
                        <a class="boxed-btn3" href="{{ url('/contact') }}">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact_us_end -->

@endsection

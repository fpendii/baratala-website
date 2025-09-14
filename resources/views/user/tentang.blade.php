@extends("layouts.user")
@section("content")

    <!-- start page-title-wrapper -->
    <div class="page-title">
        <div class="container">
            <h1>Tentang BARATALA</h1>
        </div>
    </div>
    <!-- end page-title-wrapper -->

    <!-- start page title bottom menu -->
    <div class="pg-title-btm-menu">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <ul>
                        <li class="current"><a href="{{ url('/about') }}">Ikhtisar</a></li>
                        <li><a href="{{ url('/time-line') }}">Linimasa Perusahaan</a></li>
                        <li><a href="{{ url('/clients') }}">Mitra</a></li>
                        <li><a href="{{ url('/team') }}">Tim</a></li>
                        <li><a href="{{ url('/careers') }}">Karier</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title bottom menu -->

    <!-- start of overview-section -->
    <section class="overview-section section-padding">
        <h2 class="hidden">Ikhtisar</h2>
        <div class="container">
            <div class="row">
                <div class="col col-lg-10 col-lg-offset-1 content">
                    <p class="overview-text">
                        <span>BARATALA</span> berbasis di <span>Tanah Laut, Kalimantan Selatan</span>, berfokus pada
                        eksplorasi, penambangan, dan pengolahan <strong>bijih besi</strong> untuk memasok kebutuhan
                        industri baja nasional secara berkelanjutan.
                    </p>

                    <div class="overview-pic-video">
                        <div class="img-holder">
                            <a href="https://example.com/profil-baratala" target="_blank" rel="noopener">
                                <img src="{{ asset('assets/images/about-us/sw.png') }}" alt="Profil BARATALA">
                            </a>
                            <img src="{{ asset('assets/images/overview/img-1.jpg') }}" alt="Aktivitas Tambang" class="img img-responsive">
                        </div>
                        <div class="video-holder">
                            <img src="{{ asset('assets/images/overview/img-2.jpg') }}" alt="Kawasan Operasi" class="img img-responsive">
                            <a href="https://www.youtube.com/embed/opj24KnzrWo?autoplay=1" class="video-play" data-type="iframe">
                                <i class="fa fa-youtube-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of overview-section -->

    <!-- start of vision-mission -->
    <section class="section-padding" style="background:#f7f9fb;">
        <div class="container">
            <div class="row section-title-s4">
                <div class="col col-xs-12">
                    <h2>Visi & <span>Misi</span></h2>
                </div>
            </div>

            <div class="row">
                <div class="col col-md-6">
                    <div class="grid">
                        <h3>Visi</h3>
                        <p>
                            Menjadi mitra pertambangan bijih besi terpercaya dari Tanah Laut yang unggul dalam keselamatan,
                            kualitas, dan keberlanjutan untuk mendukung kemandirian industri baja Indonesia.
                        </p>
                    </div>
                </div>
                <div class="col col-md-6">
                    <div class="grid">
                        <h3>Misi</h3>
                        <ul style="margin-left:16px;">
                            <li>Mengelola sumber daya bijih besi secara efisien dan bertanggung jawab.</li>
                            <li>Menjaga kadar Fe dan spesifikasi produk yang konsisten.</li>
                            <li>Mengutamakan K3L dan kesejahteraan pekerja serta masyarakat sekitar.</li>
                            <li>Mengembangkan SDM lokal dan kemitraan jangka panjang dengan pelanggan.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of vision-mission -->

    <!-- start of org-structure -->
    <section class="section-padding">
        <div class="container">
            <div class="row section-title-s4">
                <div class="col col-xs-12">
                    <h2>Struktur <span>Organisasi</span></h2>
                </div>
            </div>

            <!-- Org Chart Image (klik menuju URL dummy) -->
            <div class="row" style="margin-bottom:30px;">
                <div class="col col-xs-12 text-center">
                    <a href="https://example.com/struktur-organisasi" target="_blank" rel="noopener">
                        <img src="{{ asset('assets/images/team/struktur-organisasi.png') }}" alt="Struktur Organisasi BARATALA" class="img img-responsive" style="display:inline-block;">
                    </a>
                </div>
            </div>

            <!-- Key People -->
            <div class="row team-grid">
                <div class="col-sm-6 col-md-3">
                    <div class="grid text-center">
                        <a href="https://example.com/profil-ceo" target="_blank" rel="noopener">
                            <img src="{{ asset('assets/images/team/img-4.jpg') }}" alt="CEO BARATALA" class="img img-responsive">
                        </a>
                        <h4 style="margin-top:12px;">CEO</h4>
                        <p>Memimpin strategi dan tata kelola perusahaan.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="grid text-center">
                        <a href="https://example.com/profil-coo" target="_blank" rel="noopener">
                            <img src="{{ asset('assets/images/team/img-3.jpg') }}" alt="COO BARATALA" class="img img-responsive">
                        </a>
                        <h4 style="margin-top:12px;">COO</h4>
                        <p>Mengawal eksekusi operasi dari pit ke pelabuhan.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="grid text-center">
                        <a href="https://example.com/profil-geology" target="_blank" rel="noopener">
                            <img src="{{ asset('assets/images/team/img-1.jpg') }}" alt="Head of Geology" class="img img-responsive">
                        </a>
                        <h4 style="margin-top:12px;">Head of Geology</h4>
                        <p>Eksplorasi, pemodelan sumber daya, dan QA/QC.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="grid text-center">
                        <a href="https://example.com/profil-hse" target="_blank" rel="noopener">
                            <img src="{{ asset('assets/images/team/img-2.jpg') }}" alt="Head of HSE" class="img img-responsive">
                        </a>
                        <h4 style="margin-top:12px;">Head of HSE</h4>
                        <p>Penerapan K3L dan kepatuhan lingkungan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of org-structure -->

@endsection

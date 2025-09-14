@extends("layouts.user")
@section("content")

    <!-- start page-title-wrapper -->
    <div class="page-title">
        <div class="container">
            <h1>Berita BARATALA</h1>
        </div>
    </div>
    <!-- end page-title-wrapper -->

    <!-- start of blog-content-section -->
    <section class="blog-content-section section-padding">
        <div class="container">
            <div class="row blog-s2-grids">

                <div class="col col-md-4">
                    <div class="grid">
                        <div class="entry-media">
                            <img src="{{ asset('assets/images/blog-s2/img-1.jpg') }}" alt="Eksplorasi Bijih Besi Tanah Laut" class="img img-responsive">
                        </div>
                        <div class="entry-details">
                            <h3><a href="{{ url('/blog/eksplorasi-tanah-laut') }}">Eksplorasi Bijih Besi di Tanah Laut: Metode & Temuan</a></h3>
                            <span class="entry-date">12 Agustus 2025</span>
                            <div class="entry-footer">
                                <a href="{{ url('/blog/eksplorasi-tanah-laut') }}" class="read-more">Baca Selengkapnya</a>
                                <a href="{{ url('/blog/eksplorasi-tanah-laut#komentar') }}" class="comments">
                                    <i class="fa fa-comments" aria-hidden="true"></i> 5
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-md-4">
                    <div class="grid">
                        <div class="entry-media">
                            <img src="{{ asset('assets/images/blog-s2/img-2.jpg') }}" alt="Crushing & Screening 600 TPH" class="img img-responsive">
                        </div>
                        <div class="entry-details">
                            <h3><a href="{{ url('/blog/crushing-600-tph') }}">Uji Coba Crushing &amp; Screening 600 TPH: Hasil Awal</a></h3>
                            <span class="entry-date">28 Juli 2025</span>
                            <div class="entry-footer">
                                <a href="{{ url('/blog/crushing-600-tph') }}" class="read-more">Baca Selengkapnya</a>
                                <a href="{{ url('/blog/crushing-600-tph#komentar') }}" class="comments">
                                    <i class="fa fa-comments" aria-hidden="true"></i> 8
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-md-4">
                    <div class="grid">
                        <div class="entry-media">
                            <img src="{{ asset('assets/images/blog-s2/img-3.jpg') }}" alt="Hauling & Logistik" class="img img-responsive">
                        </div>
                        <div class="entry-details">
                            <h3><a href="{{ url('/blog/hauling-logistik') }}">Optimalisasi Hauling Tanah Laut–Pelabuhan</a></h3>
                            <span class="entry-date">10 Juli 2025</span>
                            <div class="entry-footer">
                                <a href="{{ url('/blog/hauling-logistik') }}" class="read-more">Baca Selengkapnya</a>
                                <a href="{{ url('/blog/hauling-logistik#komentar') }}" class="comments">
                                    <i class="fa fa-comments" aria-hidden="true"></i> 3
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-md-4">
                    <div class="grid">
                        <div class="entry-media">
                            <img src="{{ asset('assets/images/blog-s2/img-3.jpg') }}" alt="K3L di Area Tambang" class="img img-responsive">
                        </div>
                        <div class="entry-details">
                            <h3><a href="{{ url('/blog/k3l-tambang') }}">K3L di Area Tambang: Budaya & Implementasi</a></h3>
                            <span class="entry-date">22 Juni 2025</span>
                            <div class="entry-footer">
                                <a href="{{ url('/blog/k3l-tambang') }}" class="read-more">Baca Selengkapnya</a>
                                <a href="{{ url('/blog/k3l-tambang#komentar') }}" class="comments">
                                    <i class="fa fa-comments" aria-hidden="true"></i> 6
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-md-4">
                    <div class="grid">
                        <div class="entry-media">
                            <img src="{{ asset('assets/images/blog-s2/img-2.jpg') }}" alt="Quality Control Kadar Fe" class="img img-responsive">
                        </div>
                        <div class="entry-details">
                            <h3><a href="{{ url('/blog/qc-fe') }}">Quality Control Kadar Fe: Menjaga Konsistensi Produk</a></h3>
                            <span class="entry-date">05 Juni 2025</span>
                            <div class="entry-footer">
                                <a href="{{ url('/blog/qc-fe') }}" class="read-more">Baca Selengkapnya</a>
                                <a href="{{ url('/blog/qc-fe#komentar') }}" class="comments">
                                    <i class="fa fa-comments" aria-hidden="true"></i> 4
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-md-4">
                    <div class="grid">
                        <div class="entry-media">
                            <img src="{{ asset('assets/images/blog-s2/img-1.jpg') }}" alt="Reklamasi Progresif" class="img img-responsive">
                        </div>
                        <div class="entry-details">
                            <h3><a href="{{ url('/blog/reklamasi-progresif') }}">Reklamasi Progresif: Komitmen Lingkungan BARATALA</a></h3>
                            <span class="entry-date">20 Mei 2025</span>
                            <div class="entry-footer">
                                <a href="{{ url('/blog/reklamasi-progresif') }}" class="read-more">Baca Selengkapnya</a>
                                <a href="{{ url('/blog/reklamasi-progresif#komentar') }}" class="comments">
                                    <i class="fa fa-comments" aria-hidden="true"></i> 2
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- end row -->

            <div class="pagination">
                <ul>
                    <li class="current"><a href="{{ url('/blog?page=1') }}">1</a></li>
                    <li><a href="{{ url('/blog?page=2') }}">2</a></li>
                    <li><a href="{{ url('/blog?page=3') }}">3</a></li>
                </ul>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end of blog-content-section -->

@endsection
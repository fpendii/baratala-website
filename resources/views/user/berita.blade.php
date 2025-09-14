@extends('layouts.user')

@section('content')
  <!-- bradcam_area -->
  <div class="bradcam_area bradcam_bg_2">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="bradcam_text text-center">
            <h3>Blog</h3>
            <p><a href="{{ url('/') }}">Home</a> / <a href="{{ url('/blog') }}">Blog</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /bradcam_area -->

  <!-- Blog Area -->
  <section class="blog_area section-padding">
    <div class="container">
      <div class="row">

        <!-- Left content -->
        <div class="col-lg-8 mb-5 mb-lg-0">
          <div class="blog_left_sidebar">

            <!-- Item -->
            <article class="blog_item">
              <div class="blog_item_img">
                <img class="card-img rounded-0" src="{{ asset('assets/img/blog/single_blog_1.png') }}" alt="Optimasi Crushing & Screening 600 TPH">
                <a href="#" class="blog_item_date">
                  <h3>12</h3><p>Agu</p>
                </a>
              </div>
              <div class="blog_details">
                <a class="d-inline-block" href="{{ url('/blog/crushing-600-tph') }}">
                  <h2>Optimasi Crushing &amp; Screening 600 TPH di Tanah Laut</h2>
                </a>
                <p>Ikhtisar hasil uji kapasitas, pengaturan CSS, serta strategi stockpiling untuk menjaga konsistensi kadar Fe.</p>
                <ul class="blog-info-link">
                  <li><a href="#"><i class="fa fa-user"></i> Operasi Tambang</a></li>
                  <li><a href="{{ url('/blog/crushing-600-tph#komentar') }}"><i class="fa fa-comments"></i> 08 Komentar</a></li>
                </ul>
              </div>
            </article>

            <article class="blog_item">
              <div class="blog_item_img">
                <img class="card-img rounded-0" src="{{ asset('assets/img/blog/single_blog_2.png') }}" alt="Eksplorasi Bijih Besi Tanah Laut">
                <a href="#" class="blog_item_date">
                  <h3>28</h3><p>Jul</p>
                </a>
              </div>
              <div class="blog_details">
                <a class="d-inline-block" href="{{ url('/blog/eksplorasi-tanah-laut') }}">
                  <h2>Eksplorasi Bijih Besi Tanah Laut: Metode &amp; Temuan</h2>
                </a>
                <p>Pendekatan pemetaan geologi, pemboran inti, dan estimasi sumber daya untuk perencanaan pit yang akurat.</p>
                <ul class="blog-info-link">
                  <li><a href="#"><i class="fa fa-user"></i> Eksplorasi</a></li>
                  <li><a href="{{ url('/blog/eksplorasi-tanah-laut#komentar') }}"><i class="fa fa-comments"></i> 05 Komentar</a></li>
                </ul>
              </div>
            </article>

            <article class="blog_item">
              <div class="blog_item_img">
                <img class="card-img rounded-0" src="{{ asset('assets/img/blog/single_blog_3.png') }}" alt="K3L di Area Tambang">
                <a href="#" class="blog_item_date">
                  <h3>10</h3><p>Jul</p>
                </a>
              </div>
              <div class="blog_details">
                <a class="d-inline-block" href="{{ url('/blog/k3l-tambang') }}">
                  <h2>K3L di Area Tambang: Budaya, SOP, dan Implementasi</h2>
                </a>
                <p>Penguatan budaya keselamatan, pengelolaan risiko, dan kepatuhan lingkungan pada tiap proses operasi.</p>
                <ul class="blog-info-link">
                  <li><a href="#"><i class="fa fa-user"></i> K3L &amp; Lingkungan</a></li>
                  <li><a href="{{ url('/blog/k3l-tambang#komentar') }}"><i class="fa fa-comments"></i> 06 Komentar</a></li>
                </ul>
              </div>
            </article>

            <article class="blog_item">
              <div class="blog_item_img">
                <img class="card-img rounded-0" src="{{ asset('assets/img/blog/single_blog_4.png') }}" alt="Rantai Pasok Hauling">
                <a href="#" class="blog_item_date">
                  <h3>22</h3><p>Jun</p>
                </a>
              </div>
              <div class="blog_details">
                <a class="d-inline-block" href="{{ url('/blog/hauling-logistik') }}">
                  <h2>Rantai Pasok: Hauling dari Pit ke Pelabuhan</h2>
                </a>
                <p>Perencanaan rute, kontrol muatan, dan penjadwalan armada untuk meminimalkan bottleneck.</p>
                <ul class="blog-info-link">
                  <li><a href="#"><i class="fa fa-user"></i> Logistik &amp; Pelabuhan</a></li>
                  <li><a href="{{ url('/blog/hauling-logistik#komentar') }}"><i class="fa fa-comments"></i> 03 Komentar</a></li>
                </ul>
              </div>
            </article>

            <article class="blog_item">
              <div class="blog_item_img">
                <img class="card-img rounded-0" src="{{ asset('assets/img/blog/single_blog_5.png') }}" alt="Reklamasi Progresif">
                <a href="#" class="blog_item_date">
                  <h3>05</h3><p>Jun</p>
                </a>
              </div>
              <div class="blog_details">
                <a class="d-inline-block" href="{{ url('/blog/reklamasi-progresif') }}">
                  <h2>Reklamasi Progresif: Komitmen Lingkungan BARATALA</h2>
                </a>
                <p>Tata kelola topsoil, revegetasi, dan monitoring pasca-tambang untuk keberlanjutan jangka panjang.</p>
                <ul class="blog-info-link">
                  <li><a href="#"><i class="fa fa-user"></i> K3L &amp; Lingkungan</a></li>
                  <li><a href="{{ url('/blog/reklamasi-progresif#komentar') }}"><i class="fa fa-comments"></i> 02 Komentar</a></li>
                </ul>
              </div>
            </article>

            <!-- Pagination -->
            <nav class="blog-pagination justify-content-center d-flex">
              <ul class="pagination">
                <li class="page-item">
                  <a href="{{ url('/blog?page=1') }}" class="page-link" aria-label="Previous">
                    <i class="ti-angle-left"></i>
                  </a>
                </li>
                <li class="page-item"><a href="{{ url('/blog?page=1') }}" class="page-link">1</a></li>
                <li class="page-item active"><a href="{{ url('/blog?page=2') }}" class="page-link">2</a></li>
                <li class="page-item">
                  <a href="{{ url('/blog?page=3') }}" class="page-link" aria-label="Next">
                    <i class="ti-angle-right"></i>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>

        <!-- Right sidebar -->
        <div class="col-lg-4">
          <div class="blog_right_sidebar">

            <!-- Search -->
            <aside class="single_sidebar_widget search_widget">
              <form action="{{ url('/blog') }}" method="get">
                <div class="form-group">
                  <div class="input-group mb-3">
                    <input type="text" name="q" class="form-control" placeholder="Search Keyword"
                           onfocus="this.placeholder=''" onblur="this.placeholder='Search Keyword'">
                    <div class="input-group-append">
                      <button class="btn" type="submit"><i class="ti-search"></i></button>
                    </div>
                  </div>
                </div>
                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">
                  Search
                </button>
              </form>
            </aside>

            <!-- Categories -->
            <aside class="single_sidebar_widget post_category_widget">
              <h4 class="widget_title">Kategori</h4>
              <ul class="list cat-list">
                <li><a href="{{ url('/blog?k=eksplorasi') }}" class="d-flex"><p>Eksplorasi</p><p>(12)</p></a></li>
                <li><a href="{{ url('/blog?k=operasi') }}" class="d-flex"><p>Operasi Tambang</p><p>(18)</p></a></li>
                <li><a href="{{ url('/blog?k=k3l') }}" class="d-flex"><p>K3L &amp; Lingkungan</p><p>(9)</p></a></li>
                <li><a href="{{ url('/blog?k=logistik') }}" class="d-flex"><p>Logistik &amp; Pelabuhan</p><p>(7)</p></a></li>
                <li><a href="{{ url('/blog?k=teknologi') }}" class="d-flex"><p>Teknologi</p><p>(5)</p></a></li>
              </ul>
            </aside>

            <!-- Recent Post -->
            <aside class="single_sidebar_widget popular_post_widget">
              <h3 class="widget_title">Tulisan Terbaru</h3>

              <div class="media post_item">
                <img src="{{ asset('assets/img/post/post_1.png') }}" alt="Optimasi 600 TPH">
                <div class="media-body">
                  <a href="{{ url('/blog/crushing-600-tph') }}"><h3>Optimasi 600 TPH</h3></a>
                  <p>12 Agu 2025</p>
                </div>
              </div>

              <div class="media post_item">
                <img src="{{ asset('assets/img/post/post_2.png') }}" alt="Eksplorasi Tanah Laut">
                <div class="media-body">
                  <a href="{{ url('/blog/eksplorasi-tanah-laut') }}"><h3>Eksplorasi Tanah Laut</h3></a>
                  <p>28 Jul 2025</p>
                </div>
              </div>

              <div class="media post_item">
                <img src="{{ asset('assets/img/post/post_3.png') }}" alt="K3L di Area Tambang">
                <div class="media-body">
                  <a href="{{ url('/blog/k3l-tambang') }}"><h3>K3L di Area Tambang</h3></a>
                  <p>10 Jul 2025</p>
                </div>
              </div>

              <div class="media post_item">
                <img src="{{ asset('assets/img/post/post_4.png') }}" alt="Hauling ke Pelabuhan">
                <div class="media-body">
                  <a href="{{ url('/blog/hauling-logistik') }}"><h3>Hauling ke Pelabuhan</h3></a>
                  <p>22 Jun 2025</p>
                </div>
              </div>
            </aside>

            <!-- Tag cloud -->
            <aside class="single_sidebar_widget tag_cloud_widget">
              <h4 class="widget_title">Tag Clouds</h4>
              <ul class="list">
                <li><a href="{{ url('/blog?tag=Fe') }}">Fe</a></li>
                <li><a href="{{ url('/blog?tag=crushing') }}">crushing</a></li>
                <li><a href="{{ url('/blog?tag=screening') }}">screening</a></li>
                <li><a href="{{ url('/blog?tag=reklamasi') }}">reklamasi</a></li>
                <li><a href="{{ url('/blog?tag=hauling') }}">hauling</a></li>
                <li><a href="{{ url('/blog?tag=pelabuhan') }}">pelabuhan</a></li>
                <li><a href="{{ url('/blog?tag=Tanah-Laut') }}">Tanah Laut</a></li>
                <li><a href="{{ url('/blog?tag=K3L') }}">K3L</a></li>
              </ul>
            </aside>

            <!-- Instagram feeds -->
            <aside class="single_sidebar_widget instagram_feeds">
              <h4 class="widget_title">Galeri</h4>
              <ul class="instagram_row flex-wrap">
                <li><a href="#"><img class="img-fluid" src="{{ asset('assets/img/post/post_5.png') }}" alt=""></a></li>
                <li><a href="#"><img class="img-fluid" src="{{ asset('assets/img/post/post_6.png') }}" alt=""></a></li>
                <li><a href="#"><img class="img-fluid" src="{{ asset('assets/img/post/post_7.png') }}" alt=""></a></li>
                <li><a href="#"><img class="img-fluid" src="{{ asset('assets/img/post/post_8.png') }}" alt=""></a></li>
                <li><a href="#"><img class="img-fluid" src="{{ asset('assets/img/post/post_9.png') }}" alt=""></a></li>
                <li><a href="#"><img class="img-fluid" src="{{ asset('assets/img/post/post_10.png') }}" alt=""></a></li>
              </ul>
            </aside>

            <!-- Newsletter -->
            <aside class="single_sidebar_widget newsletter_widget">
              <h4 class="widget_title">Newsletter</h4>
              <form action="#" method="post">
                <div class="form-group">
                  <input type="email" class="form-control"
                         onfocus="this.placeholder=''" onblur="this.placeholder='Enter email'"
                         placeholder="Enter email" required>
                </div>
                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">
                  Subscribe
                </button>
              </form>
            </aside>

          </div>
        </div>
        <!-- /Right sidebar -->

      </div>
    </div>
  </section>
  <!-- /Blog Area -->
@endsection

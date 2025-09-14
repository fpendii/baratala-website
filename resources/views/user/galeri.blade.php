@extends('layouts.user')
@section('content')

    <!-- start page-title-wrapper -->
    <div class="page-title">
        <div class="container">
            <h1>Galeri</h1>
        </div>
    </div>
    <!-- end page-title-wrapper -->

    <section class="section-padding">
        <div class="container">

            <div class="row">

                {{-- Item 1 --}}
                <div class="col-sm-6 col-md-4 mb-25">
                    <div class="gallery-card">
                        <a href="{{ asset('assets/images/blog-s2/img-2.jpg') }}"
                           class="fancybox"
                           data-fancybox="baratala-gallery"
                           data-caption="Survei Geologi Tanah Laut">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/blog-s2/img-1.jpg') }}" alt="Survei Geologi">
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <i class="fa fa-search-plus icon" aria-hidden="true"></i>
                                    <div class="caption">Survei Geologi Tanah Laut</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                {{-- Item 2 --}}
                <div class="col-sm-6 col-md-4 mb-25">
                    <div class="gallery-card">
                        <a href="{{ asset('assets/images/blog-s2/img-2.jpg') }}"
                           class="fancybox"
                           data-fancybox="baratala-gallery"
                           data-caption="Operasi Drill & Blast">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/blog-s2/img-1.jpg') }}" alt="Operasi Drill & Blast">
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <i class="fa fa-search-plus icon" aria-hidden="true"></i>
                                    <div class="caption">Operasi Drill &amp; Blast</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                {{-- Item 3 --}}
                <div class="col-sm-6 col-md-4 mb-25">
                    <div class="gallery-card">
                        <a href="{{ asset('assets/images/blog-s2/img-2.jpg') }}"
                           class="fancybox"
                           data-fancybox="baratala-gallery"
                           data-caption="Crushing & Screening 600 TPH">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/blog-s2/img-1.jpg') }}" alt="Crushing & Screening">
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <i class="fa fa-search-plus icon" aria-hidden="true"></i>
                                    <div class="caption">Crushing &amp; Screening 600 TPH</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                {{-- Item 4 --}}
                <div class="col-sm-6 col-md-4 mb-25">
                    <div class="gallery-card">
                        <a href="{{ asset('assets/images/blog-s2/img-2.jpg') }}"
                           class="fancybox"
                           data-fancybox="baratala-gallery"
                           data-caption="Quality Control Kadar Fe">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/blog-s2/img-1.jpg') }}" alt="Quality Control Kadar Fe">
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <i class="fa fa-search-plus icon" aria-hidden="true"></i>
                                    <div class="caption">Quality Control Kadar Fe</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                {{-- Item 5 --}}
                <div class="col-sm-6 col-md-4 mb-25">
                    <div class="gallery-card">
                        <a href="{{ asset('assets/images/blog-s2/img-2.jpg') }}"
                           class="fancybox"
                           data-fancybox="baratala-gallery"
                           data-caption="Hauling ke Pelabuhan">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/blog-s2/img-1.jpg') }}" alt="Hauling ke Pelabuhan">
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <i class="fa fa-search-plus icon" aria-hidden="true"></i>
                                    <div class="caption">Hauling ke Pelabuhan</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                {{-- Item 6 --}}
                <div class="col-sm-6 col-md-4 mb-25">
                    <div class="gallery-card">
                        <a href="{{ asset('assets/images/blog-s2/img-2.jpg') }}"
                           class="fancybox"
                           data-fancybox="baratala-gallery"
                           data-caption="Loading ke Tongkang">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/blog-s2/img-1.jpg') }}" alt="Loading ke Tongkang">
                            </div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <i class="fa fa-search-plus icon" aria-hidden="true"></i>
                                    <div class="caption">Loading ke Tongkang</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

            {{-- Pagination (opsional) --}}
            <div class="pagination">
                <ul>
                    <li class="current"><a href="{{ url('/gallery?page=1') }}">1</a></li>
                    <li><a href="{{ url('/gallery?page=2') }}">2</a></li>
                    <li><a href="{{ url('/gallery?page=3') }}">3</a></li>
                </ul>
            </div>

        </div>
    </section>

    {{-- Style khusus galeri --}}
    <style>
        .mb-25{margin-bottom:25px;}
        .gallery-card{position:relative;overflow:hidden;border-radius:8px;background:#000;}
        .gallery-card .thumb{aspect-ratio:16/9;width:100%;overflow:hidden;background:#000;}
        .gallery-card .thumb img{width:100%;height:100%;object-fit:cover;display:block;transition:transform .5s ease, opacity .5s ease;}

        /* Fallback jika browser belum dukung aspect-ratio */
        @supports not (aspect-ratio: 1) {
            .gallery-card .thumb{position:relative;}
            .gallery-card .thumb::before{content:"";display:block;padding-bottom:56.25%;} /* 16:9 */
            .gallery-card .thumb img{position:absolute;inset:0;}
        }

        .gallery-card .overlay{
            position:absolute;inset:0;display:flex;align-items:center;justify-content:center;
            text-align:center;background:rgba(0,0,0,.55);opacity:0;transition:opacity .3s ease;
            padding:14px;
        }
        .gallery-card .overlay-content{color:#fff;}
        .gallery-card .overlay .icon{font-size:22px;display:block;margin-bottom:6px;}
        .gallery-card .overlay .caption{font-size:15px;line-height:1.4;}
        .gallery-card:hover .thumb img{transform:scale(1.06);}
        .gallery-card:hover .overlay{opacity:1;}
    </style>

@endsection

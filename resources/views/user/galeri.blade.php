@extends('layouts.user')
@section('content')

  <!-- bradcam_area -->
  <div class="bradcam_area bradcam_bg_2">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="bradcam_text text-center">
            <h3>Galeri</h3>
            <p><a href="{{ url('/') }}">Home</a> / Galeri</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /bradcam_area -->

    <!-- gallery_area-START -->
    <div class="gallery_area">
        <div class="container">
            <div class="gallery_nav">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-6">
                    </div>
                    <div class="col-lg-4 col-md-6">
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

@endsection

@extends('layouts.user')
@section('content')

  <div class="container-fluid">
    <div class="row no-gutters">
      <div class="col-md-4 element-animate">
        <a href="{{ url('/projects/eksplorasi-pit-a') }}" class="link-thumbnail">
          <h3>Eksplorasi Pit A Tanah Laut</h3>
          <span class="ion-plus icon"></span>
          <img src="{{ asset('assets/images/industrial_img_1.jpg') }}" alt="Eksplorasi Pit A" class="img-fluid">
        </a>
      </div>
      <div class="col-md-4 element-animate">
        <a href="{{ url('/projects/crushing-600-tph') }}" class="link-thumbnail">
          <h3>Crushing &amp; Screening 600 TPH</h3>
          <span class="ion-plus icon"></span>
          <img src="{{ asset('assets/images/industrial_img_2.jpg') }}" alt="Crushing 600 TPH" class="img-fluid">
        </a>
      </div>
      <div class="col-md-4 element-animate">
        <a href="{{ url('/projects/hauling-pelabuhan') }}" class="link-thumbnail">
          <h3>Hauling ke Pelabuhan</h3>
          <span class="ion-plus icon"></span>
          <img src="{{ asset('assets/images/industrial_img_3.jpg') }}" alt="Hauling" class="img-fluid">
        </a>
      </div>
      <div class="col-md-4 element-animate">
        <a href="{{ url('/projects/stockpile-management') }}" class="link-thumbnail">
          <h3>Manajemen Stockpile</h3>
          <span class="ion-plus icon"></span>
          <img src="{{ asset('assets/images/industrial_img_4.jpg') }}" alt="Stockpile" class="img-fluid">
        </a>
      </div>
      <div class="col-md-4 element-animate">
        <a href="{{ url('/projects/qc-kadar-fe') }}" class="link-thumbnail">
          <h3>QC Kadar Fe &amp; Sampling</h3>
          <span class="ion-plus icon"></span>
          <img src="{{ asset('assets/images/industrial_img_5.jpg') }}" alt="QC Fe" class="img-fluid">
        </a>
      </div>
      <div class="col-md-4 element-animate">
        <a href="{{ url('/projects/pemuatan-kapal') }}" class="link-thumbnail">
          <h3>Pemuatan Kapal</h3>
          <span class="ion-plus icon"></span>
          <img src="{{ asset('assets/images/industrial_img_6.jpg') }}" alt="Loading Vessel" class="img-fluid">
        </a>
      </div>
    </div>
  </div>
</section>

@endsection

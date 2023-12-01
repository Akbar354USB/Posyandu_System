@extends('backend.master')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin"> 
          <div class="row">
              <div class="col-12 col-xl-8 mb-2 mb-xl-0">
                <h3 class="font-weight-bold">Welcome {{auth()->user()->name}}</h3>
                <h5 class="font-weight-bold text-primary">Posyandu Sahabat Masyarakat</h5>
              </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card tale-bg">
            <div class="card-people mt-auto">
              <img src="{{ asset('backend/images//dashboard.png') }}" alt="people" style="height: 400px">
              <div class="weather-info">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 grid-margin transparent">
          <div class="row">
            <div class="col-md-6 mb-4 stretch-card transparent">
              <div class="card card-tale">
                <div class="card-body">
                  <p class="mb-4">Total Balita</p>
                  <p class="fs-30 mb-2">{{ $balita->count() }}</p>
                  <p>Se- Desa Renggeang</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-4 stretch-card transparent">
              <div class="card card-dark-blue">
                <div class="card-body">
                  <p class="mb-4">Total Pasangan KB</p>
                  <p class="fs-30 mb-2">{{ $kb->count() }}</p>
                  <p>Se- Desa Renggeang</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
              <div class="card card-light-blue">
                <div class="card-body">
                  <p class="mb-4">Total Ibu Hamil</p>
                  <p class="fs-30 mb-2">{{ $hamil->count() }}</p>
                  <p>Se- Desa Renggeang</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 stretch-card transparent">
              <div class="card card-light-danger">
                <div class="card-body">
                  <p class="mb-4">Total Pasangan Usia Subur (PUS)</p>
                  <p class="fs-30 mb-2">{{ $pus->count() }}</p>
                  <p>Se- Desa Renggeang</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection
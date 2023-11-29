@extends('backend.master')

@section('content')
  <div class="col-md-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <img src="{{ asset('laporan/'.$report->photo ) }}" alt="" style="width: 600px">
          </div>
          <div class="col-md-6">
              <div class="mt-4 mb-2 text-primary">
              <h2>{{ $report->name }}</h2>
              </div>
              <div>
              <p>{{ $report->note }}</p>
              </div>
          </div>
        </div>
        <div class="mt-2">
          <p class="card-description">
            Di unggah pada tanggal {{ $report->created_at }}
          </p>
        </div> 
      </div>
    </div>
  </div>
@endsection



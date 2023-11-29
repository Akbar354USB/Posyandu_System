@extends('backend.master')

@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card position-relative">
      <div class="card-body">
        <p>{{ $report->note }}</p>
    </div>
  </div>
@endsection

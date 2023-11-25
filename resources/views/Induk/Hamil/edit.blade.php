@extends('backend.master')

@section('content')
<div class="card">
    <div class="card-body">
      <h3 class="text-center mb-3">EDIT DATA PESERTA KB</h3>
      <form class="forms-sample" action="{{ route('pregnant-update', $pregnant->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label>NAMA IBU HAMIL</label>
          <input type="text" class="form-control" name="name" value="{{ $pregnant->name }}">
        </div>
        <div class="form-group">
          <label >NIK</label>
          <input type="text" class="form-control" name="nik" value="{{ $pregnant->nik }}">
        </div>
        <div class="form-group">
          <label>USIA KEHAMILAN</label>
          <input type="text" class="form-control" name="usia" value="{{ $pregnant->usia }}">
        </div>
        <div class="form-group">
            <label>TANGGAL LAHIR</label>
            <input type="text" class="form-control" name="birth" value="{{ $pregnant->birth }}">
        </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
      </form>
    </div>
  </div>
@endsection
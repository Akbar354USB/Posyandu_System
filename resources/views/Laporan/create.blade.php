@extends('backend.master')

@section('content')
<div class="card">
    <div class="card-body">
      <h3 class="text-center mb-3">TAMBAH DATA KEGIATAN</h3>
      <form class="forms-sample" action="{{ route('report-store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label>NAMA KEGIATAN</label>
          <input type="text" class="form-control" name="name">
          @error('name')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group">
          <label>FOTO KEGIATAN</label>
          <input type="file" class="form-control" name="photo">
          @error('photo')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group">
          <label>KETERANGAN</label>
          <input type="text" class="form-control" name="note">
          @error('note')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
      </form>
    </div>
  </div>
@endsection
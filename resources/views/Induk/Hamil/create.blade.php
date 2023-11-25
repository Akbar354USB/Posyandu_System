@extends('backend.master')

@section('content')
<div class="card">
    <div class="card-body">
      <h3 class="text-center mb-5">TAMBAH DATA IBU HAMIL</h3>
      <form class="forms-sample" action="{{ route('pregnant-store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label>NAMA IBU HAMIL</label>
          <input type="text" class="form-control" name="name">
          @error('name')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group">
          <label >NIK</label>
          <input type="text" class="form-control" name="nik">
          @error('nik')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group">
          <label>USIA</label>
          <input type="text" class="form-control" name="usia">
          @error('usia')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group">
            <label>TANGGAL LAHIR</label>
            <input type="date" class="form-control" name="birth">
            @error('birth')
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
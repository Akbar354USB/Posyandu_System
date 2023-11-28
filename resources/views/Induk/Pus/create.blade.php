@extends('backend.master')

@section('content')
<div class="card">
    <div class="card-body">
      <h3 class="text-center mb-3">TAMBAH DATA PASANGAN USIA SUBUR</h3>
      <form class="forms-sample" action="{{ route('fertile-store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label>NAMA SUAMI</label>
          <input type="text" class="form-control" name="name_husband">
          @error('name_husband')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group">
          <label>NAMA ISTRI</label>
          <input type="text" class="form-control" name="name_wife">
          @error('name_wife')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group">
          <label>ALAMAT</label>
          <input type="text" class="form-control" name="adress">
          @error('adress')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group">
          <label >TELPON</label>
          <input type="text" class="form-control" name="telpon">
          @error('telpon')
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
@extends('backend.master')

@section('content')
<div class="card">
    <div class="card-body">
      <h3 class="text-center mb-3">TAMBAH DATA POSYANDU</h3>
      <form class="forms-sample" action="{{ route('posyandu-store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label>NAMA</label>
          <input type="text" class="form-control" name="name">
          @error('name')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group">
          <label >ALAMAT</label>
          <input type="text" class="form-control" name="adress">
          @error('adress')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group">
          <label>TELPON</label>
          <input type="text" class="form-control" name="telpon">
          @error('telpon')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group">
            <label>DUSUN</label>
            <input type="text" class="form-control" name="village">
            @error('village')
            <span class="text-danger">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
@endsection
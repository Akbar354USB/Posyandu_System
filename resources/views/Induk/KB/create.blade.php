@extends('backend.master')

@section('content')
<div class="card">
    <div class="card-body">
      <h3 class="text-center mb-3">TAMBAH DATA PESERTA KB</h3>
      <form class="forms-sample" action="{{ route('kb-store') }}" method="POST">
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
          <label >JENIS KONTRASEPSI</label>
          <input type="text" class="form-control" name="contraception">
          @error('contraception')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group">
          <label>TANGGAL PAKAI</label>
          <input type="date" class="form-control" name="installed">
          @error('installed')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group">
          <label>TANGGAL LEPAS</label>
          <input type="date" class="form-control" name="uninstal">
          @error('uninstal')
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
@extends('backend.master')

@section('content')
<div class="card">
    <div class="card-body">
      <h3 class="text-center mb-3">TAMBAH DATA BALITA</h3>
      <form class="forms-sample" action="{{ route('toddler-store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label>NIK</label>
          <input type="text" class="form-control" name="nik">
          @error('nik')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group">
          <label >NAMA</label>
          <input type="text" class="form-control" name="name">
          @error('name')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group">
          <label>TANGGAL LAHIR</label>
          <input type="text" class="form-control" name="date_birth">
          @error('date_birth')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group">
            <select name="gender" class="form-control">
              <option label="Pilih Jenis Kelamin"></option>
              <option value="LAKI-LAKI">LAKI-LAKI</option>
              <option value="PEREMPUAN">PEREMPUAN</option>
            </select>
          @error('gender')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
          </div>
          <div class="form-group">
            <label>NAMA IBU</label>
            <input type="text" class="form-control" name="name_mom">
            @error('name_mom')
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
            <select class="form-control" name="posyandu_id">
              <option label="Pilih Tempat Posyandu"></option>
              @foreach ($posyandu as $item)
              <option value="{{ $item->id }}">{{ $item->nama }}</option>
              @endforeach
            </select>
            @error('posyandu_id')
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
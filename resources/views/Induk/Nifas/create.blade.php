@extends('backend.master')

@section('content')
<div class="card">
    <div class="card-body">
      <h3 class="text-center mb-3">TAMBAH DATA IBU NIFAS</h3>
      <form class="forms-sample" action="{{ route('postpartum-store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label>NAMA IBU NIFAS</label>
          <input type="text" class="form-control" name="name">
          @error('name')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
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
          <label>TANGGAL LAHIR</label>
          <input type="date" class="form-control" name="birth">
          @error('birth')
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
        <div class="form-group">
          <label>TANGGAL MELAHIRKAN</label>
          <input type="date" class="form-control" name="born">
          @error('born')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group">
            <select name="status" class="form-control">
              <option label="Pilih Status Menyusui"></option>
              <option value="EXCLUSIF">EXCLUSIF</option>
              <option value="NON EXCLUSIF">NON EXCLUSIF</option>
            </select>
          @error('status')
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
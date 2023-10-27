@extends('backend.master')

@section('content')
<div class="card">
    <div class="card-body">
      <h3 class="text-center mb-3">TAMBAH DATA PESERTA KB</h3>
      <form class="forms-sample">
        <div class="form-group">
          <label>NAMA</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
          <label >JENIS KONTRASEPSI</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
          <label>TANGGAL PAKAI</label>
          <input type="text" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
@endsection
@extends('backend.master')

@section('content')
<div class="card">
    <div class="card-body">
      <h3 class="text-center mb-3">TAMBAH DATA POSYANDU</h3>
      <form class="forms-sample">
        <div class="form-group">
          <label>NAMA</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
          <label >ALAMAT</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
          <label>TELPON</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>DUSUN</label>
            <input type="text" class="form-control">
          </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
@endsection
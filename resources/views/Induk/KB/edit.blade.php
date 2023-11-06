@extends('backend.master')

@section('content')
<div class="card">
    <div class="card-body">
      <h3 class="text-center mb-3">EDIT DATA PESERTA KB</h3>
      <form class="forms-sample" action="{{ route('kb-update', $kb->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label>NAMA SUAMI</label>
          <input type="text" class="form-control" name="name_husband" value="{{ $kb->name_husband }}">
        </div>
        <div class="form-group">
          <label >NAMA ISTRI</label>
          <input type="text" class="form-control" name="name_wife" value="{{ $kb->name_wife }}">
        </div>
        <div class="form-group">
          <label>ALAMAT</label>
          <input type="text" class="form-control" name="adress" value="{{ $kb->adress }}">
        </div>
        <div class="form-group">
            <label>JENIS KONTRASEPSI</label>
            <input type="text" class="form-control" name="contraception" value="{{ $kb->contraception }}">
        </div>
        <div class="form-group">
            <label>TANGGAL PAKAI</label>
            <input type="date" class="form-control" name="installed" value="{{ $kb->installed }}">
        </div>
        <div class="form-group">
            <label>TANGGAL LEPAS</label>
            <input type="date" class="form-control" name="uninstal" value="{{ $kb->uninstal }}">
        </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
      </form>
    </div>
  </div>
@endsection
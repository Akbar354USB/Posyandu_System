@extends('backend.master')

@section('content')
<div class="card">
    <div class="card-body">
      <h3 class="text-center mb-3">EDIT DATA BALITA</h3>
      <form class="forms-sample" action="{{ route('toddler-update', $toddler->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label>NIK</label>
          <input type="text" class="form-control" name="nik" value="{{ $toddler->nik }}">
        </div>
        <div class="form-group">
          <label >NAMA</label>
          <input type="text" class="form-control" name="name" value="{{ $toddler->name }}">
        </div>
        <div class="form-group">
          <label>ALAMAT</label>
          <input type="text" class="form-control" name="adress" value="{{ $toddler->adress }}">
        </div>
        <div class="form-group">
            <label>TANGGAL LAHIR</label>
            <input type="text" class="form-control" name="date_birth" value="{{ $toddler->date_birth}}">
        </div>
        <div class="form-group">
            <label>JENIS KELAMIN</label>
            <input type="text" class="form-control" name="gender" value="{{ $toddler->gender }}">
        </div>
        <div class="form-group">
            <label>NAMA IBU</label>
            <input type="text" class="form-control" name="name_mom" value="{{ $toddler->name_mom }}">
        </div>
        <div class="form-group">
            <select class="form-control" name="posyandu_id">
                <option label="Pilih Tempat Posyandu"></option>
                @foreach ($posyandu as $item)
                <option @if($toddler->posyandu_id == $item->id) selected @endif value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
              </select>
          </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
      </form>
    </div>
  </div>
@endsection
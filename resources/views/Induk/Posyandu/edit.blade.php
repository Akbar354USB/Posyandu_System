@extends('backend.master')

@section('content')
<div class="card">
    <div class="card-body">
      <h3 class="text-center mb-3">EDIT DATA POSYANDU</h3>
      <form class="forms-sample" action="{{ route('posyandu-update', $posyandu->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label>NAMA</label>
          <input type="text" class="form-control" name="name" value="{{ $posyandu->name }}">
        </div>
        <div class="form-group">
          <label >ALAMAT</label>
          <input type="text" class="form-control" name="adress" value="{{ $posyandu->adress }}">
        </div>
        <div class="form-group">
          <label>TELPON</label>
          <input type="text" class="form-control" name="telpon" value="{{ $posyandu->telpon }}">
        </div>
        <div class="form-group">
            <label>DUSUN</label>
            <input type="text" class="form-control" name="village" value="{{ $posyandu->village }}">
          </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        {{-- <a href="{{ route('posyandu-index') }}"><button class="btn btn-light">Cancel</button></a> --}}
      </form>
    </div>
  </div>
@endsection
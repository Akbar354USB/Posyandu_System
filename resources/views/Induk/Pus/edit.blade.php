@extends('backend.master')

@section('content')
<div class="card">
    <div class="card-body">
      <h3 class="text-center mb-3">EDIT DATA PUS</h3>
      <form class="forms-sample" action="{{ route('fertile-update', $fertile->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label>NAMA SUAMI</label>
          <input type="text" class="form-control" name="name_husband" value="{{ $fertile->name_husband }}">
        </div>
        <div class="form-group">
          <label >NAMA ISTRI</label>
          <input type="text" class="form-control" name="name_wife" value="{{ $fertile->name_wife }}">
        </div>
        <div class="form-group">
          <label>ALAMAT</label>
          <input type="text" class="form-control" name="adress" value="{{ $fertile->adress }}">
        </div>
        <div class="form-group">
            <label>TELPON</label>
            <input type="text" class="form-control" name="telpon" value="{{ $fertile->telpon }}">
        </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
      </form>
    </div>
  </div>
@endsection
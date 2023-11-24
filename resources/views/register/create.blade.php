@extends('backend.master')

@section('content')
<div class="card">
    <div class="card-body">
      <h3 class="text-center mb-5">REGISTRASI</h3>
      <form class="forms-sample" action="{{ route('service-store') }}" method="POST">
        @csrf
        <div class="form-group">
            <select class="form-control" name="toddler_id">
              <option label="PILIH NAMA BAYI"></option>
              @foreach ($toddler as $item)
              <option value="{{ $item->id }}">{{ $item->name }}</option>
              @endforeach
            </select>
            @error('toddler_id')
            <span class="text-danger">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        <div class="form-group">
          <label>TINGGI BADAN (cm)</label>
          <input type="text" class="form-control" name="height">
          @error('height')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group">
          <label >BERAT BADAN (cm)</label>
          <input type="text" class="form-control" name="weight">
          @error('weight')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group">
          <label>LINGKAR KEPALA (cm)</label>
          <input type="text" class="form-control" name="lk">
          @error('lk')
          <span class="text-danger">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="form-group">
            <label>LINGKAR LENGAN (cm)</label>
            <input type="text" class="form-control" name="ll">
            @error('ll')
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
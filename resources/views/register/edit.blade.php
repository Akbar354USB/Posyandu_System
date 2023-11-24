@extends('backend.master')

@section('content')
<div class="card">
    <div class="card-body">
      <h3 class="text-center mb-3">EDIT DATA PELAYANAN</h3>
      <form class="forms-sample" action="{{ route('service-update', $service->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <select class="form-control" name="toddler_id">
                <option label="Pilih Nama BAyi"></option>
                @foreach ($toddler as $item)
                <option @if($service->toddler_id == $item->id) selected @endif value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>TINGGI BADAN</label>
            <input type="text" class="form-control" name="height" value="{{ $service->height }}">
        </div>
        <div class="form-group">
            <label >BERAT BADAN</label>
            <input type="text" class="form-control" name="weight" value="{{ $service->weight }}">
        </div>
        <div class="form-group">
            <label>LINGKAR KEPALA</label>
            <input type="text" class="form-control" name="lk" value="{{ $service->lk }}">
        </div>
        <div class="form-group">
            <label>LINGKAR LENGAN</label>
            <input type="text" class="form-control" name="ll" value="{{ $service->ll}}">
        </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
      </form>
    </div>
  </div>
@endsection
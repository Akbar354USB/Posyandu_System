@extends('backend.master')

@section('content')
<div class="card">
    <div class="card-body">
      <h3 class="text-center mb-3">EDIT DATA IBU NIFAS</h3>
      <form class="forms-sample" action="{{ route('postpartum-update', $postpartum->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>NAMA IBU NIFAS</label>
            <input type="text" class="form-control" name="name" value="{{ $postpartum->name }}">
        </div>
        <div class="form-group">
            <label >NIK</label>
            <input type="text" class="form-control" name="nik" value="{{ $postpartum->nik }}">
        </div>
        <div class="form-group">
            <label>TANGGAL LAHIR</label>
            <input type="text" class="form-control" name="birth" value="{{ $postpartum->birth }}">
        </div>
        <div class="form-group">
            <label>TELPON</label>
            <input type="text" class="form-control" name="telpon" value="{{ $postpartum->telpon }}">
        </div>
        <div class="form-group">
            <label>TANGGAL MELAHIRKAN</label>
            <input type="date" class="form-control" name="born" value="{{ $postpartum->born }}">
        </div>
        <div class="form-group">
            <label>STATUS MENYUSUI</label>
            <select name="status" class="form-control" value="{{ $postpartum->status }}">
                <option value="EXCLUSIF">EXCLUSIF</option>
                <option value="NON EXCLUSIF">NON EXCLUSIF</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
    </form>
    </div>
</div>
@endsection
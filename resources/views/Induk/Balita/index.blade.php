@extends('backend.master')

@section('content')

<div class="card">
    <div class="card-body">
        <h3 class="text-center mb-3">DAFTAR BALITA</h3>
        <a href="{{ route('todller-create') }}"><button type="button" class="btn btn-primary btn-rounded btn-fw mb-2">+ data balita</button></a>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th class="text-center">NO</th>
                <th class="text-center">NIK</th>
                <th class="text-center">NAMA</th>
                <th class="text-center">ALAMAT</th>
                <th class="text-center">TANGGAL LAHIR</th>
                <th class="text-center">JENIS KELAMIN</th>
                <th class="text-center">NAMA IBU</th>
                <th class="text-center">TEMPAT POSYANDU</th>
                <TH class="text-center">AKSI</TH>
              </tr>
            </thead>
            <tbody>
              @foreach ($todller as $key => $item)
              <tr>
                <td align="center">{{ $key + 1 }}</td>
                <td align="center">{{ $item->nik }}</td>
                <td align="center">{{ $item->name }}</td>
                <td align="center">{{ $item->adress }}</td>
                <td align="center">{{ $item->date_birth }}</td>
                <td align="center">{{ $item->gender }}</td>
                <td align="center">{{ $item->name_mom }}</td>
                <td align="center">{{ $item->posyandu->name }}</td>
                <td align="center"></td>
              </tr> 
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
  </div>

@endsection
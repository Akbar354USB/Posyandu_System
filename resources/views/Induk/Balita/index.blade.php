@extends('backend.master')

@section('content')

<div class="card">
    <div class="card-body">
        <h3 class="text-center mb-3">DAFTAR BALITA</h3>
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
                <TH class="text-center">AKSI</TH>
              </tr>
            </thead>
            <tbody>
              @foreach ($collection as $item)
              <tr>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
                <td align="center"></td>
              </tr> 
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
  </div>

@endsection
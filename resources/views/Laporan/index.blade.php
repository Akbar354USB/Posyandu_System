@extends('backend.master')

  @section('content')

  <div class="card">
    <div class="card-body">
        <h3 class="text-center mb-3">DAFTAR LAPORAN KEGIATAN</h3>
        <a href="{{ route('report-create') }}"><button type="button" class="btn btn-primary btn-rounded btn-fw mb-4">+ kegiatan</button></a>
        <div class="table-responsive">
          <table style="width: 100%">
            <thead>
              <tr>
                <th class="text-center">NO</th>
                <th class="text-center">NAMA KEGIATAN</th>
                <th class="text-center">FOTO KEGIATAN</th>
                <th class="text-center">KETERANGAN</th>
                <TH class="text-center">AKSI</TH>
              </tr>
            </thead>
            <tbody>
              @foreach ($report as $key => $item)
              <tr style="height: 200px">
                <td align="center">{{ $key + 1 }}</td>
                <td align="center" style="width: 300px">{{ $item->name}}</td>
                <td align="center">
                    <img src="{{ asset('laporan/'.$item->photo ) }}" alt="" style="width: 200px">
                </td>
                <td align="center" style="width: 500px">{{ $item->note }}</td>
                <td align="center">
                  <a class="btn btn-inverse-info" href="{{ route('report-view', $item->id) }}" ><i class="ti-pencil"></i></a>
                    <form action="" method="post" style="display: inline" class="form-check-inline">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-inverse-danger" type="submit"><i class="ti-trash"></i></button>
                    </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
  </div>
  
  @endsection
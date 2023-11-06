@extends('backend.master')

  @section('content')

  <div class="card">
    <div class="card-body">
        <h3 class="text-center mb-3">DAFTAR PESERTA KB</h3>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th class="text-center">NO</th>
                <th class="text-center">NAMA SUAMI</th>
                <th class="text-center">NAMA ISTRI</th>
                <th class="text-center">ALAMAT</th>
                <th class="text-center">JENIS KONTRASEPSI</th>
                <th class="text-center">TANGGAL PAKAI</th>
                <th class="text-center">TANGGAL LEPAS</th>
                <TH class="text-center">AKSI</TH>
              </tr>
            </thead>
            <tbody>
              @foreach ($kb as $key => $item)
              <tr>
                <td align="center">{{ $key + 1 }}</td>
                <td align="center">{{ $item->name_husband }}</td>
                <td align="center">{{ $item->name_wife }}</td>
                <td align="center">{{ $item->adress }}</td>
                <td align="center">{{ $item->contraception }}</td>
                <td align="center">{{ $item->installed }}</td>
                <td align="center">{{ $item->uninstal }}</td>
                <td>
                  <a class="btn btn-inverse-info" href="{{ route('kb-edit', $item->id) }}" ><i class="ti-pencil"></i></a>
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
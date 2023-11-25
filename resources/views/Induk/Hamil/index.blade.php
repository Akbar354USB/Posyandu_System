@extends('backend.master')

  @section('content')

  <div class="card">
    <div class="card-body">
        <h3 class="text-center mb-3">DAFTAR IBU HAMIL</h3>
        <a href="{{ route('pregnant-create') }}"><button type="button" class="btn btn-primary btn-rounded btn-fw mb-2">+ data ibu hamil</button></a>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th class="text-center">NO</th>
                <th class="text-center">NAMA</th>
                <th class="text-center">NIK</th>
                <th class="text-center">USIA KEHAMILAN</th>
                <th class="text-center">TTL</th>
                <TH class="text-center">AKSI</TH>
              </tr>
            </thead>
            <tbody>
              @foreach ($pregnant as $key => $item)
              <tr>
                <td align="center">{{ $key + 1 }}</td>
                <td align="center">{{ $item->name }}</td>
                <td align="center">{{ $item->nik }}</td>
                <td align="center">{{ $item->usia }}</td>
                <td align="center">{{ $item->birth }}</td>
                <td align="center">
                  <a class="btn btn-inverse-info" href="{{ route('pregnant-edit', $item->id) }}" ><i class="ti-pencil"></i></a>
                    <form action="{{ route('pregnant-delete', $item->id) }}" method="post" style="display: inline" class="form-check-inline">
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
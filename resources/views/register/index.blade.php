@extends('backend.master')

@section('content')

<div class="card">
    <div class="card-body">
        <h3 class="text-center mb-3">DATA REGISTRASI</h3>
        <a href="{{ route('service-create') }}"><button type="button" class="btn btn-primary btn-rounded btn-fw mb-2">+ Registrasi</button></a>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th class="text-center">NO</th>
                <th class="text-center">NAMA BALITA</th>
                <th class="text-center">TTL</th>
                <th class="text-center">TB (cm)</th>
                <th class="text-center">BB (kg)</th>
                <th class="text-center">LK (cm)</th>
                <th class="text-center">LL (cm)</th>
                <TH class="text-center">AKSI</TH>
              </tr>
            </thead>
            <tbody>
              @foreach ($service as $key => $item)
              <tr>
                <td align="center">{{ $key + 1 }}</td>
                <td align="center">{{ $item->toddler->name }}</td>
                <td align="center">{{ $item->toddler->date_birth }}</td>
                <td align="center">{{ $item->height }}</td>
                <td align="center">{{ $item->weight }}</td>
                <td align="center">{{ $item->lk }}</td>
                <td align="center">{{ $item->ll }}</td>
                <td align="center">
                  <a class="btn btn-inverse-info" href="{{ route('service-edit', $item->id) }}" ><i class="ti-pencil"></i></a>
                    <form action="{{ route('service-delete', $item->id) }}" method="post" style="display: inline" class="form-check-inline">
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

  {{-- tag menambahkan pagination --}}
<div class="mt-3 float-left">
  {{ $service->links() }}
</div>

@endsection
@extends('backend.master')

@section('content')

<div class="card">
    <div class="card-body">
        <h3 class="text-center mb-3">DAFTAR BALITA</h3>
        <a href="{{ route('todller-create') }}"><button type="button" class="btn btn-primary btn-rounded btn-fw mb-2">+ data balita</button></a>
        <a href="{{ route('toddler-pdf') }}"><button type="button" class="btn btn-outline-success btn-icon-text">
          PDF
          <i class="ti-printer btn-icon-append"></i>                                                                              
        </button></a>
        
        {{-- form search --}}
        <div class="float-right">
          <form class="navbar-search form-inline">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-1 small" placeholder="Search for..."
                    aria-label="Search"  value="" name="">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">
                        <i class="ti-search"></i>
                    </button>
                </div>
            </div>
            </form>
        </div>
        
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
                <td align="center">
                  <a class="btn btn-inverse-info" href="{{ route('toddler-edit', $item->id) }}" ><i class="ti-pencil"></i></a>
                    <form action="{{ route('toddler-delete', $item->id) }}" method="post" style="display: inline" class="form-check-inline">
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
  {{ $todller->links() }}
</div>

@endsection
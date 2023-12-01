@extends('backend.master')

  @section('content')

  <div class="card">
    <div class="card-body">
        <h3 class="text-center mb-3">DAFTAR PESERTA KB</h3>
        <a href="{{ route('add-user') }}"><button type="button" class="btn btn-primary btn-rounded btn-fw mb-2">+ data USer</button></a>
        
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
                <th class="text-center">USERNAME</th>
                <th class="text-center">EMAIL</th>
                <th class="text-center">ROLE</th>
                <TH class="text-center">AKSI</TH>
              </tr>
            </thead>
            <tbody>
              @foreach ($user as $key => $item)
              <tr>
                <td align="center">{{ $key + 1 }}</td>
                <td align="center">{{ $item->name }}</td>
                <td align="center">{{ $item->email }}</td>
                <td align="center">{{ $item->role }}</td>
                <td>
                  {{-- <a class="btn btn-inverse-info" href="{{ route('kb-edit', $item->id) }}" ><i class="ti-pencil"></i></a> --}}
                    <form action="{{ route('user-delete', $item->id) }}" method="post" style="display: inline" class="form-check-inline">
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
  {{ $user->links() }}
</div>

  @endsection
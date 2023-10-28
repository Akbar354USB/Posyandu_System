@extends('backend.master')

  @section('content')

  <div class="card">
    <div class="card-body">
        <h3 class="text-center mb-1 mt-2">DAFTAR POSYANDU</h3>
        <a href="{{ route('posyandu-create') }}"><button type="button" class="btn btn-primary btn-rounded btn-fw">+ data posyandu</button></a>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th class="text-center">
                  NO
                </th>
                <th class="text-center">
                  NAMA
                </th>
                <th class="text-center">
                  ALAMAT
                </th>
                <th class="text-center">
                  TELPON
                </th>
                <th class="text-center">
                DUSUN
                </th>
                <th class="text-center">
                AKSI
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td align="center">
                  tes
                </td>
                <td align="center">
                  tes
                </td>
                <td align="center">
                    TES
                  </div>
                </td>
                <td align="center">
                  tes
                </td>
                <td align="center">
                tes
                </td>
                <td align="center">
                    {{-- <button type="button" class="btn btn-inverse-info btn-icon">
                        <i class="ti-pencil"></i>
                      </button> --}}
                    <a class="btn btn-inverse-info" href="" ><i class="ti-pencil"></i></a>
                    <form action="" method="post" style="display: inline" class="form-check-inline">
                        <button class="btn btn-inverse-danger" type="submit"><i class="ti-trash"></i></button>
                    </form>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
  </div>
  
  @endsection
@extends('backend.master')

@section('content')
<div class="card">
    <div class="card-body">
      <h3 class="text-center mb-3">TAMBAH USER</h3>
      <form class="forms-sample" action="{{ route('user-store') }}" method="POST" >
        @csrf
        <div class="form-group">
          <label>USERNAME</label>
          <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
          <label>EMAIL</label>
          <input type="text" class="form-control" name="email">
        </div>
        <div class="form-group">
          <label>PASSWORD</label>
          <input type="text" class="form-control" name="password">
        </div>

        <div class="row">
                <label class="col">ROLE</label>
                <div class="col">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="role"  value="SuperUser" checked="">
                      SUPER USER
                    <i class="input-helper"></i></label>
                  </div>
                </div>
                <div class="col">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="role"  value="Admin">
                      ADMIN
                    <i class="input-helper"></i></label>
                  </div>
                </div>
                <div class="col">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="role"  value="User">
                        USER
                      <i class="input-helper"></i></label>
                    </div>
                  </div>
          </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
      </form>
    </div>
  </div>
@endsection
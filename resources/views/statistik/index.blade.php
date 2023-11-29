@extends('backend.master')
@section('jschart')
    <script src="{{ $chart->cdn() }}"></script>

    {{ $chart->script() }}
@endsection

@section('content')
    {{-- <div class="container"></div>
        <div class="card">
            <div class="card-body">
                {!! $chart->container() !!}
            </div>
        </div>
    </div> --}}



    <div class="card">
        <div class="card-body">
            <div class="card-body">
                {!! $chart->container() !!}
            </div>
        </div>
    </div>
@endsection
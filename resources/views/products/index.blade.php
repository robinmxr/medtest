@extends('layouts.app')

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Products </h1>
        @foreach($pv as $p)
        {{ $p }}
@endforeach
    </div>


@endsection

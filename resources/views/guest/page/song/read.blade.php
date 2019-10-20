@extends('guest.layout._general')

@section('title', 'Song')

@section('page')

    <div class="container">
        <h2 class="text-dark">{{ $data->name }}</h2>
        <h6 class="text-dark">{{ $data->album->artist['name'] }} - {{ $data->album['name'] }}</h6> <br>

        <div class="col-md-12 row justify-content-center text-center text-dark rounded">
            <div class="col-md-6">
                <p class="">{{ $data->lyrics }}</p>
            </div>
        </div>
    </div>

@endsection

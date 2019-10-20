@extends('guest.layout._general')

@section('title', 'Genre')

@section('page')

<div class="container">

    <div class="container">
        <div class="row justify-content-center">

            @foreach ($data as $genre)

                <div class="col-12 col-sm-6 col-md-3 m-4">
                    <div class="card m-1 alert-primary">
                        <a 
                        href="{{ route('genre.read', ['id' => str_pad($genre->id, 12, '0', STR_PAD_LEFT)]) }}" 
                        class="btn btn-primary shadow rounded-0"
                        >
                            {{ $genre->name }}
                        </a>
                    </div>
                </div>
                
            @endforeach
            
        </div>
    </div>

</div>

@endsection
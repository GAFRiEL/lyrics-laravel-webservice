@extends('guest.layout._general')

@section('title', 'Artist')

@section('page')

<div class="container">

    <h1>Artist List</h1>
    
    <div class="row justify-content-center">

        @if(count($data) > 0)
            @foreach ($data as $artist)
                
                <div class="col-12 col-sm-6 col-md-3 m-4">
                    <div class="card m-1 alert-primary">
                        <div class="card-body">
                            <div class="description text-center">
                                <h5 class="font-weight-bold">
                                    {{ $artist->name }}
                                </h5>
                            </div>
                        </div>
                        <a 
                        href="{{ route('artist.read', ['id' => str_pad($artist->id, 12, '0', STR_PAD_LEFT)]) }}" 
                        class="btn btn-primary shadow rounded-0">

                            Lihat
                        </a>
                    </div>
                </div>
            
            @endforeach
        @else
            <h2>Artist Belum Ada</h2>
        @endif
    </div>

</div>


@endsection
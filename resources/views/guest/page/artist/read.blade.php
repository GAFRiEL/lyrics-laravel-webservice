@extends('guest.layout._general')

@section('title', 'Artist')

@section('page')

    <div class="container">

        <h2 class="text-dark">{{ $data->name }}</h2>
        
        <h3>Album - Songs</h3> <br> 

            
            @foreach ($data->album as $album)

                <div id="accordion" role="tablist">
                    <div class="card">
                        <div class="card-header" role="tab" id="headingOne">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#{{ $album->name }}" aria-expanded="true" aria-controls="{{ $album->name }}">
                                    {{ $album->name }}
                                </a>
                            </h5>
                        </div>
                    </div>

                    @if (count($album->song) > 0)

                        @foreach ($album->song as $title)
                    
                        <div id="{{ $album->name }}" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                <div class="card-body">
                                    <a 
                                    href="{{ route('song.read', ['id' => str_pad($title->id, 12, '0', STR_PAD_LEFT)]) }}"
                                    >
                                        {{ $title->name }}
                                    </a>
                                </div>
                            </div>
                            
                        @endforeach
                        
                    @else

                        <div id="" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                            <div class="card-body">
                                Lagu Tidak Ada
                            </div>
                        </div>

                    @endif

                </div>

            @endforeach
        
    </div>

@endsection

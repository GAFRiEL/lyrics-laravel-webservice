@extends('guest.layout.general')

@section('title', 'Home')
    
@section('page')

<div id="app">
    <main class="py-4">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="row">
                        <div id="content" class="col-12">
                            <div class="card main-menu border-0 bg-transparent ">
                                <div class="card-body p-0">
                                    <div class="row menu-group">

                                        <a href="{{ route('artist.list') }}" class="text-decoration-none menu open text-center mt-4 col-sm-12 col-md-4">
                                            <div class="icon-block alert alert-primary" role="alert">
                                                <h1>Artist</h1>
                                                <hr>
                                                <div class="icon">
                                                    <p>Cari Lirik Berdasarkan Artist</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="{{ route('genre.list') }}" class="text-decoration-none menu open text-center mt-4 col-sm-12 col-md-4">
                                            <div class="icon-block alert alert-primary" role="alert">
                                                <h1>Genre</h1>
                                                <hr>
                                                <div class="icon">
                                                    <p>Cari Lirik Berdasarkan Genre</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="{{ route('song.list') }}" class="text-decoration-none menu open text-center mt-4 col-sm-12 col-md-4">
                                            <div class="icon-block alert alert-primary" role="alert">
                                                <h1>Lagu</h1>
                                                <hr>
                                                <div class="icon">
                                                    <p>Cari Lirik Berdasarkan Lagu</p>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <br>

            <h2 class="text-center">Top Tracks</h2> <br>
            
            <div class="row justify-content-center">
                <table class="table table-borderless table-hover col-md-8">
                    <tbody> 
                        
                        @foreach ($data as $song)
                            <tr>
                                <td class="text-right">
                                    <h3>
                                        <a class="text-dark" href="{{ route('song.read', ['id' => str_pad($song->id, 12, '0', STR_PAD_LEFT)]) }}">
                                            {{ $song->name }}    
                                        </a>
                                    </h3>
                                    <a class="text-primary" href="{{ route('genre.read', ['id' => str_pad($song->genre_id, 12, '0', STR_PAD_LEFT)]) }}">
                                        {{ $song->genre['name'] }}
                                    </a>
                                </td>
                                <td class="">
                                    <h3>
                                        <a class="text-dark" href="{{ route('artist.read', ['id' => str_pad($song->album->artist->id, 12, '0', STR_PAD_LEFT)]) }}">
                                        {{ $song->album->artist['name'] }}
                                        </a>
                                    </h3>
                                    <a class="text-primary" href="{{ route('artist.read', ['id' => str_pad($song->album->artist->id, 12, '0', STR_PAD_LEFT)]) }}">
                                        {{ $song->album['name'] }}
                                    </a>
                                </td>

                            </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>

@endsection
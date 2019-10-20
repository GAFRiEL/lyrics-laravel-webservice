@extends('guest.layout._general')

@section('title', 'Genre')

@section('page')

<div class="container">
    <h2 class="text-dark">{{ $data->name }}</h2>
    <h3>Songs</h3> <br>

    @if (count($data->song) > 0)
        
        <table class="table table-borderless">

            @foreach ($data->song as $song)
                <tr>
                    <td class="text-right">
                        <a 
                        href="{{ route('song.read', ['id' => str_pad($song->id, 12, '0', STR_PAD_LEFT)]) }}"
                        >
                            <h4>{{ $song->name }}</h4>
                        </a>
                    </td>
                    <td><h4>-</h4></td>
                    <td class="text-left">
                        <a href="{{ route('artist.read', ['id' => str_pad($song->album->artist->id, 12, '0', STR_PAD_LEFT)]) }}">
                            <h4>{{ $song->album->artist['name'] }}</h4>
                        </a>
                    </td>
                </tr>
            @endforeach

        </table>
        
    @else

        <h3>Lagu tidak ada</h3> <br>
        
    @endif
</div>
    
@endsection

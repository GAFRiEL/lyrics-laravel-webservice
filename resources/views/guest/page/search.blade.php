@extends('guest.layout._general')

@section('title', 'Seach')

@section('page')

<div class="container">
    
    @if (count($data) > 0)
        
        <h1>Searching for "{{ request()->input('search') }}" showing {{ $data->count() }} result(s)</h1>
    
        <table class="table table-borderless table-hover">
            <tbody> 
                
                @foreach ($data as $song)
                    <tr>
                        <td class="">
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
    
    @else

        <h1>There are no result for "{{ request()->input('search') }}"</h1>        
        
    @endif

</div>

@endsection
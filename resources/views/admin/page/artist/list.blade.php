@extends('admin.layouts.app')

@section('content')
    <div id="app">
        @include('admin.partials.header')

        <div class="container">
            <table class="table table-borderless table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $artist)
                        <tr>
                            <td>
                                <a href="{{ route('admin.artist.read', ['id' => str_pad($artist->id, 12, '0', STR_PAD_LEFT)]) }}">
                                    {{ $artist->name }}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @include('admin.partials.footer')        
    </div>
@endsection
@extends('admin.layouts.app')

@section('content')
    <div id="app">
        @include('admin.partials.header')

        <div class="container">

            <div class="jumbotron jumbotron-fluid">
                <div class="container row">
                    <div class="col-md-10"><h1>{{ $data->name }}</h1></div>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle"
                                type="button" id="dropdownMenu1" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                            Action
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item" href="{{ route('admin.genre.edit', ['id' => str_pad($data->id, 12, '0', STR_PAD_LEFT)]) }}">Edit</a>
                            <a class="dropdown-item" href="{{ route('admin.genre.delete', ['id' => str_pad($data->id, 12, '0', STR_PAD_LEFT)]) }}">Hapus</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        @include('admin.partials.footer')        
    </div>
@endsection
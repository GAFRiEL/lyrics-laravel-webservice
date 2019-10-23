@extends('admin.layouts.app')

@section('content')
    <div id="app">
        @include('admin.partials.header')

        <div class="container">

            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <form action="{{ route('admin.artist.edit') }}" method="post">
                        <h1>
                            <input type="text" value="{{ $data->name }}">
                        </h1>
                    </form>
                    <p class="lead">Change Artist Name.</p>
                    <p class="">Press Enter if you're done.</p>
                </div>
            </div>
            
        </div>

        @include('admin.partials.footer')        
    </div>
@endsection
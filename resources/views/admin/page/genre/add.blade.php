@extends('admin.layouts.app')

@section('content')
    <div id="app">
        @include('admin.partials.header')

        <div class="container">

            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <form 
                        method="post"
                        action="{{ route('admin.artist.create') }}"
                        >
                        @csrf

                        <div class="form-group">
                            <label for="name">Nama Artist</label>
                            <input
                                id="name"
                                type="text"
                                name="name"
                                class="form-control form-control-md col-md-5"
                                placeholder="Artist Name"
                                value="">
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Save">
                        </div>
                    </form>
                </div>
            </div>
            
        </div>

        @include('admin.partials.footer')        
    </div>
@endsection
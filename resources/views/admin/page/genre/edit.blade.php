@extends('admin.layouts.app')

@section('content')
    <div id="app">
        @include('admin.partials.header')

        <div class="container">

            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <form
                        id="save-genre"
                        class="form"
                        action="{{ route('admin.genre.update', ['id' => str_pad($data->id, 12, '0', STR_PAD_LEFT)]) }}"
                        method="post"
                        novalidate>
                        @csrf
                        <div class="form-group">
                            <label for="name">Genre</label>
                            <input 
                                id="name"
                                type="text"
                                name="name"
                                class="form-control form-control-md col-md-5"
                                placeholder="genre Name"
                                value="{{ old('name') ? old('name') : $data->name }}"
                                required>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Save">
                            <a href="{{ route('admin.genre.read', ['id' => str_pad($data->id, 12, '0', STR_PAD_LEFT)]) }}" class="btn btn-danger">Back</a>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>

        @include('admin.partials.footer')        
    </div>
@endsection
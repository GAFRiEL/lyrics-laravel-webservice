@extends('admin.layouts.general')

@section('page')
<!-- Begin Page Content -->
<div class="container-fluid">

    <h1>Add Album</h1>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <form 
        id="save-album"
        method="post" 
        action="{{ route('admin.song.update') }}"
        novalidate
        >
        @csrf
        <input type="hidden" value="{{ $data->id }}" name="id" id="id">
        {{-- input name --}}
        <div class="form-group row justify-content-center">
            <label class="col-sm-2 col-form-label">Album Name</label>
            <div class="col-sm-6">
                <input 
                    id="name"
                    type="text"
                    name="name"
                    class="form-control"
                    placeholder="Album Name"
                    value="{{ $data->name }}"
                >
            </div>
        </div>
        {{-- input album --}}
        <div class="form-group row justify-content-center">
            <label class="col-sm-2">Album</label>
            <div class="col-sm-6">
                <select 
                    id="album" 
                    class="custom-select"
                    name="album" 
                    >
                    <option selected disabled value="">Artist</option>

                    @foreach ($album as $album)

                        <option
                            value="{{ $album->id }}"
                            @if ($album->id == $data->album_id)
                                selected
                            @endif
                        >
                            {{ $album->name }}
                        </option>

                    @endforeach
                    
                </select>
            </div>
        </div>
        {{-- input genre --}}
        <div class="form-group row justify-content-center">
            <label class="col-sm-2">Genre</label>
            <div class="col-sm-6">
                <select 
                    id="genre" 
                    class="custom-select"
                    name="genre" 
                    >
                    <option selected disabled value="">Genre</option>

                    @foreach ($genre as $genre)

                        <option
                            value="{{ $genre->id }}"
                            @if ($genre->id == $data->genre_id)
                                selected
                            @endif
                        >
                            {{ $genre->name }}
                        </option>

                    @endforeach
                    
                </select>
            </div>
        </div>
        {{-- input lyrics --}}
        <div class="form-group row justify-content-center">
            <label class="col-sm-2 col-form-label">Lyrics</label>
            <div class="col-sm-6">
                <textarea name="lyrics" id="lyrics" cols="30" rows="20" class="form-control">{{ $data->lyrics }}</textarea>
            </div>
        </div>
        <div class="form-group row justify-content-center">
            <div class="col-sm-2">
                <button type="submit" class="btn btn-primary">save</button>
            </div>
            <div class="col-sm-6">
                <a href="{{ route('admin.song.list') }}" class="btn btn-warning">back</a>
            </div>
        </div>
    </form>

</div>
<!-- /.container-fluid -->
@endsection
@extends('admin.layouts.general')

@section('page')
<!-- Begin Page Content -->
<div class="container-fluid">

    <h1>Add Song</h1>
    <form 
        id="save-album"
        method="post" 
        action="{{ route('admin.song.create') }}"
        novalidate
        >
        @csrf
        {{-- input name --}}
        <div class="form-group row justify-content-center">
            <label class="col-sm-2 col-form-label">Song Title</label>
            <div class="col-sm-6">
                <input 
                    id="name"
                    type="text"
                    name="name"
                    class="form-control"
                    placeholder="Song Title"
                    value="{{ old('name') }}"
                >
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
                    <option selected disabled value="">Artist</option>

                    @foreach ($genre as $data)

                        <option value="{{ $data->id }}" {{ $data->id == old('artist') && $errors ? 'selected' : '' }}>{{ $data ->name }}</option>

                    @endforeach
                    
                </select>
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
                    <option selected disabled value="">Album</option>

                    @foreach ($album as $data)

                        <option value="{{ $data->id }}" {{ $data->id == old('artist') && $errors ? 'selected' : '' }}>{{ $data ->name }}</option>

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
            </div>
        </div>
    </form>

</div>
<!-- /.container-fluid -->
@endsection
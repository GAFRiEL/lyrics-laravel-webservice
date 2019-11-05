@extends('admin.layouts.general')

@section('page')
<!-- Begin Page Content -->
<div class="container-fluid">

    <h1>Add Album</h1>
    <form 
        id="save-album"
        method="post" 
        action="{{ route('admin.album.create') }}"
        novalidate
        >
        @csrf
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
                    value="{{ old('name') }}"
                >
            </div>
        </div>
        {{-- input artist --}}
        <div class="form-group row justify-content-center">
            <label class="col-sm-2">Artist</label>
            <div class="col-sm-6">
                <select 
                    id="artist" 
                    class="custom-select"
                    name="artist" 
                    >
                    <option selected disabled value="">Artist</option>

                    @foreach ($artist as $data)

                        <option value="{{ $data->id }}" {{ $data->id == old('artist') && $errors ? 'selected' : '' }}>{{ $data ->name }}</option>

                    @endforeach
                    
                </select>
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
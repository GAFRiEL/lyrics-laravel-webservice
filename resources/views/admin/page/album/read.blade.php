@extends('admin.layouts.general')

@section('page')
<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="jumbotron jumbotron-fluid row">
        <div class="container">
            <p class="display-3">{{ $data->name }}</p>
            <p class="display-5">Artist : {{ $data->artist->name }}</p>
        </div>
        <div class="dropdown no-arrow mb-4 mr-2">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Action
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                <a 
                href="{{ route('admin.album.edit', [
                    'date' => \Carbon\Carbon::parse($data->created_at)->format('dmYHis'),
                    'id' => str_pad($data->id, 12, '0', STR_PAD_LEFT),
                    'title' => $data->name
                    ]) }}" class="dropdown-item">
                    edit
                </a>
                <a href="{{ route('admin.album.list') }}" class="dropdown-item">back</a>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection
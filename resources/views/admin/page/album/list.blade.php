@extends('admin.layouts.general')

@section('page')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Album</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <a href="{{ route('admin.album.add') }}">
                <button class="btn btn-primary mb-3"><i class="fas fa-plus-circle"></i> Add</button>
            </a>
            <table class="table table-borderless" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="w-75">Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $album)
                        <tr>
                            <td><h4>{{ $album->name }}</h4></td>
                            <td>
                                <a 
                                href="{{ route('admin.album.read', [
                                    'date' => \Carbon\Carbon::parse($album->created_at)->format('dmYHis'),
                                    'id' => str_pad($album->id, 12, '0', STR_PAD_LEFT),
                                    'title' => $album->name
                                    ]) }}" class="btn btn-primary">
                                        <i class="fas fa-eye"></i>
                                </a>
                                <a 
                                href="{{ route('admin.album.edit', [
                                    'date' => \Carbon\Carbon::parse($album->created_at)->format('dmYHis'),
                                    'id' => str_pad($album->id, 12, '0', STR_PAD_LEFT),
                                    'title' => $album->name
                                    ]) }}" class="btn btn-success">
                                        <i class="fas fa-pen-square"></i>
                                </a>
                                <a href="{{ route('admin.album.delete', ['id' => str_pad($album->id, 12, '0', STR_PAD_LEFT)]) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
@endsection
@extends('admin.layouts.app')

@section('content')
    <div id="app">
        @include('admin.partials.header')

        <div class="container">
            <div class="row mb-5">
                <h1 class="text-left col-12 font-weight-bold">
                    Genre
                </h1>
            </div>
            <div>
                <button class="btn btn-success">
                    <a class="text-decoration-none text-white" href="{{ route('admin.genre.add') }}">Add</a>
                </button>
            </div>
            @if (session('alert'))
                <div class="alert alert-{{ session('alert')['status'] }}" role="alert">
                    {{ session('alert')['message'] }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="row no-gutters justify-content-center">
                @if ($data->count() > 0)
                    @foreach($data as $item)
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="card m-1">
                            <div class="card-body">
                                <div class="description text-center">
                                    <h5 class="font-weight-bold">
                                        {{ str_limit($item->name, $limit = 15, $end = ' ...') }}
                                    </h5>
                                </div>
                            </div>
                            <a href="{{ route('admin.genre.read', ['id' => str_pad($item->id, 12, '0', STR_PAD_LEFT)]) }}" class="btn btn-secondary rounded-0">
                                Lihat
                            </a>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="col-12">
                        <div class="alert alert-dark" role="alert">
                            Genre belum tersedia
                        </div>
                    </div>
                @endif
            </div>
        </div>

        @include('admin.partials.footer')        
    </div>
@endsection
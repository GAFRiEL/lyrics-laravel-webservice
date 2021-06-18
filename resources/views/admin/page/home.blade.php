@extends('admin.layouts.general')

@section('page')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Admin</h1>

	<div class="row menu-group">

		<a href="{{ route('admin.artist.list') }}" class="text-decoration-none menu open text-center mt-4 col-sm-12 col-md-4">
			<div class="icon-block alert alert-primary" role="alert">
				<h1>Artist</h1>
				<hr>
				{{ $artist }} Data
			</div>
		</a>
		<a href="{{ route('admin.genre.list') }}" class="text-decoration-none menu open text-center mt-4 col-sm-12 col-md-4">
			<div class="icon-block alert alert-primary" role="alert">
				<h1>Genre</h1>
				<hr>
				{{ $genre }} Data
			</div>
		</a>
		<a href="{{ route('admin.song.list') }}" class="text-decoration-none menu open text-center mt-4 col-sm-12 col-md-4">
			<div class="icon-block alert alert-primary" role="alert">
				<h1>Lagu</h1>
				<hr>
				{{ $song }} Data
			</div>
		</a>

	</div>

</div>
<!-- /.container-fluid -->
@endsection
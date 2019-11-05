@extends('admin.layouts.app')

@section('content')

    {{-- sidebar --}}
    @include('admin.partials.sidebar')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        {{-- header --}}
        @include('admin.partials.header')

        {{-- content --}}
        @yield('page')

    </div>
    <!-- End of Main Content -->

    {{-- footer --}}
    @include('admin.partials.footer')

    </div>
    <!-- End of Content Wrapper -->

@endsection
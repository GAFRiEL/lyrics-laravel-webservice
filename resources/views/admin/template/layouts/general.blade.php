@extends('admin.template.layouts.app')

@section('content')

    {{-- sidebar --}}
    @include('admin.template.partials.sidebar')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        {{-- header --}}
        @include('admin.template.partials.header')

        {{-- content --}}
        @yield('page')

    </div>
    <!-- End of Main Content -->

    {{-- footer --}}
    @include('admin.template.partials.footer')

    </div>
    <!-- End of Content Wrapper -->

@endsection
@extends('guest.layout.basic')

@section('content')
    @include('guest.partials._header')

    @yield('page')

    @include('guest.partials.footer')
@endsection
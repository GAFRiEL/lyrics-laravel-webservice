@extends('guest.layout.basic')

@section('content')
    @include('guest.partials.header')

    @yield('page')

    @include('guest.partials.footer')
@endsection
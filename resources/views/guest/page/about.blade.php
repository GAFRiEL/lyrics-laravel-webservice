@extends('guest.layout.general')

@section('title', 'About')

@section('page')

<div class="container">

    <table class="table table-borderless">
        <thead>
            <tr>
                <th>Absen</th>
                <th>Nama</th>
                <th>Bagian</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">23</th>
                <td>Muhammad Gafriel Alfarizhi</td>
                <td>Full-Stack</td>
            </tr>
            <tr>
                <th scope="row">24</th>
                <td>Muhammad Hudaa Sabrie</td>
                <td>Designer</td>
            </tr>
            <tr>
                <th scope="row">25</th>
                <td>Muhammad Rafif Hibatullah</td>
                <td>Database</td>
            </tr>
            <tr>
                <th scope="row">26</th>
                <td>Muhammad Rahmat Pratama</td>
                <td>Project Manager</td>
            </tr>
        </tbody>
    </table> <br>

    <h3>
        Are you an admin? <br> 
        <a href="{{ route('login') }}">Login Here</a>
    </h3>

</div>

@endsection

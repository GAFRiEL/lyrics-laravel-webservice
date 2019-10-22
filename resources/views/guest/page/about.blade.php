@extends('guest.layout.general')

@section('title', 'About')

@section('page')

<div class="container">

    <div class="jumbotron alert-primary">
        <h1 class="display-3">Hello!</h1>
        <p class="lead">
            This website is made by student of smkn 2 balikpapan
        </p>
        <hr class="my-2">
        <p>
            Are you an admin?
        </p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="{{ route('admin.home') }}" role="button">Login</a>
        </p>
    </div>


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

</div>

@endsection

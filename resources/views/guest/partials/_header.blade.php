<nav class="navbar navbar-expand-lg pt-4 pb-4 bg-primary">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('img/logo/header-logo.png') }}" class="" style="width: 150px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">
            </ul>
            
        <form action="{{ route('search') }}" class="form-inline my-2 my-lg-0" method="GET">
            <input class="form-control mr-sm-2" type="text" value="" placeholder="Song title" aria-label="Search" name="search">
            <input class="btn alert-primary my-2 my-sm-0" type="submit" value="search">
        </form>
    </div>
</nav> <br>
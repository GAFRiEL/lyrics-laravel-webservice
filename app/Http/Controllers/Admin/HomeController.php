<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Genre;
use App\Album;
use App\Song;
use App\Artist;

class HomeController extends Controller
{
    public function index() {
        $data = [
            'genre' => Genre::count(),
            'album' => Album::count(),
            'song' => Song::count(),
            'artist' => Artist::count()
        ];

        // dd($data['genre']);

        return view('admin.page.home', $data);
    }
}

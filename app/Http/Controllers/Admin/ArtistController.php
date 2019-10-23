<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Artist;

class ArtistController extends Controller
{
    public function list() {
        $data = [
            'data' => Artist::get()
        ];

        return view('admin.page.artist.list', $data);
    }

    public function read () {
        if (request('id')) {
            $artist = Artist::find(request('id'));
        } else {
            $artist = [];
        };

        $data = [
            'data' => $artist,
        ];

        return view('admin.page.artist.read', $data);
    }
}

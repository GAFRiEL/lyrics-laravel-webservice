<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Artist;

class ArtistController extends Controller
{
    public function list() {
        $data = [
            'data' => Artist::get()
        ];

        return view('guest.page.artist.list', $data);
    }

    public function read () {
        if (request('id')) {
            $data = Artist::where('id', request('id'))->first();
            // dd($data);
        } else {
            abort(404);
        };

        $data = [
            'data' => $data,
        ];


        return view('guest.page.artist.read', $data);
    }
}

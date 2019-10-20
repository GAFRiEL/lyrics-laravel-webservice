<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Genre;

class GenreController extends Controller
{
    public function list() {
        $data = [
            'data' => Genre::get()
        ];

        return view('guest.page.genre.list', $data);
    }

    public function read() {
        if (request('id')) {
            $data = Genre::where('id', request('id'))->first();
        } else {
            abort(404);
        };

        $data = [
            'data' => $data,
        ];


        return view('guest.page.genre.read', $data);
    }
}

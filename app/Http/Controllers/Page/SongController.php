<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Song;

class SongController extends Controller
{
    public function list () {
        $data = [
            'data' => Song::get()
        ];

        return view('guest.page.song.list', $data);
    }

    public function read () {
        if (request('id')) {
            $data = Song::where('id', request('id'))->first();
            // dd($data);
        } else {
            abort(404);
        };

        $data = [
            'data' => $data,
        ];

        return view('guest.page.song.read', $data);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Genre;
use App\Album;
use App\Song;

class SongController extends Controller
{
    public function list() {
        $data = [
            'data' => Song::latest()->get()
        ];

        return view('admin.page.song.list', $data);
    }

    public function add()
    {
        $data = [
            'genre'     => Genre::get(),
            'album'     => Album::get(),
            'data'      => null
        ];

        return view('admin.page.song.add', $data);
    }


    public function read() {
        if (request('id')) {
            $song = Song::find(request('id'));
        } else {
            abort(404);
        };

        $data = [
            'data' => $song,
        ];
        
        return view('admin.page.song.read', $data);
    }

    public function edit() {
        if (request('id')) {
            $song = Song::find(request('id'));
        } else {
            abort(404);
        };

        $data = [
            'genre'     => Genre::get(),
            'album'     => Album::get(),
            'data'      => $song,
        ];
        
        return view('admin.page.song.edit', $data);
    }

    public function create(Request $request) {
        // validate
        $validator = \Validator::make($request->all(), [
            'name'      => 'required',
            'genre_id'  => 'required',
            'album_id'  => 'required',
            'lyrics'    => 'required'
        ]);

        // create data with eloquent
        Song::create([
            'name'      => request('name'),
            'genre_id'  => request('genre'),
            'album_id'  => request('album'),
            'lyrics'    => request('lyrics')
        ]);

        // result
        return redirect()->route('admin.song.list')->with('status', 'Song created successfully');
    }
    
    public function update(Request $request) {
        // validate
        $validator = \Validator::make($request->all(), [
            'id'        => 'required',
            'name'      => 'required',
            'genre_id'  => 'required',
            'album_id'  => 'required',
            'lyrics'    => 'required'
        ]);

        // update data with eloquent
        Song::find(request('id'))
            ->update([
            'name'      => request('name'),
            'genre_id'  => request('genre'),
            'album_id'  => request('album'),
            'lyrics'    => request('lyrics')
            ]);

        // success response
        return redirect()->back()->with('status', 'Song updated successfully');
    }

    public function delete(Request $request) {
        if (request('id')) {
            $data = Song::find(request('id'));
            $data->delete();
            
            return redirect()->route('admin.song.list')->with('status', 'Song deleted successfully');
        } else {
            abort(404);
        };
    }
}

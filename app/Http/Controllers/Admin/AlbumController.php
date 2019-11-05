<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Album;
use App\Artist;

class AlbumController extends Controller
{
    public function list() {
        $data = [
            'data' => Album::latest()->get()
        ];

        return view('admin.page.album.list', $data);
    }

    public function add()
    {
        $data = [
            'artist'    => Artist::get(),
            'data'      => null
        ];

        return view('admin.page.album.add', $data);
    }

    public function create(Request $request) {
        // validate
        $validator = \Validator::make($request->all(), [
            'name'      => 'required',
            'artist_id' => 'required',
        ]);

        // create data with eloquent
        Album::create([
            'name'      => request('name'),
            'artist_id' => request('artist')
        ]);

        // result
        return redirect()->route('admin.album.list')->with('status', 'Album created successfully');
    }

    public function read() {
        if (request('id')) {
            $album = Album::find(request('id'));
        } else {
            abort(404);
        };

        $data = [
            'data' => $album,
        ];
        
        return view('admin.page.album.read', $data);
    }

    public function edit() {
        if (request('id')) {
            $album = Album::find(request('id'));
        } else {
            abort(404);
        };

        $data = [
            'artist'    => Artist::get(),
            'data'      => $album,
        ];
        
        return view('admin.page.album.edit', $data);
    }

    public function update(Request $request) {
        // validate
        $validator = \Validator::make($request->all(), [
            'id'        => 'required',
            'name'      => 'required',
            'artist_id' => 'required'
        ]);

        // dd(request('id'));

        // get data with eloquent
        Album::find(request('id'))
            ->update([
            'name'      => request('name'),
            'artist_id' => request('artist')
            ]);

        // success response
        return redirect()->back()->with('status', 'Album updated successfully');
    }

    public function delete(Request $request) {
        if (request('id')) {
            $data = Album::find(request('id'));
            $data->delete();
            
            return redirect()->route('admin.album.list')->with('status', 'Album deleted successfully');
        } else {
            abort(404);
        };
    }
}

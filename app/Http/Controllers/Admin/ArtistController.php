<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Artist;

class ArtistController extends Controller
{
    public function list() {
        $data = [
            'data' => Artist::latest()->get()
        ];

        return view('admin.page.artist.list', $data);
    }

    public function add()
    {
        $data = [
            'data' => null
        ];

        return view('admin.page.artist.add', $data);
    }

    public function edit() {
        if (request('id')) {
            $artist = Artist::find(request('id'));
        } else {
            abort(404);
        };

        $data = [
            'data' => $artist
        ];

        return view('admin.page.artist.edit', $data);
    }

    public function create(Request $request) {
        // Validate
        $attributes = [
            'name'    => 'Artist Name',
        ];

        $this->validate($request,[
            'name'     => 'required',
        ],[],$attributes);

        // updating on fire
        Artist::create([
            'name' => request('name'),
        ]);

        return redirect()->route('admin.artist.list')->with('status', 'Artist created successfully');
    }

    public function update(Request $request)
    {
        // Validate
        $attributes = [
            'name'    => 'Artist Name',
        ];

        $this->validate($request,[
            'name'    => 'required',
        ],[],$attributes);

        //updating on fire
        Artist::find(request('id'))
            ->update([
                'name' => request('name')
            ]);

        return redirect()->route('admin.artist.list')->with('status', 'Artist updated successfully');
    }

    public function delete(Request $request) {
        if (request('id')) {
            $data = Artist::find(request('id'));
            $data->delete();
            
            return redirect()->route('admin.artist.list')->with('status', 'Artist deleted successfully');
        } else {
            abort(404);
        };
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Genre;

class GenreController extends Controller
{
    public function list() {
        $data = [
            'data' => Genre::latest()->get()
        ];

        return view('admin.page.genre.list', $data);
    }

    public function add()
    {
        $data = [
            'data' => null
        ];

        return view('admin.page.genre.add', $data);
    }

    public function edit() {
        if (request('id')) {
            $genre = Genre::find(request('id'));
        } else {
            abort(404);
        };

        $data = [
            'data' => $genre
        ];

        return view('admin.page.genre.edit', $data);
    }

    public function create(Request $request) {
        // Validate
        $attributes = [
            'name'    => 'Genre Name',
        ];

        $this->validate($request,[
            'name'     => 'required',
        ],[],$attributes);

        // updating on fire
        Genre::create([
            'name' => request('name'),
        ]);

        return redirect()->route('admin.genre.list')->with('status', 'Genre created successfully');
    }

    public function update(Request $request)
    {
        // Validate
        $attributes = [
            'name'    => 'Genre Name',
        ];

        $this->validate($request,[
            'name'    => 'required',
        ],[],$attributes);

        //updating on fire
        Genre::find(request('id'))
            ->update([
                'name' => request('name')
            ]);

        return redirect()->route('admin.genre.list')->with('status', 'Genre updated successfully');
    }

    public function delete(Request $request) {
        if (request('id')) {
            $data = Genre::find(request('id'));
            $data->delete();
            
            return redirect()->route('admin.genre.list')->with('status', 'Genre deleted successfully');
        } else {
            abort(404);
        };
    }
}

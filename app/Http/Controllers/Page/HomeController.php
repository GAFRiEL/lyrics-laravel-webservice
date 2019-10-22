<?php

namespace App\Http\Controllers\page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Song;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'data' => Song::paginate(15)
        ];

        return view('guest.page.home', $data);
    }

    public function about()
    {
        return view('guest.page.about');
    }

    public function search (Request $request) {
        $search = $request->input('search');
    
        $data = Song::where('name', 'like', '%'.$search.'%')->get();
    
        return view('guest.page.search')->with('data', $data); 
	}
}

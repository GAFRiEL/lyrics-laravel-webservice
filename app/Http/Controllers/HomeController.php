<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Song;

class HomeController extends Controller
{
    public function index()
    {
        return view('guest.page.home');
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

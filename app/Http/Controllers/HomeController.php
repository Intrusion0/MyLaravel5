<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function home() {

        $films = Film::all();

        return view('pages.home', compact('films'));
    }

    public function showFilm($id) {
        
        $film = Film::findOrFail($id);

        return view('pages.showFilm', compact('film'));
    }

}

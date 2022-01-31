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

    public function create() {

        return view('pages.create');
    }

    public function store(Request $request) {

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'release_date' => 'required|date|max:255'
        ]);

        $film = Film::create($data);

        // return redirect()->route('pages.home');
        return redirect()->route('film', $film->id);
    }

    public function edit($id) {
        
        $film = Film::findOrFail($id);

        return view('pages.edit', compact('film'));
    }

    public function update(Request $request, $id) {

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'release_date' => 'required|date|max:255'
        ]);

        $film = Film::findOrFail($id);

        $film->update($data);

        return redirect()->route('film', $film->id);
    }

    public function delete($id) {

        $film = Film::findOrFail($id);

        $film->delete();

        return redirect()->route('home');
    }

}

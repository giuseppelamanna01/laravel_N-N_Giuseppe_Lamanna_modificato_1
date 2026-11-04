<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    public function create(){
        return view('genre.create');
    }

    public function index(){
        $genres=Genre::all()->sortBy('name');
        return view('genre.index', compact('genres'));
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required'
        ]);
        Genre::create([
            'name'=>$request->name
        ]);
        return redirect()->route('home')->with('success', 'Creazione della categoria avvenuta con successo!');
    }

    public function show(Genre $genre){
        return view('genre.show', compact('genre'));
    }
}

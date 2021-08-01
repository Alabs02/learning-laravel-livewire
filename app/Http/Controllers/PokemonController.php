<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{

    public function index()
    {
        $pokemons = Pokemon::all();
        return view('laravel_way', compact('pokemons'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Pokemon $pokemon)
    {
        return $pokemon->findOrFail($pokemon->id);
    }

    public function edit(Pokemon $pokemon)
    {
        //
    }

    public function update(Request $request, Pokemon $pokemon)
    {
        $pokemon->increment('cuteness', 1);
        return back()
            ->with('message', 'Voted');
    }

    public function destroy(Pokemon $pokemon)
    {
        //
    }
}

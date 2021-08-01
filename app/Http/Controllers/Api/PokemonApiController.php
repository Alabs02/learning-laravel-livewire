<?php

namespace App\Http\Controllers\Api;

use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class PokemonApiController extends Controller
{

    public function index(Response $response)
    {
        $pokemons = Pokemon::all();
        return response()->json($pokemons, 200);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Pokemon $pokemon)
    {
        //
    }

    public function update(Pokemon $pokemon, Request $request)
    {
        //
    }

    public function destroy(Pokemon $pokemon)
    {
        //
    }
}

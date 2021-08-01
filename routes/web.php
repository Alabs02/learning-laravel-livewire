<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('pokemons', PokemonController::class);
Route::view('javascript', 'laravel_javascript');
Route::view('livewire', 'livewire_way');

<?php

namespace App\Http\Livewire\Post;

use App\Models\Pokemon;
use Livewire\Component;

class Index extends Component
{
    public $pokemon;
    public $newQuery;

    protected $listeners = ['query' => 'reMount'];

    public function reMount($query)
    {
        $this->newQuery = $query;
        $this->render();
    }

    public function getPokemons($query)
    {
        if(empty($query) || $query === null || strlen($query) <= 0) {
            return Pokemon::all();
        } else {
            return Pokemon::where('name', '=',  ('%'.$query.'%'))
                ->get();
        }
    }

    public function render()
    {
        $pokemons = $this->getPokemons($this->newQuery);
        return view('livewire.post.index', compact('pokemons'));
    }
}

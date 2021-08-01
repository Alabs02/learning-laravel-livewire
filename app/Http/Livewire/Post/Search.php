<?php

namespace App\Http\Livewire\Post;

use App\Models\Pokemon;
use Livewire\Component;

class Search extends Component
{
    public $query = '';

    public function mount()
    {
        $this->query;
    }

    public function getPokemons()
    {
        return Pokemon::where('name', 'like', ('%'. $this->query .'%'))
            ->get();
    }

    public function incrementCuteness(Pokemon $pokemon)
    {
        $pokemon->increment('cuteness');
        $this->render();
    }

    public function decrementCuteness(Pokemon $pokemon)
    {
        $pokemon->decrement('cuteness');
        $this->render();
    }

    public function render()
    {
        return view('livewire.post.search', [
            'pokemons' => $this->getPokemons(),
        ]);
    }
}

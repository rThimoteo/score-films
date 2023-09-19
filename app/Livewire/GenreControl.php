<?php

namespace App\Livewire;

require_once __DIR__ .'/../helpers.php';

use App\Models\Genre;
use Livewire\Component;

class GenreControl extends Component
{
    public $genres = [];
    public $newGenre;

    public function mount()
    {
        $genres = Genre::all();
        $this->genres = [];

        foreach ($genres as $genre) {
            $this->genres[$genre->id] = $genre->name;
        }
    }

    public function updateGenre($index)
    {
        $genre = Genre::find($index);
        $genre->name = $this->genres[$index];
        $genre->save();
    }

    public function removeGenre($index)
    {
        $genre = Genre::find($index);
        $genre->items()->detach();
        $genre->delete();
        
        $this->mount();
    }

    public function addGenre()
    {
        if (!empty($this->newGenre)) {
            $addedGenre = Genre::firstOrCreate(['name' => $this->newGenre, 'handler' => formatText($this->newGenre)]);
            $this->genres[$addedGenre->id] = $this->newGenre;
            $this->newGenre = '';
        }
    }

    public function render()
    {
        return view('livewire.genre-control');
    }
}

<?php

namespace App\Livewire;

use App\Models\Genre;
use Livewire\Component;

class SelectGenres extends Component
{

    public $genres = [];
    public $prevGenres = [];
    public $allGenres = [];
    public $selectedGenres = [];
    public $item = null;

    public function mount($item)
    {
        $genres = $item->genres;
        $this->item = $item;

        $this->allGenres = Genre::all();

        foreach ($genres as $genre) {
            $this->prevGenres[] = $genre->id;
        }

        $this->genres = $this->prevGenres;
        $this->selectedGenres = $genres;
    }
    public function render()
    {
        return view('livewire.select-genres');
    }

    public function cancelSelect()
    {
        $this->genres = $this->prevGenres;
    }

    public function confirmGenres()
    {
        $filteredGenres = $this->allGenres->filter(function ($genre) {
            return in_array($genre['id'], $this->genres);
        })->toArray();
        
        $this->selectedGenres = $filteredGenres;

        $this->item->genres()->sync($this->genres);
    }
}

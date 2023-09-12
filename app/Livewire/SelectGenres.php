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
    public $new_genre = '';

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

    public function createGenre()
    {
        $addGenre = Genre::firstOrCreate(['name' => $this->new_genre, 'handler' => strtolower($this->new_genre)]);

        if ($addGenre->wasRecentlyCreated) {
            $this->allGenres[] = $addGenre;
        }

        $this->new_genre = '';
    }


    public function render()
    {
        return view('livewire.select-genres');
    }
}

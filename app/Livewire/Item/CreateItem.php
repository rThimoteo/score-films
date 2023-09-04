<?php

namespace App\Livewire\Item;

use App\Models\Genre;
use App\Models\Item;
use App\Models\Type;
use Carbon\Carbon;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreateItem extends Component
{
    #[Rule('required')]
    public $name = '';

    #[Rule('required')]
    public $type_id = '';

    public $description = '';
    public $img_url = '';
    public $banner_url = '';
    public $year = 0;

    public $genres = [];
    public $allGenres = [];
    public $selectedGenres = [];
    public $new_genre = '';

    public function mount()
    {
        $this->year = Carbon::now()->year;
        $this->allGenres = Genre::all();

        $this->type_id = Type::where('handler', Type::FILME)->first()->id;
    }

    public function save()
    {
        $newItem = Item::create(
            $this->only(['name', 'type_id', 'description', 'img_url', 'banner_url', 'year'])
        );

        $newItem->genres()->sync($this->genres);

        return $this->redirect('/');
    }

    public function cancelSelect()
    {
        $this->genres = [];
    }

    public function confirmGenres()
    {
        $filteredGenres = $this->allGenres->filter(function ($genre) {
            return in_array($genre['id'], $this->genres);
        })->toArray();

        $this->selectedGenres = $filteredGenres;
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
        return view(
            'livewire.create-item',
            [
                'options' => Type::all()
            ]
        );
    }
}

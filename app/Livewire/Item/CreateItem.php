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
    public $episodes = 0;

    public $genres = [];
    public $allGenres = [];
    public $selectedGenres = [];
    public $new_genre = '';

    public $hasParent = false;
    public $search = '';
    public $parentId = null;

    public $selectedType;
    public $hasEpisodes = false;

    public function mount()
    {
        $this->year = Carbon::now()->year;
        $this->allGenres = Genre::all();

        $this->type_id = Type::where('handler', Type::FILME)->first()->id;
    }

    public function save()
    {
        $saveItem = [
            'name' => $this->name,
            'description' => $this->description ? $this->description : null,
            'year' => $this->year ? $this->year : null,
            'type_id' => $this->type_id,
            'banner_url' => $this->banner_url ? $this->banner_url : null,
            'img_url' => $this->img_url ? $this->img_url : null
        ];


        if ($this->hasParent && isset($this->parentId)) {
            $saveItem['parent_id'] = $this->parentId;
        }

        if ($this->hasEpisodes && $this->episodes > 0) {
            $saveItem['episodes'] = $this->episodes;
        }

        $newItem = Item::create($saveItem);

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

    public function updatedSearch()
    {
        return Item::where('name', 'like', '%' . $this->search . '%')
            ->whereRaw('id NOT IN (SELECT parent_id FROM items WHERE parent_id IS NOT NULL)')
            ->take(5)
            ->get()
            ->toArray();
    }

    public function selectParent($parent)
    {
        $this->parentId = $parent['id'];
        $this->search = $parent['name'];
    }

    public function updated($propertyName)
    {
        if ($propertyName === 'type_id') {
            $this->selectedType = Type::find($this->type_id);

            $handler = $this->selectedType->handler;
            if ($handler == 'serie' || $handler == 'anime' || $handler == 'cartoon') {
                $this->hasEpisodes = true;
            } else {
                $this->hasEpisodes = false;
            }
            
            $this->episodes = 0;
        }
    }
    public function render()
    {
        $items = $this->updatedSearch();

        return view(
            'livewire.create-item',
            [
                'options' => Type::all(),
                'items' => $items,
            ]
        );
    }
}

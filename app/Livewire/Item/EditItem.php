<?php

namespace App\Livewire\Item;

use Livewire\Component;
use App\Models\Item;
use App\Models\Type;
use Livewire\Attributes\On;

class EditItem extends Component
{
    public $item;
    public $name;
    public $description;
    public $year;
    public $type;
    public $banner_url;
    public $img_url;
    public $genres = [];
    public $episodes = 0;

    public $hasParent = 0;
    public $search = '';
    public $parentId = null;

    public $selectedType;
    public $hasEpisodes = false;

    public function mount($id)
    {
        $this->item = Item::where('id', $id)->with('genres', 'type', 'parent')->first();

        $this->name = $this->item->name;
        $this->description = $this->item->description;
        $this->year = $this->item->year;
        $this->type = $this->item->type->id;
        $this->banner_url = $this->item->banner_url;
        $this->img_url = $this->item->img_url;
        $this->episodes = $this->item->episodes;

        $this->genres = array_map(function ($genre) {
            return $genre['id'];
        }, $this->item->genres->toArray());

        $this->selectedType = $this->item->type;
        $handler = $this->item->type->handler;
        if ($handler == 'serie' || $handler == 'anime' || $handler == 'cartoon') {
            $this->hasEpisodes = true;
        } else {
            $this->hasEpisodes = false;
        }

        if ($this->item->parent) {
            $this->hasParent = true;
            $this->parentId = $this->item->parent->id;
            $this->search = $this->item->parent->name;
        }
    }

    #[On('genres-selected')]
    public function updateGenres($selectedGenres)
    {
        $this->genres = $selectedGenres;
    }

    public function updateItem()
    {
        $this->validate([
            'name' => 'required',
            'type' => 'required',
        ]);

        $saveItem = [
            'name' => $this->name,
            'description' => $this->description,
            'year' => $this->year,
            'type_id' => $this->type,
            'banner_url' => $this->banner_url,
            'img_url' => $this->img_url
        ];


        if ($this->hasParent && isset($this->parentId)) {
            $saveItem['parent_id'] = $this->parentId;
        }

        if ($this->hasEpisodes && $this->episodes > 0) {
            $saveItem['episodes'] = $this->episodes;
        } else {
            $saveItem['episodes'] = null;
        }

        $this->item->update($saveItem);
        $this->item->genres()->sync($this->genres);

        return $this->redirect('/');
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
        if ($propertyName === 'type') {
            $this->selectedType = Type::find($this->type);

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

        return view('livewire.edit-item', [
            'options' => Type::all(),
            'items' => $items
        ]);
    }
}

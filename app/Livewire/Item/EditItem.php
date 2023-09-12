<?php

namespace App\Livewire\Item;

use Livewire\Component;
use App\Models\Item;
use App\Models\Type;

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
    public $prevGenres = [];
    public $allGenres = [];
    public $selectedGenres = [];

    public $hasParent = 0;
    public $search = '';
    public $parentId = null;

    public function mount($id)
    {
        $this->item = Item::where('id', $id)->with('genres')->first();

        $this->name = $this->item->name;
        $this->description = $this->item->description;
        $this->year = $this->item->year;
        $this->type = $this->item->type;
        $this->banner_url = $this->item->banner_url;
        $this->img_url = $this->item->img_url;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'type' => 'required',
        ]);

        $saveItem = [
            'name' => $this->name,
            'description' => $this->description,
            'year' => $this->year,
            'type' => $this->type,
            'banner_url' => $this->banner_url,
            'img_url' => $this->img_url
        ];


        if ($this->hasParent && isset($this->parentId)) {
            $saveItem['parent_id'] = $this->parentId;
        }

        $this->item->update($saveItem);

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

    public function render()
    {
        $items = $this->updatedSearch();

        return view('livewire.edit-item', [
            'options' => Type::all(),
            'items' => $items
        ]);
    }
}

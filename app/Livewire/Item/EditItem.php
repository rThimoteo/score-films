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

    public function mount($id)
    {
        $this->item = Item::find($id);
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

        $this->item->update([
            'name' => $this->name,
            'description' => $this->description,
            'year' => $this->year,
            'type' => $this->type,
            'banner_url' => $this->banner_url,
            'img_url' => $this->img_url
        ]);
    }

    public function render()
    {
        return view('livewire.edit-item', [
          'options' => Type::all()
      ]);
    }
}
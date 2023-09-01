<?php

namespace App\Livewire\Item;

use App\Models\Item;
use Livewire\Component;

class ShowItem extends Component
{
    public Item $item;

    public function mount($id)
    {
        $this->item = Item::where('id', $id)->with('genres')->first();
    }

    public function render()
    {
        return view('livewire.item-details');
    }
}

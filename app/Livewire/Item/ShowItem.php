<?php

namespace App\Livewire\Item;

use App\Models\Item;
use Livewire\Component;

class ShowItem extends Component
{
    public Item $item;
 
    public function mount($id) 
    {
        $this->item = Item::findOrFail($id);
    }
 
    public function render()
    {
        return view('livewire.item-details');
    }
}

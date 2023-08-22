<?php
 
namespace App\Livewire;

use App\Models\Item;
use Livewire\Component;
 
class Main extends Component
{ 
    public function render()
    {
        return view('livewire.main', [
          'items' => Item::all(),
        ]);
    }
}
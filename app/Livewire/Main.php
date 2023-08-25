<?php

namespace App\Livewire;

use App\Models\Item;
use App\Models\Type;
use Livewire\Component;

class Main extends Component
{
  public $items = [];

  public function mount($type = null)
  {
    if ($type) {
      $type_id = Type::where('handler', $type)->first()->id;
      $this->items = Item::where('type_id', $type_id)->get();
    } else {
      $this->items = Item::userScore()->get();
    }
  }

  public function render()
  {
    return view('livewire.main', [
      'items' => $this->items,
    ]);
  }
}

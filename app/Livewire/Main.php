<?php

namespace App\Livewire;

use App\Models\Item;
use App\Models\Status;
use App\Models\Type;
use Livewire\Component;

class Main extends Component
{
  public $catalog;
  public $filtro;

  public function mount($type = null)
  {
    $this->catalog = $type;
  }

  public function listItems()
  {
    $user = auth()->user();

    $query = Item::with(['users' => function ($query) use ($user) {
      $query->where('users.id', $user->id)
        ->select('score', 'status_id', 'comment', 'is_favorite', 'date');
    }]);

    if ($this->catalog !== null) {
      $type_id = Type::where('handler', $this->catalog)->first()->id;
      $query->where('type_id', $type_id);
    }

    if ($this->filtro !== null) {
      $query->where('name', 'like', '%' . $this->filtro . '%');
    }

    $tempItems = $query->get();

    foreach ($tempItems as $item) {
      if (isset($item->users->first()->pivot)) {
        $statusId = $item->users->first()->pivot->status_id;
        $item['status'] = Status::find($statusId)->handler;
      }
    }

    return $tempItems;
  }

  public function render()
  {
    $items = $this->listItems();
    
    return view('livewire.main', [
      'items' => $items,
    ]);
  }
}

<?php

namespace App\Livewire;

use App\Models\Item;
use App\Models\Status;
use App\Models\Type;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Main extends Component
{
  public $items = [];

  public function mount($type = null)
  {
    $this->listItems($type);
  }

  public function listItems($type)
  {
    $user = auth()->user();

    $query = Item::with(['users' => function ($query) use ($user) {
      $query->where('users.id', $user->id)
        ->select('score', 'status_id', 'comment', 'is_favorite', 'date');
    }]);

    if ($type !== null) {
      $type_id = Type::where('handler', $type)->first()->id;
      $query->where('type_id', $type_id);
    }

    $tempItems = $query->get();

    foreach ($tempItems as $item) {
      if (isset($item->users->first()->pivot)) {
        $statusId = $item->users->first()->pivot->status_id;
        $item['status'] = Status::find($statusId)->handler;
      }
    }

    $this->items = $tempItems;
  }

  public function render()
  {
    return view('livewire.main', [
      'items' => $this->items,
    ]);
  }
}

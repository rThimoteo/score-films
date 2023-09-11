<?php

namespace App\Livewire;

use App\Models\Genre;
use App\Models\Item;
use App\Models\Status;
use App\Models\Type;
use Livewire\Component;

class Main extends Component
{
  public $catalog;
  public $name_filter;

  public $genres = [];
  public $allGenres = [];
  public $selectedGenres = [];

  public function mount($type = null)
  {
    $this->catalog = $type;
    $this->allGenres = Genre::all();
  }

  public function listItems()
  {
    $user = auth()->user();

    $query = Item::with(['users' => function ($query) use ($user) {
      $query->where('users.id', $user->id)
        ->select('score', 'status_id', 'comment', 'is_favorite', 'date');
    }])
      ->leftJoin('user_item', function ($join) use ($user) {
        $join->on('items.id', '=', 'user_item.item_id')
          ->where('user_item.user_id', '=', $user->id);
      })
      ->select('items.*', 'user_item.date', 'user_item.score')
      ->orderBy('user_item.date', 'desc');

    if ($this->catalog !== null) {
      $type_id = Type::where('handler', $this->catalog)->first()->id;
      $query->where('type_id', $type_id);
    }

    if ($this->name_filter !== null) {
      $query->where('name', 'like', '%' . $this->name_filter . '%');
    }

    if (!empty($this->selectedGenres)) {
      $query->whereHas('genres', function ($query) {
        $query->whereIn('genre_id', $this->selectedGenres);
      });
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

  public function cancelSelect()
  {
    $this->genres = $this->selectedGenres;
  }

  public function confirmGenres()
  {
    $this->selectedGenres = $this->genres;
  }

  public function render()
  {
    $items = $this->listItems();

    return view('livewire.main', [
      'items' => $items,
    ]);
  }
}

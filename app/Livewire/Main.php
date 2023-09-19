<?php

namespace App\Livewire;

use App\Models\Genre;
use App\Models\Item;
use App\Models\Status;
use App\Models\Type;
use Carbon\Carbon;
use Livewire\Attributes\On;
use Livewire\Component;

class Main extends Component
{
  public $catalog;

  public $items = [];

  public $genres = [];
  public $allGenres = [];
  public $statuses= [];

  public $score_filter;
  public $name_filter;
  public $status_filter;

  public $month;
  public $year;
  public $validYears = [];
  public $firstYear = 2020;

  public function mount($type = null)
  {
    $this->catalog = $type;
    $this->allGenres = Genre::all();
    $this->statuses = Status::all();

    $this->items = $this->listItems();

    while ($this->firstYear <= Carbon::now()->year) {
      $this->validYears[] = $this->firstYear;
      $this->firstYear++;
    }
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

    if ($this->name_filter != null) {
      $query->where('name', 'like', '%' . $this->name_filter . '%');
    }

    if (!empty($this->genres)) {
      $query->whereHas('genres', function ($query) {
        $query->whereIn('genre_id', $this->genres);
      });
    }

    if ($this->status_filter != null) {
      $query->where('status_id', $this->status_filter);
    }

    if ($this->score_filter != null) {
      $query->where('score', '=', $this->score_filter);
    }

    if ($this->month != null) {
      $query->whereMonth('date', $this->month);
    }

    if ($this->year != null) {
      $query->whereYear('date', $this->year);      
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

  public function cancelFilters()
  {
    $this->genres = [];
    $this->name_filter = null;
    $this->status_filter = null;
    $this->score_filter = null;
    $this->month = null;
    $this->year = null;

    $this->items = $this->listItems();
  }

  public function confirmFilter()
  {
    $this->items = $this->listItems();
  }

  #[On('filter-updated')]
  public function updateSearch($filter)
  {
    $this->name_filter = $filter;
  }

  public function render()
  {
    return view('livewire.main', [
      'items' => $this->items,
    ]);
  }
}

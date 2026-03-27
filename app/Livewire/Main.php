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
  public $page = 1;
  public $perPage = 20;
  public $hasMoreItems = true;
  public $isLoadingMore = false;

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

    $this->resetListing();
    
    $this->dispatch('show-filter', show: true);

    while ($this->firstYear <= Carbon::now()->year) {
      $this->validYears[] = $this->firstYear;
      $this->firstYear++;
    }

    if ($type !== null) {
      $this->dispatch('set-category', category: $type);
    } else {
      $this->dispatch('set-category', category: 'all');
    }
  }

  protected function buildItemsQuery()
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
      ->leftJoin('statuses', 'user_item.status_id', '=', 'statuses.id')
      ->select('items.*', 'user_item.date', 'user_item.score', 'statuses.handler as status')
      ->orderByRaw("
        CASE
            WHEN statuses.handler = 'consuming' THEN 1
            WHEN statuses.handler = 'priority' THEN 2
            WHEN statuses.handler = 'done' THEN 3
            WHEN statuses.handler = 'todo' THEN 4
            ELSE 5
        END
    ")
      ->orderBy('user_item.date', 'desc');

    if ($this->catalog !== null) {
      $type_id = Type::where('handler', $this->catalog)->first()->id;
      $query->where('type_id', $type_id);
    }

    if ($this->name_filter != null) {
      $query->where('items.name', 'like', '%' . $this->name_filter . '%');
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

    return $query;
  }

  public function listItems($append = false)
  {
    $items = $this->buildItemsQuery()
      ->skip(($this->page - 1) * $this->perPage)
      ->take($this->perPage)
      ->get();

    $this->hasMoreItems = $items->count() === $this->perPage;

    if ($append) {
      $this->items = collect($this->items)
        ->concat($items)
        ->values()
        ->all();

      $this->isLoadingMore = false;

      return;
    }

    $this->items = $items->all();
    $this->isLoadingMore = false;
  }

  public function resetListing()
  {
    $this->page = 1;
    $this->hasMoreItems = true;
    $this->isLoadingMore = false;
    $this->listItems();
  }

  public function loadMore()
  {
    if (!$this->hasMoreItems || $this->isLoadingMore) {
      return;
    }

    $this->isLoadingMore = true;
    $this->page++;
    $this->listItems(true);
  }

  public function cancelFilters()
  {
    $this->genres = [];
    $this->name_filter = null;
    $this->status_filter = null;
    $this->score_filter = null;
    $this->month = null;
    $this->year = null;

    $this->resetListing();
  }

  public function confirmFilter()
  {
    $this->resetListing();
  }

  #[On('filter-updated')]
  public function updateSearch($filter)
  {
    $this->name_filter = $filter;
    $this->resetListing();
  }

  public function render()
  {
    return view('livewire.main', [
      'items' => $this->items,
    ]);
  }
}

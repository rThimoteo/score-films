<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class SearchInput extends Component
{
    public $filter;
    public $showFilter = false;

    public function updated()
    {
        $this->dispatch('filter-updated', filter: $this->filter);
    }

    #[On('show-filter')]
    public function updateSearch($show)
    {
        $this->showFilter = $show;
    }
    public function render()
    {
        return view('livewire.search-input');
    }
}

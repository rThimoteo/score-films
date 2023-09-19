<?php

namespace App\Livewire;

use Livewire\Component;

class SearchInput extends Component
{
    public $filter;

    public function updated()
    {
        $this->dispatch('filter-updated', filter: $this->filter);
    }
    public function render()
    {
        return view('livewire.search-input');
    }
}

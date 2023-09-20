<?php

namespace App\Livewire;

use App\Models\Type;
use Livewire\Component;

class Menu extends Component
{
    public $routes = [];

    public function mount()
    {
        $this->routes = Type::all();
    }

    public function render()
    {
        return view('livewire.menu', [
            'categories' => $this->routes
        ]);
    }
}

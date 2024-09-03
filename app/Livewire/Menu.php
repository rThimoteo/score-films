<?php

namespace App\Livewire;

use App\Models\Type;
use Livewire\Attributes\On;
use Livewire\Component;

class Menu extends Component
{
    public $routes = [];
    public $activeCategory;

    public function mount()
    {
        $this->routes = Type::all();
    }

    #[On('set-category')]
    public function setCategory($category)
    {
        $this->activeCategory = $category;
    }

    public function render()
    {
        return view('livewire.menu', [
            'categories' => $this->routes
        ]);
    }
}

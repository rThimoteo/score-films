<?php

namespace App\Livewire\Item;

use App\Models\Item;
use App\Models\Type;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreateItem extends Component
{
    #[Rule('required')] 
    public $name = '';

    #[Rule('required')] 
    public $type_id = '';
    
    public $description = '';
    public $img_url = '';
    public $banner_url = '';
    public $year = 0;

    public function save()
    {
        Item::create(
            $this->only(['name', 'type_id', 'description', 'img_url', 'banner_url', 'year'])
        );

        return $this->redirect('/');
    }
    public function render()
    {
        return view('livewire.create-item', [
            'options' => Type::all()
        ]
    );
    }
}

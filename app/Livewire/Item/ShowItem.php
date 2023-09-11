<?php

namespace App\Livewire\Item;

use App\Models\Item;
use Livewire\Component;

class ShowItem extends Component
{
    public Item $item;
    public $prevString = 'Anterior';
    public $nextString = 'Próximo';

    public function mount($id)
    {
        $this->item = Item::where('id', $id)->with(['genres', 'parent', 'child', 'type'])->first();

        switch ($this->item->type->handler) {
            case 'game':
                $this->prevString = 'Jogo anterior';
                $this->nextString = 'Sequência';
                break;

            case 'movie':
                $this->prevString = 'Filme anterior';
                $this->nextString = 'Sequência';
                break;

            case 'serie':
            case 'anime':
                $this->prevString = 'Temporada anterior';
                $this->nextString = 'Próxima temporada';
                break;
            
            default:
                break;
        }
    }

    public function parentItem()
    {
        if ($this->item->parent)
            redirect('/items/' . $this->item->parent->id);
    }

    public function childItem()
    {
        if ($this->item->child)
            redirect('/items/' . $this->item->child->id);
    }

    public function render()
    {
        return view('livewire.item-details');
    }
}

<?php

namespace App\Livewire;

use App\Models\Status;
use Carbon\Carbon;
use Livewire\Component;

class Rating extends Component
{
    public $score;
    public $temp_score;
    public $comment;
    public $date;
    public $status_id = '';

    public function mount($item = ['score' => 0, 'comment' => '', 'date' => null])
    {
        if (!$item['date']) {
            $item['date'] = Carbon::now()->format('d/m/Y');
        }
        $this->score = $item['score'];
        $this->comment = $item['comment'];
        $this->date = $item['date'];
    }

    public function rate($rating)
    {
        $this->score = $rating;

        // Salve a nota na tabela user_item aqui
        // Exemplo: auth()->user()->items()->updateExistingPivot($itemId, ['score' => $rating]);
    }

    public function highlight($rating)
    {
        $this->temp_score = $rating;
    }

    public function resetHighlight()
    {
        $this->temp_score = 0;
    }

    public function render()
    {
        return view('livewire.rating', [
            'options' => Status::all()
        ]);
    }
}

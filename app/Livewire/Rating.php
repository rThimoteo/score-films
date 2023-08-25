<?php

namespace App\Livewire;

use App\Models\Status;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Rating extends Component
{
    public $item_id;
    public $score = 0;
    public $temp_score = 0;
    public $comment = '';
    public $date = '';
    public $status_id = 1;

    public function mount($itemid = 0)
    {
        $data = DB::table('user_item')
            ->select('user_item.*')
            ->where('item_id', $itemid)
            ->where('user_id', auth()->user()->id)
            ->first();

        $this->item_id = $itemid;
        
        if ($data) {
            if ($data->date) {
                $this->date = $data->date;
            }
            if ($data->status_id) {
                $this->status_id = $data->status_id;
            }
            if ($data->score) {
                $this->score = $data->score;
            }
            if ($data->comment) {
                $this->comment = $data->comment;
            }
        } else {
            $this->date = Carbon::now()->format('d/m/Y');
        }
    }

    public function rate($rating)
    {
        $this->score = $rating;
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

    public function save()
    {
        $this->validate([
            'score' => 'required',
        ]);

        auth()->user()->items()->syncWithoutDetaching([$this->item_id => ['score' => $this->score, 'comment' => $this->comment, 'date' => $this->date, 'status_id' => $this->status_id]]);

        return $this->redirect('/');
    }
}

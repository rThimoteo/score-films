<?php

namespace App\Livewire;

use App\Models\Item;
use App\Models\Status;
use App\Models\User;
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
    public $selectedStatus;
    public $hasFinishDate = false;
    public $hasEpisodes = false;
    public $episodes = null;
    public $totalEpisodes = null;

    //Variável para definir se o score será compartilhado entre os usuários
    public $score_compartilhado = true;

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
                $this->date = Carbon::create($data->date)->format('d/m/Y');
            }
            if ($data->status_id) {
                $this->status_id = $data->status_id;
                $this->selectedStatus = Status::find($data->status_id);

                $handler = $this->selectedStatus->handler;
                if ($handler == 'done' || $handler == 'dropped') {
                    $this->hasFinishDate = true;
                }
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

        $item = Item::find($this->item_id);

        if ($item) {
            if (isset($item->episodes) && $item->episodes > 0) {
                $this->hasEpisodes = true;
                $this->totalEpisodes = $item->episodes;
            } else {
                $this->hasEpisodes = false;
                $this->totalEpisodes = null;
            }
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


    public function save()
    {
        if ($this->status_id  == Status::where('handler', Status::LISTA)->first()->id) {
            $this->score = null;
        }

        $itemRating = [
            'score' => $this->score,
            'comment' => $this->comment,
            'status_id' => $this->status_id,
            'actual_episode' => $this->hasEpisodes ? $this->episodes : null,
            'date' => $this->hasFinishDate ? Carbon::createFromFormat('d/m/Y', $this->date)->toDateString() : null
        ];

        if ($this->score_compartilhado) {
            User::all()->map(function ($user) use ($itemRating) {
                $user->items()->syncWithoutDetaching([
                    $this->item_id => $itemRating
                ]);
            });
        } else {
            auth()->user()->items()->syncWithoutDetaching([
                $this->item_id => $itemRating
            ]);
        }
        return $this->redirect('/');
    }

    public function updated($propertyName)
    {
        if ($propertyName === 'status_id') {
            $this->selectedStatus = Status::find($this->status_id);

            $handler = $this->selectedStatus->handler;
            if ($handler == 'done' || $handler == 'dropped') {
                $this->hasFinishDate = true;
            } else {
                $this->hasFinishDate = false;
            }

            if ($handler == 'done') {
                $this->episodes = $this->totalEpisodes;
            }

            $this->date = Carbon::now()->format('d/m/Y');
        }
    }

    public function render()
    {
        return view('livewire.rating', [
            'options' => Status::all()
        ]);
    }
}

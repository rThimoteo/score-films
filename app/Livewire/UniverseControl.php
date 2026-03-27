<?php

namespace App\Livewire;

use App\Models\Item;
use App\Models\Universe;
use Livewire\Component;

class UniverseControl extends Component
{
    public $universes = [];
    public $newUniverse = '';
    public $search = [];

    public function mount()
    {
        $this->reloadUniverses();
    }

    public function reloadUniverses()
    {
        $this->universes = Universe::with(['items' => function ($query) {
            $query->orderBy('name');
        }])->orderBy('name')->get()->keyBy('id')->toArray();
    }

    public function updateUniverse($index)
    {
        $universe = Universe::find($index);

        if (!$universe) {
            return;
        }

        $name = trim($this->universes[$index]['name'] ?? '');

        if ($name === '') {
            return;
        }

        $universe->name = $name;
        $universe->save();

        $this->reloadUniverses();
    }

    public function removeUniverse($index)
    {
        $universe = Universe::find($index);

        if (!$universe) {
            return;
        }

        Item::where('universe_id', $index)->update(['universe_id' => null]);
        $universe->delete();

        unset($this->search[$index]);

        $this->reloadUniverses();
    }

    public function addUniverse()
    {
        $name = trim($this->newUniverse);

        if ($name === '') {
            return;
        }

        Universe::firstOrCreate(['name' => $name]);

        $this->newUniverse = '';
        $this->reloadUniverses();
    }

    public function addItemToUniverse($universeId, $itemId)
    {
        $item = Item::find($itemId);

        if (!$item) {
            return;
        }

        $item->universe_id = $universeId;
        $item->save();

        $this->search[$universeId] = '';
        $this->reloadUniverses();
    }

    public function removeItemFromUniverse($itemId)
    {
        $item = Item::find($itemId);

        if (!$item) {
            return;
        }

        $item->universe_id = null;
        $item->save();

        $this->reloadUniverses();
    }

    public function getSuggestedItems($universeId)
    {
        $term = trim($this->search[$universeId] ?? '');

        if ($term === '') {
            return [];
        }

        return Item::where('name', 'like', '%' . $term . '%')
            ->where(function ($query) use ($universeId) {
                $query->whereNull('universe_id')
                    ->orWhere('universe_id', '!=', $universeId);
            })
            ->orderBy('name')
            ->take(5)
            ->get()
            ->toArray();
    }

    public function render()
    {
        return view('livewire.universe-control');
    }
}

<div class="flex flex-row flex-wrap gap-3 p-4">
    @foreach ($genres as $index => $genre)
        <div class="flex" wire:key="{{ $index }}">
            <input type="text" wire:model.live="genres.{{ $index }}" class="w-24 px-1" />
            <button class="px-0.5" wire:click="updateGenre({{ $index }})">
                <x-fas-check class="w-5 text-lime-400" />
            </button>
            <button class="px-0.5" wire:click="removeGenre({{ $index }})">
                <x-fas-xmark class="w-5 text-red-500" />
            </button>
        </div>
    @endforeach
    <div class="flex">
        <input wire:model="newGenre" type="text" class="w-24 px-1">
        <button class="px-0.5" wire:click="addGenre">
            <x-fas-plus class="w-5 text-blue-500" /></button>
    </div>
</div>

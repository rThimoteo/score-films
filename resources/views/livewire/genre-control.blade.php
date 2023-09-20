<div class="flex flex-row flex-wrap gap-3 p-4">
    @foreach ($genres as $index => $genre)
        <div class="flex border-2 border-violet-600 gap-1 rounded-sm" wire:key="{{ $index }}">
            <input type="text" wire:model.live="genres.{{ $index }}" class="w-24 px-1 bg-transparent text-white" />
            <button title="Atualizar" class="bg-transparent px-0.5 transition ease-in-out hover:scale-125" wire:click="updateGenre({{ $index }})">
                <x-fas-check class="w-5 text-lime-400" />
            </button>
            <button title="Remover" class="bg-transparent px-0.5 transition ease-in-out hover:scale-125" wire:click="removeGenre({{ $index }})">
                <x-fas-xmark class="w-5 text-red-500" />
            </button>
        </div>
    @endforeach
    <div class="flex border-2 border-violet-600 gap-1 rounded-sm">
        <input wire:model="newGenre" type="text" class="w-24 px-1 bg-transparent text-white">
        <button title="Adicionar" class="bg-transparent px-0.5 transition ease-in-out hover:scale-125" wire:click="addGenre">
            <x-fas-plus class="w-5 text-blue-500" /></button>
    </div>
</div>

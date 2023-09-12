<div class="flex flex-col items-center justify-center m-auto">
    <div class="lg:w-10/12 w-full bg-zinc-800 shadow-md rounded-lg overflow-hidden">
        <div class="relative">
            <div class="h-64 bg-cover bg-center"
                style="@if (empty($item->banner_url)) background-color: #a1a1a1; @else background-image: url('{{ $item->banner_url }}') @endif">
            </div>

            <div class="absolute left-0 bottom-0 right-0 top-0 flex items-center justify-center">
                @if (!empty($item->img_url))
                    <img src="{{ $item->img_url }}" class="w-32 h-44 object-cover border-2 rounded-md border-white">
                @else
                    <span class="text-2xl font-bold text-white">{{ $item->name }}</span>
                @endif
            </div>
        </div>
        <div class="flex flex-row">
            <div class="flex flex-col basis-1/2 p-8">
                <button
                    class="flex flex-row @if (!isset($item->parent)) hidden @endif self-start text-sm items-center gap-2 justify-center w-auto rounded-full px-3 py-1 bg-white font-bold hover:bg-gray-300"
                    type="button" wire:click="parentItem"><x-fas-arrow-left
                        class="w-3" />{{ $prevString }}</button>
                <h2 class="text-3xl text-white font-bold mb-3">{{ $item->name }}</h2>
                <p class="text-gray-300">{{ $item->type->name }} @if ($item->year)
                        - ({{ $item->year }})
                    @endif
                </p>
                <div class="flex flex-row gap-2 text-sm mb-4">
                    @foreach ($item->genres as $genre)
                        <span class="text-gray-300">{{ $genre->name }}</span>
                    @endforeach
                </div>
                <span class="text-gray-300 mb-0">Sinopse</span>
                <p class="text-gray-300 text-sm mb-3">{{ $item->description }}</p>

                <div class="flex justify-start gap-3">
                    <a href="/items/{{ $item['id'] }}/edit"
                        class="flex items-center gap-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        <x-fas-edit class="w-5" />Editar</a>
                    <form action="{{ route('items.destroy', $item->id) }}" method="POST" id="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="confirmDelete()"
                            class="flex items-center gap-2 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            Excluir<x-fas-trash class="w-4" /></button>
                    </form>
                </div>
            </div>
            <div class="flex flex-col basis-1/2 p-8">
                <button
                    class="flex flex-row @if (!isset($item->child)) hidden @endif self-end text-sm items-center gap-2 justify-center w-auto rounded-full px-3 py-1 bg-white font-bold hover:bg-gray-300"
                    type="button" wire:click="childItem">{{ $nextString }}<x-fas-arrow-right
                        class="w-3" /></button>
                <livewire:rating :itemid="$item->id" />
            </div>
        </div>
    </div>
</div>

<script>
    function confirmDelete() {
        if (confirm('Tem certeza que deseja excluir este item?')) {
            document.getElementById('delete-form').submit();
        } else {
            event.preventDefault();
        }
    }
</script>

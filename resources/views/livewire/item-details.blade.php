<div class="flex flex-col items-center justify-center m-auto">
    <div class="lg:w-10/12 w-full bg-white shadow-md rounded-lg overflow-hidden">
        <div class="relative">
            <div class="h-64 bg-cover bg-center" style="background-image: url('{{ $item->banner_url }}')"></div>
            <div class="absolute left-0 bottom-0 right-0 top-0 flex items-center justify-center">
                <img src="{{ $item->img_url }}" alt="Sem Imagem"
                    class="w-32 object-cover border-2 rounded-md border-white">
            </div>
        </div>
        <div class="flex flex-row">
            <div class="flex flex-col basis-1/2 p-8">
                <h2 class="text-3xl font-bold mb-2">{{ $item->name }}</h2>
                <p class="text-gray-600 mb-3">{{ $item->type->name }} @if ($item->year)
                        - ({{ $item->year }})
                    @endif
                </p>
                <p class="text-gray-600 mb-3">{{ $item->description }}</p>

                <div class="flex justify-start gap-3">
                    <a href="/items/{{ $item['id'] }}/edit"
                        class="flex items-center gap-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        <x-fas-edit class="w-5"/>Editar</a>
                    <form action="{{ route('items.destroy', $item->id) }}" method="POST" id="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="confirmDelete()"
                            class= "flex items-center gap-2 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            Excluir<x-fas-trash class="w-4"/></button>
                    </form>
                </div>
            </div>
            <div class="flex flex-col basis-1/2 p-8">
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

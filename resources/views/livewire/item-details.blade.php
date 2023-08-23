<div class="flex flex-col items-center justify-center m-auto">
    <div class="max-w-3xl bg-white shadow-md rounded-lg overflow-hidden">
        <div class="relative">
            <div class="h-64 bg-cover bg-center" style="background-image: url('{{ $item->banner_url }}')"></div>
            <div class="absolute top-0 left-0 right-0 bottom-0 flex items-center justify-center">
                <img src="{{ $item->img_url }}" alt="Imagem do Item"
                    class="w-32 h-32 object-cover rounded-full border-4 border-white">
            </div>
        </div>
        <div class="p-8">
            <h2 class="text-3xl font-bold mb-2">{{ $item->name }}</h2>
            @if ($item->year)
                <p class="text-sm text-gray-600 mb-4">({{ $item->year }})</p>
            @endif
            <p class="text-gray-600 mb-4">{{ $item->description }}</p>
            <p class="text-gray-600 mb-4">Tipo: {{ $item->type->name }}</p>
            <!-- Outras informações do item aqui -->
        </div>
        <a href="/items/{{ $item['id'] }}/edit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</a>
    </div>
</div>

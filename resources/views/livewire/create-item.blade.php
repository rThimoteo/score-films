<div class="text-white flex justify-center self-center">
    <form wire:submit="save" class="flex flex-col w-full lg:w-80 gap-4">
        <div>
            <label for="name" class="block mb-1 text-sm font-medium text-white">Nome</label>
            <input type="text" wire:model="name" id="name"
                class="text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                placeholder="Título" required>
        </div>
        <div>
            <label for="type_id" class="block mb-1 text-sm font-medium text-white">Tipo de Conteúdo</label>
            <select id="type_id" required wire:model="type_id"
                class="text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                <option selected>Escolha o tipo</option>
                @foreach ($options as $option)
                    <option value="{{ $option['id'] }}">{{ $option['name'] }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="description" class="block mb-1 text-sm font-medium text-white">Sinopse</label>
            <textarea id="description" wire:model="description" rows="2"
                class="block p-2.5 w-full text-sm rounded-lg border bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                placeholder="Resumo ou mais detalhes sobre a obra..."></textarea>

        </div>
        <div>
            <label for="img_url" class="block mb-1 text-sm font-medium text-white">URL da
                capa</label>
            <input type="text" wire:model="img_url" id="img_url"
                class="text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                placeholder="Imagem exibida no catálogo">
        </div>
        <div>
            <label for="banner_url" class="block mb-1 text-sm font-medium text-white">URL do
                Banner</label>
            <input type="text" wire:model="banner_url" id="banner_url"
                class="text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                placeholder="Imagem de fundo">
        </div>
        <div>
            <label for="year" class="block mb-1 text-sm font-medium text-white">Ano de
                Lançamento</label>
            <input type="number" wire:model="year" id="year"
                class="text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                placeholder="2077">
        </div>
        <button type="submit"
            class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Salvar</button>
    </form>
</div>

<div class="text-white flex justify-center self-center">
    <form wire:submit="update" class="w-full flex flex-col justify-end">
        <div class="flex flex-row w-full gap-4">
            <div class="flex flex-col basis-1/2 px-8 py-6 gap-8">
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
                        @foreach ($options as $option)
                            <option @if ($item->type_id == $option['id']) selected @endif value="{{ $option['id'] }}">
                                {{ $option['name'] }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="description" class="block mb-1 text-sm font-medium text-white">Sinopse</label>
                    <textarea id="message" wire:model="description" rows="4"
                        class="block p-2.5 w-full text-sm rounded-lg border bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Resumo ou mais detalhes sobre a obra..."></textarea>
                </div>
            </div>
            <div class="flex flex-col basis-1/2 px-8 py-6 gap-8">
                <livewire:select-genres :item="$item" />
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
            </div>
        </div>
        <div class="flex justify-end px-8 mt-4">
            <button type="submit"
                class="flex gap-2 items-center text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
                <x-fas-save class="w-5" /> Salvar</button>
        </div>
    </form>
</div>

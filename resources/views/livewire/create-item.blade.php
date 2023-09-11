<div class="text-white flex justify-center self-center">
    <form wire:submit="save" class="w-full flex flex-col justify-end">
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
                            <option value="{{ $option['id'] }}">
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
                <div class="flex items-center gap-2 w-fit" wire:click="toggleHasParent">
                    <input id="has_parent" type="checkbox" wire:model="hasParent"
                        class="h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-blue-500 checked:bg-blue-500 checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ml-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ml-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent dark:border-neutral-600 dark:checked:border-blue-500 dark:checked:bg-blue-500 dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0. 4)] dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]" />
                    <label for="has_parent" class="text-white">É uma sequência?</label>
                </div>
                @if ($hasParent)
                    <div id='search' class="flex flex-row items-center gap-2" x-data="{ open: false }"
                        @click.away="open = false">
                        <label for="search">De:</label>
                        <input type="text"
                            class="w-full relative p-2.5 text-sm rounded-lg border bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                            wire:model.live.debounce.500ms="search" @focus="open = true" placeholder="Pesquisar...">
                        <div x-show="open" class="relative">
                            <ul class="absolute mt-1 border border-gray-300 rounded-md bg-white shadow-sm">
                                @foreach ($items as $parent)
                                    <li class="text-zinc-700 cursor-pointer px-4 py-2 hover:bg-gray-100"
                                        wire:click="selectParent({{ json_encode($parent) }})" @click="open = false">
                                        {{ $parent['name'] }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
            </div>
            <div class="flex flex-col basis-1/2 px-8 py-6 gap-8">
                <div>
                    <span class="block mb-1 text-sm font-medium text-white">Gêneros: </span>
                    <div class="flex flex-row gap-2 items-center">
                        <div class="bg-gray-700 flex rounded-lg px-2 text-sm items-center h-10 w-full truncate">
                            @foreach ($selectedGenres as $key => $genre)
                                <span class="mx-1" wire:key="{{ $genre['id'] }}">{{ $genre['name'] }}</span>
                            @endforeach
                        </div>
                        <div x-data="{ open: false }">
                            <button @click="open = true"
                                class="bg-blue-500 hover:bg-blue-700 text-white text-sm py-2 px-3 rounded-lg"
                                type="button">Editar...</button>

                            @teleport('body')
                                <div class="fixed flex top-0 bottom-0 justify-center z-50 w-full max-h-full bg-opacity-70 bg-black"
                                    x-show="open">
                                    <div
                                        class="overflow-auto text-white my-auto flex flex-col mx-auto border-2 rounded-lg w-[30rem] max-h-[25rem] bg-gray-700 p-4 relative">
                                        <h1 class="font-bold mb-2">Gêneros</h1>
                                        <div class="overflow-y-auto">
                                            <div class="flex flex-row flex-wrap mt-4 gap-2">
                                                @foreach ($allGenres as $genre)
                                                    <div class="flex items-center gap-1">
                                                        <input id="genre-{{ $genre->id }}" type="checkbox"
                                                            wire:model="genres" value="{{ $genre->id }}"
                                                            class="h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-blue-500 checked:bg-blue-500 checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ml-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ml-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent dark:border-neutral-600 dark:checked:border-blue-500 dark:checked:bg-blue-500 dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0. 4)] dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]" />
                                                        <label for="genre-{{ $genre->id }}"
                                                            class="">{{ $genre->name }}</label>
                                                    </div>
                                                @endforeach
                                                <div x-data="{ open: true }">
                                                    <div x-show="open" @click="open = false"
                                                        class="flex items-center cursor-pointer rounded-full bg-slate-500 px-2 gap-1 hover:bg-slate-600">
                                                        <x-fas-plus class="w-3" />
                                                        Novo
                                                    </div>
                                                    <div x-show="!open" class="flex items-center rounded-full">
                                                        <input class="rounded-full bg-slate-500 px-2 w-32 h-7"
                                                            type="text" wire:model="new_genre" id="new_genre" />
                                                        <button type="button" @click="open = true"
                                                            wire:click="createGenre()"
                                                            class=" rounded-full -ml-7 bg-cyan-800 p-2 hover:bg-cyan-950">
                                                            <x-fas-check class="w-3" />
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end mt-3 gap-3">
                                            <button @click="open = false" wire:click="cancelSelect()"
                                                class="rounded-2xl px-4 py-1 bg-red-600 font-bold hover:bg-red-500"
                                                type="button">Cancelar</button>
                                            <button @click="open = false"
                                                class="rounded-2xl px-4 py-1 bg-blue-700 font-bold hover:bg-blue-600"
                                                type="button" wire:click="confirmGenres()">Confirmar</button>
                                        </div>
                                        <div class="absolute right-2 top-2 p-1 hover:text-zinc-300 cursor-pointer"
                                            @click="open = false" wire:click="cancelSelect()">
                                            <x-fas-x class="w-3" />
                                        </div>
                                    </div>
                                </div>
                            @endteleport
                        </div>
                    </div>
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
            </div>
        </div>
        <div class="flex justify-end px-8 mt-4">
            <button type="submit"
                class="flex gap-2 items-center text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
                <x-fas-save class="w-5" /> Salvar</button>
        </div>
    </form>
</div>

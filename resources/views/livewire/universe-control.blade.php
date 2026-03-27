<div class="p-4 text-white">
    <div class="mb-6 flex w-full max-w-md border-2 border-violet-600 rounded-sm">
        <input wire:model="newUniverse" type="text" class="w-full px-3 py-2 bg-transparent text-white"
            placeholder="Novo universo">
        <button title="Adicionar" class="bg-transparent px-3 transition ease-in-out hover:scale-110"
            wire:click="addUniverse">
            <x-fas-plus class="w-5 text-blue-500" />
        </button>
    </div>

    <div class="grid gap-4">
        @foreach ($universes as $index => $universe)
            <div class="rounded-lg border border-zinc-700 bg-zinc-800 p-4" wire:key="universe-{{ $universe['id'] }}">
                <div class="flex flex-col gap-3 lg:flex-row lg:items-center lg:justify-between">
                    <div class="flex items-center gap-2">
                        <input type="text" wire:model.live="universes.{{ $universe['id'] }}.name"
                            class="min-w-0 rounded-md border border-violet-600 bg-transparent px-3 py-2 text-white" />
                        <button title="Atualizar" class="bg-transparent px-0.5 transition ease-in-out hover:scale-125"
                            wire:click="updateUniverse({{ $universe['id'] }})">
                            <x-fas-check class="w-5 text-lime-400" />
                        </button>
                        <button title="Remover" class="bg-transparent px-0.5 transition ease-in-out hover:scale-125"
                            wire:click="removeUniverse({{ $universe['id'] }})"
                            onclick="return confirm('Tem certeza que deseja remover este universo?')">
                            <x-fas-xmark class="w-5 text-red-500" />
                        </button>
                    </div>

                    <span class="text-sm text-zinc-300">
                        {{ count($universe['items']) }} {{ count($universe['items']) === 1 ? 'item' : 'itens' }}
                    </span>
                </div>

                <div class="mt-4" x-data="{ open: false }" x-on:click.away="open = false">
                    <label class="mb-1 block text-sm font-medium text-white">Adicionar item</label>
                    <input type="text"
                        class="w-full rounded-lg border border-gray-600 bg-gray-700 p-2.5 text-sm text-white placeholder-gray-400 focus:border-blue-500 focus:ring-blue-500"
                        wire:model.live.debounce.500ms="search.{{ $universe['id'] }}" @focus="open = true"
                        placeholder="Pesquisar item...">

                    @php
                        $suggestedItems = $this->getSuggestedItems($universe['id']);
                    @endphp

                    @if (!empty($suggestedItems))
                        <div x-show="open" class="relative z-10">
                            <ul class="mt-1 rounded-md border border-gray-300 bg-white shadow-sm">
                                @foreach ($suggestedItems as $item)
                                    <li class="cursor-pointer px-4 py-2 text-zinc-700 hover:bg-gray-100"
                                        wire:click="addItemToUniverse({{ $universe['id'] }}, {{ $item['id'] }})"
                                        x-on:click="open = false">
                                        {{ $item['name'] }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>

                <div class="mt-4">
                    <h2 class="mb-2 text-sm font-bold uppercase tracking-wide text-zinc-300">Itens do universo</h2>

                    @if (count($universe['items']) > 0)
                        <div class="flex flex-wrap gap-2">
                            @foreach ($universe['items'] as $item)
                                <div class="flex items-center gap-2 rounded-md border border-violet-600 px-3 py-2">
                                    <a href="/items/{{ $item['id'] }}" wire:navigate
                                        class="transition hover:text-violet-300">
                                        {{ $item['name'] }}
                                    </a>
                                    <button title="Remover do universo"
                                        class="bg-transparent px-0.5 transition ease-in-out hover:scale-125"
                                        wire:click="removeItemFromUniverse({{ $item['id'] }})">
                                        <x-fas-xmark class="w-4 text-red-500" />
                                    </button>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-sm text-zinc-400">Nenhum item vinculado a este universo.</p>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>

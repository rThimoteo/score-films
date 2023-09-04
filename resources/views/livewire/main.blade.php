<div class="p-10 pb-2">
    <div class="absolute top-2 left-1/2 transform -translate-x-1/2">
        <input class="rounded-lg bg-opacity-50 border-zinc-600 border-2 text-zinc-300 bg-zinc-700 py-0.5 px-2"
            type="text" wire:model.live.debounce.500ms="filtro" placeholder="Buscar...">
    </div>
    <div class="flex flex-row gap-7 flex-wrap">
        @foreach ($items as $item)
            <a href="/items/{{ $item['id'] }}"
                class="w-44 h-60 relative rounded-md transition duration-500 ease-in-out hover:scale-105 cursor-pointer"
                title="{{ $item['name'] }}"
                style="
                background-image: url({{ $item['img_url'] }});
                background-color: #dfdfdf;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
              ">
                <div class="flex justify-between pt-1 px-2 items-center">
                    <div>
                        @if (isset($item->status))
                            @switch($item->status)
                                @case('consuming')
                                    <x-fas-eye class="w-6 text-purple-400 drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]" />
                                @break

                                @case('priority')
                                    <x-fas-exclamation-triangle
                                        class="w-6 text-teal-500 drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]" />
                                @break

                                @case('todo')
                                    <x-fas-clock class="w-6 text-zinc-200 drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]" />
                                @break

                                @case('done')
                                    <x-fas-check class="w-6 text-lime-600 drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]" />
                                @break

                                @case('dropped')
                                    <x-fas-xmark class="w-6 text-black drop-shadow-[0_1.2px_1.2px_rgba(255,255,255,0.8)]" />
                                @break

                                @default
                            @endswitch
                        @endif
                    </div>

                    <div class="flex justify-end">
                        @if (isset($item->users->first()->pivot->score) && $item->users->first()->pivot->score > 0)
                            <span
                                class="drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)] text-white text-xl font-bold">{{ $item->users->first()->pivot->score }}</span>
                            <x-fas-star class="w-6 text-yellow-500 drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]" />
                        @endif
                    </div>
                </div>
                <div
                    class="px-2 rounded-b-md w-full absolute bottom-0 text-center truncate text-zinc-200 bg-gradient-to-t from-zinc-950/75 from-50% pb-2 pt-5">
                    <span class="font-bold drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]">{{ $item['name'] }}</span>
                </div>
            </a>
        @endforeach
        <div wire:loading class="my-auto">
            <x-fas-circle-notch class="mx-auto animate-spin w-10 text-sky-800" />
            <span class="mx-auto text-white">Carregando...</span>
        </div>
    </div>
</div>

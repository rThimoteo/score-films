<div>
    <div class="flex justify-end px-10 pt-4 pb-2" x-data="{ open: true }">
        <button x-on:click="open = true" class="bg-blue-500 hover:bg-blue-700 text-white text-sm py-2 px-4 rounded-lg"
            type="button">Filtros</button>

        @teleport('body')
            <div class="fixed flex top-0 bottom-0 justify-center z-50 w-full max-h-full bg-opacity-70 bg-black"
                x-show="open">
                <div
                    class="overflow-auto text-white my-auto flex flex-col mx-auto border-2 rounded-lg w-[30rem] max-h-[25rem] bg-gray-700 p-4 relative">
                    <div id="genres" class="bg-gray-800 mt-4 p-3 rounded-xl">
                        <h1 class="font-bold mb-2">Gêneros</h1>
                        <div class="overflow-y-auto">
                            <div class="flex flex-row flex-wrap gap-2">
                                @foreach ($allGenres as $genre)
                                    <div class="flex items-center gap-1">
                                        <input id="genre-{{ $genre->id }}" type="checkbox" wire:model="genres"
                                            value="{{ $genre->id }}"
                                            class="h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-blue-500 checked:bg-blue-500 checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ml-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ml-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent dark:border-neutral-600 dark:checked:border-blue-500 dark:checked:bg-blue-500 dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0. 4)] dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]" />
                                        <label for="genre-{{ $genre->id }}" class="">{{ $genre->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div id="score_status" class="p-3 rounded-xl flex items-center justify-between bg-gray-800 mt-4">
                        <div class="flex items-center gap-2">
                            <h1 class="font-bold">Nota:</h1>
                            <select wire:model="score_filter" class="rounded-lg p-1 bg-transparent">
                                <option selected class="text-black" value="">Todas</option>
                                @for ($i = 1; $i <= 10; $i++)
                                    <option class="text-black" value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>

                        <div class="flex items-center gap-2">
                            <h1 class="font-bold">Status:</h1>
                            <select wire:model="status_filter" class="rounded-lg p-1 bg-transparent">
                                <option selected class="text-black" value="">Todos</option>
                                @foreach ($statuses as $status)
                                    <option class="text-black" value="{{ $status->id }}">{{ $status->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="flex items-center gap-2 bg-gray-800 mt-4 p-3 rounded-xl">
                        <h1 class="font-bold">Visto em:</h1>
                        <div class="flex">
                            <select name="month" wire:model="month" class="rounded-lg p-1 bg-transparent" id="month">
                                <option selected class="text-black" value="">Mês</option>
                                @for ($i = 1; $i <= 12; $i++)
                                    <option class="text-black" value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                            <select name="year" wire:model="year" id="year" class="rounded-lg p-1 bg-transparent">
                                <option selected class="text-black" value="">Ano</option>
                                @foreach ($validYears as $year)
                                    <option class="text-black" value="{{ $year }}">{{ $year }}</option>
                                @endforeach
                            </select>
                        </div>
                        </select>
                    </div>
                    <div class="flex justify-end mt-3 gap-3">
                        <button x-on:click="open = false" wire:click="cancelFilters()"
                            class="rounded-2xl px-4 py-1 bg-yellow-600 font-bold hover:bg-yellow-700"
                            type="button">Limpar</button>
                        <button x-on:click="open = false"
                            class="rounded-2xl px-4 py-1 bg-blue-700 font-bold hover:bg-blue-800" type="button"
                            wire:click="confirmFilter()">Confirmar</button>
                    </div>
                    <div class="absolute right-2 top-2 p-1 hover:text-zinc-300 cursor-pointer" x-on:click="open = false">
                        <x-fas-x class="w-3" />
                    </div>
                </div>
            </div>
        @endteleport
    </div>
    <div class="flex flex-row gap-7 flex-wrap pb-2 px-10">
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

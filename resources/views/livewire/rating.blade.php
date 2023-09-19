<div>
    <div class="flex flex-col gap-2 mb-3">
        <div>
            <div class="flex justify-between">
                <div>
                    <label for="status_id" class="block mb-1 text-sm font-medium text-white">Status</label>
                    <select id="status_id" required wire:model.live="status_id"
                        class="text-sm rounded-lg block w-full p-2.5 bg-gray-100 border-gray-400 placeholder-gray-700 focus:ring-blue-500 focus:border-blue-500">
                        @foreach ($options as $option)
                            <option value="{{ $option['id'] }}">{{ $option['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="type_id" class="block mb-1 text-sm font-medium text-white">Nota Compartilhada</label>
                    @if ($score_compartilhado)
                        <x-fas-toggle-on wire:click="invertSharedScore()" class="w-8 text-green-500 drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]" />
                    @else
                        <x-fas-toggle-off wire:click="invertSharedScore()" class="w-8 text-red-600 drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]" />
                    @endif
                </div>
            </div>
            @if ($hasEpisodes)
                <label for="episodes" class="mt-2 mb-1 block text-sm font-medium text-white">Episódio Atual</label>
                <div class="flex items-center gap-1">
                    <input name="episodes" wire:model.live="episodes" type="number"
                        class="text-end block p-1.5 w-16 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400" />
                    <span class="text-2xl text-white font-bold">/ {{ $totalEpisodes }}</span>
                </div>
            @endif

            @if ($hasFinishDate)
                <label for="date" class="mt-2 mb-1 block text-sm font-medium text-white">Data de Conclusão</label>
                <input name="date" wire:model="date" format="DD/MM/YYYY" placeholder="DD/MM/YYYY"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400" />
            @endif
        </div>
        <div class="rating flex flex-row mt-2">
            @for ($i = 1; $i <= 10; $i++)
                <x-fas-star
                    class="w-8 {{ $temp_score >= $i ? 'star-temp' : ($score >= $i ? 'star-filled' : 'star-empty') }} star h-auto my-auto"
                    wire:click="rate({{ $i }})" wire:mouseover="highlight({{ $i }})"
                    wire:mouseout="resetHighlight" />
            @endfor
        </div>
    </div>
    <div>
        <form wire:submit="save">
            <label for="comment" class="block mb-1 text-sm font-medium text-white">Comentário</label>
            <textarea id="comment" wire:model="comment" rows="2"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400"
                placeholder="Diga o que achou..."></textarea>

            <div class="mt-3 flex justify-end">
                <button type="submit"
                    class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Salvar</button>
            </div>
        </form>
    </div>
</div>

<div>
    <div class="flex flex-col gap-2 mb-3">
        <div>
            <label for="status_id" class="block mb-1 text-sm font-medium text-white">Status</label>
            <select id="status_id" required wire:model.live="status_id"
                class="text-sm rounded-lg block w-full p-2.5 bg-gray-100 border-gray-400 placeholder-gray-700 focus:ring-blue-500 focus:border-blue-500">
                @foreach ($options as $option)
                    <option value="{{ $option['id'] }}">{{ $option['name'] }}</option>
                @endforeach
            </select>
            @if ($hasFinishDate)
                <input name="date" wire:model="date" format="DD/MM/YYYY" placeholder="DD/MM/YYYY"
                    class="my-2 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400" />
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

            <div class="flex justify-end">
                <button type="submit"
                    class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Salvar</button>
            </div>
        </form>
    </div>
</div>

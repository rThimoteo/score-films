<div class="flex gap-5">
    <a wire:click="setCategory('all')"
        class="transition ease-in-out hover:scale-110 hover:text-violet-700 duration-300 @if ($activeCategory == 'all') text-violet-700 font-bold @endif"
        href="/" wire:navigate>Todos</a>
    @foreach ($categories as $category)
        <a wire:click="setCategory('{{ $category->handler }}')"
            class="transition ease-in-out hover:scale-110 hover:text-violet-700 duration-300 @if ($activeCategory == $category->handler) text-violet-700 font-bold @endif"
            href="/catalog/{{ $category->handler }}" wire:navigate>{{ $category->name }}</a>
    @endforeach
</div>

<div class="flex gap-5">
    <a class="transition ease-in-out hover:scale-110 hover:text-white duration-300" href="/" wire:navigate>Todos</a>
    @foreach ($categories as $category)
        <a class="transition ease-in-out hover:scale-110 hover:text-white duration-300" href="/catalog/{{ $category->handler }}"
            wire:navigate>{{ $category->name }}</a>
    @endforeach
</div>

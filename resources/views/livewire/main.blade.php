<div class="p-10">
    <div class="flex flex-row gap-7">
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
                <div class="flex justify-center pt-1">
                    <x-fas-star class="w-6 text-yellow-500 drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]" />
                    <x-fas-star class="w-6 text-yellow-500 drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]" />
                    <x-fas-star class="w-6 text-yellow-500 drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]" />
                    <x-fas-star class="w-6 text-yellow-500 drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]" />
                    <x-fas-star class="w-6 text-yellow-500 drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]" />
                    <x-fas-star class="w-6 text-yellow-500 drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]" />
                </div>
                <div
                    class="px-2 rounded-b-md w-full absolute bottom-0 text-center truncate text-zinc-200 bg-gradient-to-t from-zinc-950/75 from-50% pb-2 pt-5">
                    <span class="font-bold drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,0.8)]">{{ $item['name'] }}</span>
                </div>
            </a>
        @endforeach
    </div>
</div>

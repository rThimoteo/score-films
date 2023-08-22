<div class="p-10">
    <div class="flex flex-row gap-7">
        @foreach ($items as $item)
            <div class="w-44 h-60 relative rounded-md transition duration-500 ease-in-out hover:scale-105 cursor-pointer"
                style="
                background-image: url({{ $item['img_url'] }});
                background-color: #dfdfdf;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
              ">
                <div
                    class="w-full absolute bottom-0 text-center truncate text-zinc-200 bg-gradient-to-t from-zinc-950/75 from-50% pb-2 pt-5">
                    <span class="font-bold">{{ $item['name'] }}</span>
                </div>
            </div>
        @endforeach
    </div>
</div>

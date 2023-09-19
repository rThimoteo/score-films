<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @livewireStyles()

    <title>New Tomatoes</title>

    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

</head>

<body class="bg-zinc-900">
    <nav class="flex justify-between bg-gradient-to-b from-zinc-950 from-50% pt-2 pb-3 text-gray-300 px-2">
        <livewire:menu />

        <livewire:search-input />

        <div class="flex items-center gap-3">
            <a class="flex items-center gap-1 border-2 rounded-lg py-1 px-2 transition ease-in-out hover:scale-105 hover:text-white duration-300"
                href="/item/create" wire:navigate>
                <x-fas-plus class="w-4" />
                <span class="">Adicionar</span>
            </a>
            @auth
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="nav-link btn btn-link">Logout</button>
                </form>
            @endauth
        </div>
    </nav>
    <div>
        {{ $slot }}
    </div>
</body>

<script>
    document.getElementById('logout-form').addEventListener('submit', function(event) {
        var confirmation = confirm('Tem certeza que deseja fazer logout?');
        if (!confirmation) {
            event.preventDefault();
        }
    });
</script>

</html>

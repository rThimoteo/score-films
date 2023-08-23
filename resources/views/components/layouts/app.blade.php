<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

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
        <div class="flex gap-5">
            <a class="transition ease-in-out hover:scale-110 hover:text-white duration-300" href="/"
                wire:navigate>Todos</a>
            <a class="transition ease-in-out hover:scale-110 hover:text-white duration-300" href="/filmes"
                wire:navigate>Filmes</a>
            <a class="transition ease-in-out hover:scale-110 hover:text-white duration-300" href="/series"
                wire:navigate>Séries</a>
            <a class="transition ease-in-out hover:scale-110 hover:text-white duration-300" href="/jogos"
                wire:navigate>Jogos</a>
        </div>
        <a class="flex items-center gap-1 border-2 rounded-lg py-1 px-2 transition ease-in-out hover:scale-105 hover:text-white duration-300" href="/create-item" wire:navigate>
            <x-fas-plus class="w-4"/>
            <span class="">Adicionar</span>
        </a>
    </nav>
    {{ $slot }}
</body>

</html>

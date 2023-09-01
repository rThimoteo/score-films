<!DOCTYPE html>
<html>

<head>
    @vite('resources/css/app.css')
    <title>Login</title>
</head>

<body class="bg-zinc-900 text-white justify-center flex">
    <div class="mt-40 border-4 rounded-lg w-max text-center p-8 border-indigo-400 flex flex-col gap-5 shadow-purple-400 shadow-2xl">
        <h2 class="text-3xl font-bold text-indigo-400">Não é mais uma Lista!</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login.submit') }}" method="POST">
            @csrf

            <div class="flex flex-col text-left mb-5">
                <label for="username">Usuário</label>
                <input type="username" class="bg-zinc-800 rounded-md text-white border-1 border-zinc-300 p-2" name="username" id="username" required>
            </div>

            <div class="flex flex-col text-left mb-8">
                <label for="password">Senha</label>
                <input type="password" class="bg-zinc-800 rounded-md text-white border-1 border-zinc-300 p-2" name="password" id="password" required>
            </div>

            <button class="rounded-2xl px-4 py-3 bg-violet-500 font-bold hover:bg-violet-700" type="submit">Penetrar</button>
        </form>
    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preciso Economizar Da Silva</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-900 text-white">
    <div class="min-h-screen flex flex-col">
        <nav class="bg-gray-800 p-4">
            <div class="container mx-auto flex justify-between items-center">
                <a href="{{ route('gastos.index') }}" class="text-xl font-bold">Gastos</a>
                <a href="{{ route('gastos.create') }}" class="text-sm text-blue-400 hover:text-blue-600">Cadastrar Novo Gasto</a>
            </div>
        </nav>

        <main class="flex-grow">
            @yield('content')
        </main>
    </div>
</body>
</html>

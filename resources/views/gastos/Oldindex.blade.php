<!DOCTYPE html>
<html lang="pt-BR" class="">
<head>
    <meta charset="UTF-8">
    <title>Meus Gastos</title>
</head>
<body class="bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-gray-100 min-h-screen">

    <div class="container mx-auto p-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Controle de Gastos 💸</h1>
            <button onclick="toggleTheme()" class="bg-gray-800 dark:bg-yellow-400 dark:text-black text-white px-4 py-2 rounded">
                Alternar Tema
            </button>
        </div>

        @if(session('success'))
            <div class="bg-green-100 text-green-800 dark:bg-green-700 dark:text-white px-4 py-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="flex justify-end mb-4">
            <a href="{{ route('gastos.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded">
                + Novo Gasto
            </a>
        </div>

        <table class="w-full bg-white dark:bg-gray-800 rounded shadow-md overflow-hidden">
            <thead class="bg-blue-600 text-white dark:bg-blue-700">
                <tr>
                    <th class="px-4 py-2 text-left">Descrição</th>
                    <th class="px-4 py-2 text-left">Valor</th>
                    <th class="px-4 py-2 text-left">Data</th>
                    <th class="px-4 py-2 text-left">Categoria</th>
                    <th class="px-4 py-2">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($gastos as $gasto)
                    <tr class="border-t border-gray-200 dark:border-gray-700">
                        <td class="px-4 py-2">{{ $gasto->descricao }}</td>
                        <td class="px-4 py-2">R$ {{ number_format($gasto->valor, 2, ',', '.') }}</td>
                        <td class="px-4 py-2">{{ \Carbon\Carbon::parse($gasto->data)->format('d/m/Y') }}</td>
                        <td class="px-4 py-2">{{ $gasto->categoria }}</td>
                        <td class="px-4 py-2 text-center flex gap-2">
                            <a href="{{ route('gastos.edit', $gasto->id) }}" class="text-blue-600 dark:text-blue-400 hover:underline">Editar</a>
                            <form action="{{ route('gastos.destroy', $gasto->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 dark:text-red-400 hover:underline">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center px-4 py-4 text-gray-500 dark:text-gray-400">Nenhum gasto cadastrado ainda.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</body>
</html>

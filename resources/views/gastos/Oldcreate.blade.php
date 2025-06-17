@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-semibold mb-4">Cadastrar Novo Gasto</h1>

        @if(session('success'))
            <div class="bg-green-200 text-green-800 p-4 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('gastos.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="descricao" class="block text-sm font-medium text-gray-700">Descrição</label>
                <input type="text" id="descricao" name="descricao" class="mt-1 p-2 block w-full border border-gray-300 rounded text-gray-700" required>
            </div>

            <div class="mb-4">
                <label for="valor" class="block text-sm font-medium text-gray-700">Valor</label>
                <input type="number" id="valor" name="valor" class="mt-1 p-2 block w-full border border-gray-300 rounded text-gray-700" step="0.01" required>
            </div>

            <div class="mb-4">
                <label for="data" class="block text-sm font-medium text-gray-700">Data</label>
                <input type="date" id="data" name="data" class="mt-1 p-2 block w-full border border-gray-300 rounded text-gray-700" required>
            </div>

            <div class="mb-4">
                <label for="categoria" class="block text-sm font-medium text-gray-700">Categoria</label>
                <input type="text" id="categoria" name="categoria" class="mt-1 p-2 block w-full border border-gray-300 rounded text-gray-700" required>
            </div>

<button type="submit" class="bg-blue-500 text-black px-4 py-2 rounded hover:bg-yellow-500">Salvar</button>
        </form>
    </div>
@endsection

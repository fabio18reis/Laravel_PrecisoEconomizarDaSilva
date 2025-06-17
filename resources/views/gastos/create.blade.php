@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-semibold mb-4">Cadastrar Novo Gasto</h1>
    <form action="{{ route('gastos.store') }}" method="POST">
        @csrf


        <!--  <div class="mb-4">
            <label for="descricao" class="block text-sm font-medium text-gray-700">Descrição</label>
            <input type="text" id="descricao" name="descricao"
                class="mt-1 p-2 block w-full border border-gray-300 rounded text-gray-700" required>
        </div>
-->
        <x-adminlte-input type="text" name="descricao" label="Descrição do Gasto" id="descricao" placeholder="Descrição"
            label-class="text-lightblue">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-comment text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <!--

        <div class="mb-4">
            <label for="valor" class="block text-sm font-medium text-gray-700">Valor</label>
            <input type="number" id="valor" name="valor"
                class="mt-1 p-2 block w-full border border-gray-300 rounded text-gray-700" step="0.01" required>
        </div>

        -->

        <x-adminlte-input name="valor" label="Valor Gasto em Dinheiro" id="valor" placeholder="Valor em Dinheiro"
            label-class="text-lightblue">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-money-bill text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <!--
        <div class="mb-4">
            <label for="data" class="block text-sm font-medium text-gray-700">Data</label>
            <input type="date" id="data" name="data"
                class="mt-1 p-2 block w-full border border-gray-300 rounded text-gray-700" required>
        </div> -->



        <x-adminlte-input type="date" name="data" label="Data" id="data" placeholder="Data"
            label-class="text-lightblue ">
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-calendar text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>

        <!--
        <div class="mb-4">
            <label for="categoria" class="block text-sm font-medium text-gray-700">Categoria</label>
            <input type="text" id="categoria" name="categoria"
                class="mt-1 p-2 block w-full border border-gray-300 rounded text-gray-700" required>
        </div>
        -->

        <x-adminlte-select2 name="categoria" igroup-size="lg" id="categoria" label-class="text-lightblue"
            data-placeholder="Select an option...">
            <x-slot name="prependSlot">
                <div class="input-group-text bg-gradient-info">
                    <i class="fa-solid fa-receipt"></i>
                </div>
            </x-slot>
            <x-adminlte-options :options="['Comida'=>'Comida', 'Roupas' => 'Roupas', 'Uber' => 'Uber']" placeholder="Selecione uma caregoria do Gasto" />
        </x-adminlte-select2>


       <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success" icon="fas fa-lg fa-save"/>
    </form>
</div>
@php



@endphp

@stop

@section('css')
{{-- Add here extra stylesheets --}}
{{--
<link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop

<?php

use App\Http\Controllers\GastoController;
use Illuminate\Support\Facades\Route;



Route::resource('gastos', GastoController::class);
Route::get('/home', [GastoController::class, 'index'])->name ('home'); //Página inicial
Route::get('/gastos/create', [GastoController::class, 'create'])->name ('gastos.create'); //Formulário
Route::post('/gastos', [GastoController::class, 'store'])->name ('gastos.store');


Route::get('/gastos/{id}/edit', [GastoController::class, 'edit'])->name ('gastos.edit'); //Formulário de Edição

Route::put('/gastos/{id}', [GastoController::class, 'update'])->name ('gastos.update'); //Update no banco

Route::delete('/gastos/{id}', [GastoController::class,'delete'])->name ('gastos.destroy');

Auth::routes();

Route::get('/CreateGastos', function(){
    return view('gastos.create');
});

Route::get('/admin/settings', function(){
    return view('auth/passwords/reset');
});

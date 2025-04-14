<?php

use App\Http\Controllers\GastoController;
use Illuminate\Support\Facades\Route;



Route::resource('gastos', GastoController::class);
Route::get('/', [GastoController::class, 'index'])->name ('gasto.index');
Route::get('/gastos/create', [GastoController::class, 'create'])->name ('gastos.create');
Route::post('/gastos', [GastoController::class, 'edit'])->name ('gastos.store');
Route::get('/gastos/{id}/edit', [GastoController::class, 'edit'])->name ('gastos.edit');
Route::put('/gastos/{id}', [GastoController::class, 'update'])->name ('gastos.udate');
Route::delete('/gastos/{id}', [GastoController::class,'delete'])->name ('gastos.destroy');

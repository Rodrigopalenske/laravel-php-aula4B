<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\EstudanteController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//                           qual a controller | qual o método  |  nome para a rota
Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
Route::get('/clients/{id}', [ClientController::class, 'show'])->name('clients.show');
Route::get('clients/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit');
Route::post('clients/{id}/edit', [ClientController::class, 'update'])->name('clients.update');

Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
Route::put('/clients/{id}', [ClientController::class, 'update'])->name('clients.update');
Route::delete('/clients/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');

Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');
Route::get('/produtos/{id}', [ProdutoController::class, 'show'])->name('produtos.show');

Route::get('/estudantes', [EstudanteController::class, 'index'])->name('estudantes.index');
Route::get('/estudantes/create', [EstudanteController::class, 'create'])->name('estudantes.create');
Route::get('/estudantes/{id}', [EstudanteController::class, 'show'])->name('estudantes.show');
Route::post('/estudantes', [EstudanteController::class, 'store'])->name('estudantes.store');
Route::get('/estudantes/edit/{id}', [EstudanteController::class, 'edit'])->name('estudantes.edit');
Route::post('/estudantes/edit/{id}', [EstudanteController::class, 'update'])->name('estudantes.update');
Route::get('/estudantes/destroy/{id}', [EstudanteController::class, 'destroy'])->name('estudantes.destroy');
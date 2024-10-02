<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//                           qual a controller | qual o método  |  nome para a rota
Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
Route::get('/clients/{id}', [ClientController::class, 'show'])->name('clients.show');

Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');

Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');
Route::get('/produtos/{id}', [ProdutoController::class, 'show'])->name('produtos.show');

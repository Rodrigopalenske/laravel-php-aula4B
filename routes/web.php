<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//                               qual a controller     qual o método
Route::get('/clients', [ClientController::class, 'index']);
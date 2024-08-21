<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//                               qual a controller     qual o método
Route::get('/produto/{id}', [SiteController::class, 'index']);
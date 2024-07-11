<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApuestaController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/apuestas', [ApuestaController::class, 'index'])->name('apuestas.index');

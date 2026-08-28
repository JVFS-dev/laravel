<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/client', [ClientController::class, 'index']); // lista todos os clientes (index)
Route::get('/client/create', [ClientController::class, 'create']); // abre formulario para cadastrar (create)
Route::post('/client', [ClientController::class, 'store']); // guarda o dado do banco de dados (store)


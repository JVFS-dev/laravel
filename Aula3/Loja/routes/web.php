<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

// Formulário de cadastro
Route::get('/product/create', [ProductController::class, 'create']);

// Salva no banco de dados
Route::post('/product', [ProductController::class, 'store']);

// Lista os produtos
Route::get('/product', [ProductController::class, 'index']);
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

// --- ROTAS PARA EDITAR
// 1. Abre o formulário de edição buscando o produto pelo ID
Route::get('/product/{id}/edit', [ProductController::class, 'edit']);

// 2. Salva as alterações no banco de dados
Route::put('/product/{id}', [ProductController::class, 'update']);

// --- ROTA PARA DELETAR
// Rota para deletar o produto pelo ID
Route::delete('/product/{id}', [ProductController::class, 'destroy']);
<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        Product::create($request->all());
        return view('product.store');
    }

    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }
    
    // Exibe o formulário com os dados do produto selecionado
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('product.edit', compact('product'));
    }

    // Atualiza os dados no banco de dados
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());

        return view('product');
    }

    // Deleta o produto do banco de dados
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return view('product.destroy');
    }
}

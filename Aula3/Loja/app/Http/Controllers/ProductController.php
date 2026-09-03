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
}

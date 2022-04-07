<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        return view('product.index')->with('products', Product::all());
    }

    public function create(){
        return view('product.create')->with('products', Product::all());
    }

    public function store(Request $request) {
        $product = Product::create($request->all());
        session()->flash('success', 'O produto foi criado com sucesso');
        return redirect(route('product.index'));
    }
}

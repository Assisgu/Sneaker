<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Tag;
use App\Models\Size;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.index')->with('products', Product::all());
    }

    public function create()
    {

        return view('product.create')->with(['brands' => Brand::all(), 'tags' => Tag::all()]);
    }

    public function store(Request $request)
    {

        $image = "storage/" .$request->file('image')->store('itens');

        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'brand_id' => $request->brand_id,
            'image' => $image
        ]);

        for ($i = 35; $i <= 46; $i++) {
            Size::create([
                'product_id' => $product->id,
                'number' => $i,
                'stock' => $request->get($i) == '' ? 0 : $request->get($i)
            ]);
        }

        $product->Tags()->sync($request->tags);
        session()->flash('success', 'O produto foi criado com sucesso');
        return redirect(route('product.index'));
    }

    public function edit(Product $product)
    {

        return view('product.edit')->with([
            'product' => $product,
            'brands' => Brand::all(),
            'tags' => Tag::all()
        ]);
    }

    public function update(Product $product, Request $request)
    {

        if ($request->image) {

            $image = "storage/" .$request->file('image')->store('itens');

            $product->update([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'brand_id' => $request->brand_id,
                'image' => $image
            ]);
        } else {
            $product->update([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'brand_id' => $request->brand_id,                
            ]);
        }
        
        $product->Tags()->sync($request->tags);
        session()->flash('success', 'O produto foi alterado com sucesso');
        return redirect(route('product.index', $product->id));
    }

    public function destroy(Product $product)
    {
        $product->delete();
        session()->flash('success', 'O produto foi apagado com sucesso');
        return redirect(route('product.index'));
    }

    public function trash()
    {
        return view('product.trash')->with('products', Product::onlyTrashed()->get());
    }

    public function restore($product_id)
    {
        $product = Product::onlyTrashed()->where('id', $product_id)->first();
        $product->restore();
        session()->flash('success', 'Produto restaurado com sucesso');
        return redirect(route('product.index'));
    }
}

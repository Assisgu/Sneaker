<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return view('brand.index')->with('brands', Brand::all());
    }

    public function create()
    {
        return view('brand.create');
    }

    public function store(Request $request)
    {
        $brand = Brand::create($request->all());
        session()->flash('success', 'A marca foi adicionada ao sistema com sucesso');
        return redirect(route('brand.index'));
    }

    public function edit(Brand $brand)
    {
        return view('brand.edit')->with('brand', $brand);
    }

    public function update(Brand $brand, Request $request)
    {

        $brand->update($request->all());
        session()->flash('success', 'A marca foi alterada');
        return redirect(route('brand.index', $brand->id));
    }

    public function destroy(Brand $brand)
    {

        $brand->delete();
        session()->flash('success', 'A marca foi apagada');
        return redirect(route('brand.index'));
    }

    public function trash()
    {
        return view('brand.trash')->with('brands', Brand::onlyTrashed()->get());
    }

    public function restore($brand_id)
    {
        $brand = Brand::onlyTrashed()->where('id', $brand_id)->first();
        $brand->restore();
        session()->flash('success', 'Marca restaurada com sucesso');
        return redirect(route('brand.index'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        return view('brand.index')->with('brands', Brand::all());
    }

    public function create(){
        return view('brand.create');
    }

    public function store(Request $request) {
        $brand = Brand::create($request->all());
        session()->flash('success', 'A marca foi adicionada ao sistema com sucesso');
        return redirect(route('brand.index'));
    }

}

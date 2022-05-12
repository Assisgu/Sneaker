<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Tag;

class eCommerceController extends Controller
{
    public function index(){
            return view('welcome')->with('products', Product::all());
    }

    public function searchBrand(Brand $brand){
        return view('store.search')->with(['products' => $brand->Products, 'title' => $brand->name]);
    }

    public function searchTag(Tag $tag){
        return view('store.search')->with(['products' => $tag->Products, 'title' => $tag->name]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Size;

class CartController extends Controller
{
    public function index(){
        $itens = Cart::where('user_id', Auth()->user()->id)->get();
        return view('cart.index')->with('itens', $itens);
    }

    public function store(Product $product, Size $size){
        $user = auth()->user();

        $cart = Cart::where([
            'user_id' => $user->id,
            'product_id' => $product->id])->first();

        //Se o produto já estiver no carrinho
        if($cart){
            $cart->update([
                'units' => $cart->units + 1
            ]);
        }
        else{
            $cart = Cart::create([
                'user_id' => $user->id,
                'product_id' => $product->id,
                'units' => 1,
                'size_id' => $size->id,
            ]);
        }

        session()->flash('success', 'O produto ('.$product->name.') foi adicionado.');
            return redirect()->back();
    }

    public function destroy(Product $product, Size $size) {
        $user = auth()->user();
        $cart = Cart::where([
            'user_id' => $user->id,
            'product_id' => $product->id,
            'size_id' => $size->id])->first();

        if(!$cart){
            session()->flash('error', 'O produto ('.$product->name.') não está no carrinho');
            return redirect()->back();
        }

        if($cart->units > 1){
            $cart->update([
                'units' => $cart->units -1
            ]);
        }else{
            $cart->delete();
        }

        session()->flash('success', 'O produto ('.$product->name.') foi removido do carrinho');
        return redirect()->back();
    }
}

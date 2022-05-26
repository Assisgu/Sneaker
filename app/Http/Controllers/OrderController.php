<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index(){
        return view('order.index')->with('orders', Order::where('user_id', Auth()->user()->id)->get());
    }
}

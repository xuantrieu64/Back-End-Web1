<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function order(Request $request) 
    {
        $order_id = $request->get('order_id');
        $order = Order::where('order_id', $order_id)->first();

        return view('product.view');
    }
}

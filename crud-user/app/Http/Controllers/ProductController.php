<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * CRUD User controller
 */
class ProductController extends Controller
{
    public function product(Request $request)
    {
        $product_id = $request->get('product_id');
        $product = Product::find('product_id');

        $data = [
            'product' => $product,
            'order' => $product->orders
        ];
        return view('product.view', $data);
    }
}

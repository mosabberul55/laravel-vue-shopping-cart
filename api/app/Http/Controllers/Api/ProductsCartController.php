<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;

class ProductsCartController extends Controller
{
    public function index()
    {
        $cart = Cart::with('product')->orderBy('created_at', 'desc')->get();
        return response()->json($cart, 200);
    }

    public function store(Request $request)
    {
        $item = Cart::where('product_id', $request->product_id);

        if ($item->count()) {
            $item->increment('quantity');
            $item = $item->first();
        } else {
            $item = Cart::forceCreate([
                'product_id' => $request->product_id,
                'quantity' => 1,
            ]);
        }

        return response()->json([
            'quantity' => $item->quantity,
            'product' => $item->product
        ]);
    }

    public function destroy($productId)
    {
        $item = Cart::where('product_id', $productId)->delete();

        return response()->json('success', 200);
    }

    public function destroyAll()
    {
        Cart::truncate();
        return response()->json('success', 200);
    }
}

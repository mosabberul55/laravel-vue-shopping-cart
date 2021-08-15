<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products =  Product::latest()->get();
        return response()->json($products, 200);
    }

    public function show(Product $product)
    {
        if($product){
            return response()->json($product, 200);
        } else {
            return response()->json('No products available', 404);
        }
    }
}

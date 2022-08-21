<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Product $product)
    {
        return view('products/index')->with(['products' => $product->getPaginateByLimit()]);
    }

    public function show(Product $product)
    {
        return view('products/show')->with(['product' => $product]);
    }
}

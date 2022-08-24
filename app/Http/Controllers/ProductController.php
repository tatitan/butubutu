<?php

namespace App\Http\Controllers;

use App\Product;
use App\Http\Requests\ProductRequest;

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

    public function create(/*Category $category*/)
    {
        //return view('products/create')->with(['categories' => $category->get()]);
        return view('products/create');
    }

    public function store(Product $product, ProductRequest $request)
    {
        $input = $request['product'];
        $product->fill($input)->save();
        return redirect('/products/' . $product->id);
    }

    public function edit(Product $product)
    {
        return view('products/edit')->with(['product' => $product]);
    }

    public function update(Product $product, ProductRequest $request)
    {
        $input = $request['product'];
        $product->fill($input)->save();
        return redirect('/products/' . $product->id);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/');
    }
}

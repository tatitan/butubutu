<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //


    public function index(Category $category)
    {
        return view('categories.index')->with(['products' => $category->getByCategory()]);
    }
}

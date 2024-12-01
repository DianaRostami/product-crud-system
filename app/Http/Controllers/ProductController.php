<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
//        $products = Product::all();

//        dd($products);

        return view('Products.index', ['products' => Product::all()]);
    }
    public function create()
    {
        return view('Products.create', ['products' => Product::all()]);
    }

    public function store(Request $request)
    {
        $product = new Product;

        $product->name = $request->name;
        $product->description = $request->description;
        $product->size = $request->size;

        $product->save();

        return redirect()->route('products.index');
    }
}

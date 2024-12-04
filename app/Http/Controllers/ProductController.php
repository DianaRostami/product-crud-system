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
        $request->validate([
            'name'=>'required|max:100',
            'description'=>'nullable|min:3',
            'size'=>'required|decimal:0.2|max:100'

        ]);


        Product::create($request->input());

        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
//        $product = Product::findOrFail($id);
//
//        if($product === null) {
//            abort(404);
//        }

        return view('products.show',compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {

    }
}

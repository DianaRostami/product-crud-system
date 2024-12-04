<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\SaveProductRequest;

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
        return view('Products.create', ['products' => Product::all()])
            ->with('status', 'Product created successfully!');
    }

    public function store(SaveProductRequest $request)
    {

        $product = Product::create($request->validated());

        return redirect()->route('products.show', $product);
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

    public function update(SaveProductRequest $request, Product $product)
    {

        $product->update($request->validated());

        return redirect()->route('products.show', $product)
            ->with('status', 'product updated successfully!');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('status', 'product successfully deleted');

    }
}

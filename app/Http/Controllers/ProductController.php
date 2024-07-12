<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index',['products' => $products]);
    }
    public function create(){
        return view('products.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required',
            'description' => 'nullable'
        ]);
        $newProduct = Product::create($data);
        return redirect(route('product.index'));
    }

    public function edit(Product $product){
        return view('products.edit',['product'=> $product]);
    }

    public function update(Product $product, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required',
            'description' => 'nullable'
        ]);
        $product -> update($data);
        return redirect(route('product.index')) ->with('success','Updated Successfully');
    }
    public function clear(Product $product){
        $product ->delete();
        return redirect(route('product.index')) ->with('success','Deleted Successfully');
    }
}

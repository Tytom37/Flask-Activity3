<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index(Request $request) {

        $query = Product::orderBy('name');
        
        if ($request->filter) {
            $products->where('name', 'like', "%$request->filter%");
        }

        $products = $query->get();

        return view('templates._list-of-products', ['products' => $products]);
    }

    public function store(Request $request) {
        
        $validator = Validator::make($request->all(), [
            'name' =>'required',
            'desc' =>'required',
            'price' =>'required',
            'qty' =>'required'
        ]);

        if($validator->fails()) {
            $products = Product::orderBy('name');
            return view('templates._error', ['errors' => $validator->errors(), 'products' => $products]);

        };

        $products = Product::orderBy('name');

        Product::create($request->all());

        return view('templates._products-list',['products'=>$products]);
    }

    public function update(Request $request, Product $product) {

        $fields = $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'price' => 'required|integer',
            'qty' => 'required|integer',
        ]);

        $product->update($fields);

        return view('pages.products');
    }

    public function destroy(Product $product) {
        $product = Product::find($product->id);
        $product->delete();

        return view('templates._products-list-for-create', ['products'=>$product]);
    }

    public function edit(Product $product){

        $product = Product::find($product->id);

        return view('product._edit-product', compact('product'));

    }
}

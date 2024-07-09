<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index(Request $request) {

        $products =  Product::orderBy('name');
        
        if ($request->filter) {
            $products->where('name', 'like', "%$request->filter%")
                    ->orWhere('description', 'like', "%$request->filter%");
        }

        return view('templates._products-list', ['products' => $products]);
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

        $products = Product::create($request->all());

        return view('templates._products-list', ['products'=>$products]);
    }

    public function update(Request $request, Product $product) {

        $fields = $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'price' => 'required|integer',
            'qty' => 'required|integer',
        ]);
        $products = Product::orderBy('name');
        $product->update($fields);

        return view('templates._products-list', ['product' => $products]);
    }

    public function destroy(Product $product) {
        $product->delete();

        return "";
    }

    public function edit(Product $product){

        $product = Product::find($product->id);

        return view('product._edit-product', ['product' => $product]);

    }
}

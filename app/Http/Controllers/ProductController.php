<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function destroy(string|int $id){
        if(!$product = Product::find($id)){
            return back();
        }
        $product->delete();

        return redirect()->route('dashboard');
    }

    public function create(){
        return view('product.create');
    }

    public function store(Request $request, Product $product){
        
        $data = $request->all();
        $product->create($data);

        return redirect()->route('dashboard');
    }
}

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
}

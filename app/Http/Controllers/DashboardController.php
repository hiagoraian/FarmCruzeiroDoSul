<?php

namespace App\Http\Controllers;

use App\Models\Equine;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Equine $equine, Product $product){
        $equines = $equine->all();
        $products = $product->all();

        return view('dashboard', compact('equines', 'products'));
    }
}

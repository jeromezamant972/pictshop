<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // faire une incentiation
    public function index (){
        $produits = Products::all();
        return view('product.layouts.app',compact('produits'));
    }
}

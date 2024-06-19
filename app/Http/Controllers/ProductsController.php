<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // faire une incentiation
    public function index (){
        $products = Products::all();
        // dd($product);
        return view('product.app',compact('products'));
    }

    public function store(Request $request){
        $product = Products::create([
            'name'=>$request->input('name'),
            'description'=>$request->input('description'),
            'price'=>$request->input('price')
       ]);
       return redirect('/');
    }
}

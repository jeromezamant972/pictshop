<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // faire une incentiation
    public function index (){
        $product = Products::all();
        return view('product.layouts.app',compact('product'));
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

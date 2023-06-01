<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    public function index(){
        $product = Products::all();
        return view('index', ['products' => $product]);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        #dd($request);
        $data = $request->validate([
            'name' => 'required',
           'brand' => 'required'
        ]);

        $newProduct = Products::create($data);

        return redirect(route('pro.index'));
    }

    public function edit(Products $product){

        return view ('edit', ['product'=>$product]);
    }

    public function update(Products $product, Request $request){
        $data = $request->validate([
            'name' => 'required',
           'brand' => 'required'
        ]);

        $product->update($data);
        return redirect(route('pro.index'))->with('success', 'Product Updated Successfully');

    }

    public function delete(Products $product){
        $product -> delete();
        return redirect(route('pro.index'))->with('success', 'Product Deleted Successfully');
    }

    

}

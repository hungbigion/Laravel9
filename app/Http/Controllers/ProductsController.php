<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        // pass data to view 
        $title = 'Fresher fo longer';
        $x = 12;
        $y = 21;
        $name = 'Hung';
        $products = [
            'name' => 'Kyocera',
            'year' => 2022
        ];
        //return view('products.index', compact('myphone'));
        //return view('products.index')->with('name', $name);
        return view('products.index',[
            'products' => $products
        ]);
    }
    public function detail ($ProductsName){
        $phone = [
            'iphone' => 'iphone',
            'samsung' => 'samsung Flip',
        ];
        return view('products.index', [
            'products' => $phone[$ProductsName] ?? 'Product not found'
        ]);
    }
}

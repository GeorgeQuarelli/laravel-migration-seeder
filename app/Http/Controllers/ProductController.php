<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(){
        $all_product = Product::all();
        $data = [
            'lista_product' => $all_product
        ];
        return view('product')->with($data);
    }
}

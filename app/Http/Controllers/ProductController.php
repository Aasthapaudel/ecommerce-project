<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;




class ProductController extends Controller
{
    //
    function index()
    {
        // return "welcome to product page";
        // return view('Product');
        // return Product::all();
        $data = Product::all();
        return view("product", ['products'=>$data]);
    }

}

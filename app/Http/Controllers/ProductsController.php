<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class ProductsController extends Controller
{
    public function index()
    {
        $productsfromdb = products::all();
         //dd($productsfromdb);
        return view('products.index',['products' => $productsfromdb]);
    }
}

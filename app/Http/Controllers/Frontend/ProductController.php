<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
       
        return view('customer.shop_product.products-gridview');
    }
    public function show_list(){
        $products = Product::all();
        return view("customer.shop_product.products-gridview", ['products' => $products]);
    }
}
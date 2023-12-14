<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Product;

use Illuminate\Http\Request;

class DetailProductController extends Controller
{
    public function index()
    {
        return view('customer.shop_product.detail-product');
    }

    public function create()
    {
        // ...
    }

    public function store()
    {
        // ...
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('customer.shop_product.detail-product',['product' => $product] ); //compact('product'):  compact để tạo key = ' product' tương ứng với value $product
    }

    public function edit($id)
    {
        // ...
    }

    public function update($id)
    {
        // ...
    }

    public function destroy($id)
    {
        // ...
    }
}

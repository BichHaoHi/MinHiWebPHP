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

    public function show(String $id)
    {
        $product = Product::find($id);

        if (!$product) {
            abort(404); // Hoặc thực hiện xử lý lỗi khác nếu cần
        }
    
        return view('customer.shop_product.detail-product');
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

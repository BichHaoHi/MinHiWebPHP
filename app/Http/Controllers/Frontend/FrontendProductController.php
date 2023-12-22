<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;
use App\Models\Product;

class FrontendProductController extends Controller
{
    //
    public function showProduct(String $name)
    {
        $product = Product::where('name', $name)->where('enable', 1)->first();
        return view('frontend.pages.product-detail', compact('product'));
    }
}

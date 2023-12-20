<?php

namespace App\Http\Controllers\FontEnd;

use App\Http\Controllers\Controller;
use App\Models\FeedBack;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function show(){
        return view('customer.shop_product.detail-product');
    }
}

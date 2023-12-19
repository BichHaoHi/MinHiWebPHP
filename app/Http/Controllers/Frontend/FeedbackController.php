<?php

namespace App\Http\Controllers\FontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function showForm(){
        return view('customer.shop_product.detail-product');
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Cart;

class PaymentController extends Controller
{
    //
    public function codSuccess(){
        return view('frontend.pages.cod-success');
        // gọi $this->storeOrder() rồi gọi clearSession rồi trả về view của payment success
    }
  
}

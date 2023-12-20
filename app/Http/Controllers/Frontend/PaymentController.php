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
    public function paymentSuccess(){
        // gọi $this->storeOrder() rồi gọi clearSession rồi trả về view của payment success
    }
    public function storeOrder()
    {
        $order = new Order();
        $order->name = zzzz;
        $order->date = zzzz;
        $order->address = aa;
        $order->phone = 1111;
        $order->status = 'Đã đặt hàng';
        $order->total = 1111;
        $order->payment_method= dsdsd;
        $order->user_id= Auth::user()->id;
        $order->save();

        foreach(\Cart::content() as $item){
            $product = Product::find($item->id);
            $orderdetail = new OrderDetail();
            $orderdetail->order_id = $order->id;
            $orderdetail->product_id = $product->id;
            $orderdetail->quantity = $item->quantity;
            $orderdetail->save();

        }


    }
    public function clearSession(){
        \Cart::destroy();
    }
}

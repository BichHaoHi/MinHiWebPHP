<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Cart;


class CheckOutController extends Controller
{
    //
    public function index(){
        $userId = Auth::user()->id;
        $user = User::find($userId); 

        $cartItems = Cart::content();
        $total = 0;
        foreach($cartItems as $item){
            $total += $item->price*$item->qty;
        }

        return view('frontend.pages.checkout', compact('user', 'total'));
    }

    public function checkOutFormSubmit(Request $request){
        return response(['status' => 'success', 'redirect_url'=> route('customer.payment')]);
    }


}

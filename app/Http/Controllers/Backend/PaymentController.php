<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cart;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use App\Http\Controllers\Backend\PaypalSetting;


class PaymentController extends Controller
{
    //
    public function index(){
        $total = 0;
        $cartItems = Cart::content();

        foreach($cartItems as $item){
            $total += $item->price*$item->qty;
        }
        return view('frontend.pages.payment', compact('total'));
    }

    public function paypalConfig(){
        $paypalSetting = PaypalSetting::first();
        $config = [
            'mode'    => $paypalSetting->mode,
            'sandbox' => [
                'client_id'         => env('PAYPAL_SANDBOX_CLIENT_ID', ''),
                'client_secret'     => env('PAYPAL_SANDBOX_CLIENT_SECRET', ''),
                'app_id'            => 'APP-80W284485P519543T',
            ],
            'live' => [
                'client_id'         => env('PAYPAL_LIVE_CLIENT_ID', ''),
                'client_secret'     => env('PAYPAL_LIVE_CLIENT_SECRET', ''),
                'app_id'            => '',
            ],
        
            'payment_action' => env('PAYPAL_PAYMENT_ACTION', 'Sale'), // Can only be 'Sale', 'Authorization' or 'Order'
            'currency'       => env('PAYPAL_CURRENCY', 'USD'),
            'notify_url'     => env('PAYPAL_NOTIFY_URL', ''), // Change this accordingly for your application.
            'locale'         => env('PAYPAL_LOCALE', 'en_US'), // force gateway language  i.e. it_IT, es_ES, en_US ... (for express checkout only)
            'validate_ssl'   => env('PAYPAL_VALIDATE_SSL', true), // Validate SSL when creating api client.
        ];
    }

    public function payWithPaypal(){
        // $provider = new PayPalClient();

    }

}


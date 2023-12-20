<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Cart;
use Illuminate\Support\Facades\Redirect;


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

    public function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data)
            )
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        //execute post
        $result = curl_exec($ch);
        //close connection
        curl_close($ch);
        return $result;
    }
    public function checkOutFormSubmit(){

        // dd((isset($_POST['payUrl'])));
        // xử lý điều kiện radio nếu mà momo
        if (isset($_POST['payUrl'])) {
            $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";


            $partnerCode = 'MOMOBKUN20180529';
            $accessKey = 'klm05TvNBzhg7h7j';
            $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';


            $orderInfo = "Thanh toán qua MoMo";
            // $amount = $request->input('total');
            $amount = "100000";
            $orderId = time() . "";
            $redirectUrl = "http://minhi_cosmetic_ver2.test/customer/success/";
            $ipnUrl = "http://minhi_cosmetic_ver2.test/customer/success/";
            // $extraData = $request->input('address');
            $extraData = "";


            
                $partnerCode = $partnerCode;
                $accessKey = $accessKey;
                $serectkey = $secretKey;
                $orderId = $orderId; // Mã đơn hàng
                $orderInfo = $orderInfo;
                $amount = $amount;
                $ipnUrl = $ipnUrl;
                $redirectUrl = $redirectUrl;
                $extraData = $extraData;

                $requestId = time() . "";
                $requestType = "payWithATM";
                // $extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
                //before sign HMAC SHA256 signature
                $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
                $signature = hash_hmac("sha256", $rawHash, $serectkey);
                $data = array('partnerCode' => $partnerCode,
        'partnerName' => "Test",
        "storeId" => "MomoTestStore",
        'requestId' => $requestId,
        'amount' => $amount,
        'orderId' => $orderId,
        'orderInfo' => $orderInfo,
        'redirectUrl' => $redirectUrl,
        'ipnUrl' => $ipnUrl,
        'lang' => 'vi',
        'extraData' => $extraData,
        'requestType' => $requestType,
        'signature' => $signature);
    $result =$this->execPostRequest($endpoint, json_encode($data));
    $jsonResult = json_decode($result, true);  // decode json

    //Just a example, please check more in there

    // header('Location: ' . $jsonResult['payUrl']);
    return Redirect::to($jsonResult['payUrl']);
            
        }

        // xử lý nếu chọn COD 
        

        // dd($request->all());
        // return response(['status' => 'success', 'redirect_url'=> route('customer.payment')]);
    }


}

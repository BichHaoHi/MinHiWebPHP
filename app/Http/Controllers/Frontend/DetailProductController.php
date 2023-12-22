<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Feedback;
use Validator;
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
        $feedbacks = Feedback::where('idProduct', $id)->get();
        $totalComments = $feedbacks->count();
        $type = $product->type;
        $productsTypes = Product::where('type', $type)->get();
        
        return view('customer.shop_product.detail-product',[
            'product' => $product,
            'feedbacks' => $feedbacks, // Thêm biến feedbacks vào mảng
            'totalComments' => $totalComments,
            'productsTypes'=> $productsTypes,
            

        ]); //compact('product'):  compact để tạo key = ' product' tương ứng với value $product
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
    public function storeFeedback(Request $request, $productId)
    {
        
        $feedback = new Feedback();
        $request->validate([
            'name' => 'required|string',
            'phone' => ['required', 'string', 'regex:/^[0-9]{10}$/'],
            'feedback' => 'required|string',
            'stars' => 'nullable|integer|min:1|max:5', // Sử dụng 'nullable' để cho phép giá trị là null
        ]);
        //Feedback::create($request->all());

       
        $feedback->idProduct = $productId;
        $feedback->idUser = null;
        $feedback->name = $request->name;
        $feedback->phone = $request->phone;
        $feedback->desc = $request->feedback;
        $feedback->point = $request->stars;
        $feedback->enable = true;
        //dd($feedback!=null);
        $feedback->save();

        
        return redirect()->back()->with('success', 'Đánh giá của bạn đã được gửi thành công.');
    }
}


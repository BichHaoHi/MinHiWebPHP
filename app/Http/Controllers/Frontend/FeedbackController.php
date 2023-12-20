<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\FeedBack;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function submitFeedback(Request $request)
    {
        // Xử lý dữ liệu từ form và lưu vào database
        $feedback = new Feedback;
        $feedback->name = $request->input('name');
        $feedback->phone = $request->input('phone');
        $feedback->enable = true; // Nếu muốn enable feedback ngay khi submit
        $feedback->desc = $request->input('desc');
        // Bạn cần xử lý product_id và customer_id tương ứng từ form
        $feedback->product_id = $request->input('product_id');
        $feedback->customer_id = $request->input('customer_id');
        $feedback->save();

        // Redirect hoặc trả về response JSON tùy vào yêu cầu của bạn
        return redirect()->back()->with('success', 'Feedback submitted successfully!');
    }
}
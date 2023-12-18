<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Cart;

class CartController extends Controller
{
    //
    public function addToCart(Request $request){
        // dd($request->all());
        $product =  Product::findOrFail($request->product_id);
        if($product->quantity === 0){
            return response(['status' => 'error', 'message' => 'Sản phẩm này đã hết hàng']);
        }elseif($product->quantity < $request->qty){
            return response(['status' => 'error', 'message' => 'Vượt quá số lượng hiện có']);
        }
        $cartData= [];
        $cartData['id'] = $product->id;
        $cartData['name'] = $product->name;
        $cartData['qty'] = $request->qty;
        $cartData['price'] = $product->price;
        $cartData['weight'] = 10;

        //  dd($cartData);
        Cart::add($cartData);
        return response(['status' => 'success', 'message' => 'Đã thêm sản phẩm vào giỏ hàng']);
    }
    
    public function cartDetails(){
        $cartItems = Cart::content();

        $total = 0;
        foreach($cartItems as $item){
            $total += $item->price*$item->qty;
        }
       
        return view('frontend.pages.cart-detail', compact('cartItems', 'total'));
    }
    public function updateProductQty(Request $request){
        $productId =  Cart::get($request->rowId)->id;
        $product =  Product::findOrFail($productId);
        
        if($product->quantity === 0){
            return response(['status' => 'error', 'message' => 'Sản phẩm này đã hết hàng']);
        }elseif($product->quantity < $request->quantity){
            return response(['status' => 'error', 'message' => 'Vượt quá số lượng hiện có']);
        }
        Cart::update($request->rowId, $request->quantity);
        // tăng tiền nè
        $productTotal = $this->getProductTotal($request->rowId);
        // Lấy giá sản phẩm để cộng vào subtotal
        $product_price = $product->price;
        return response(['status' => 'success', 'message' => 'Cập nhật số lượng sản phẩm thành công!', 'product_total'=>$productTotal,  'product_price'=>$product_price ]);
    }
    public function getProductTotal($rowId){
        $product = Cart::get($rowId);
        $total = ($product->price) * $product->qty;
        return $total;
    }
    public function clearCart(){
        Cart::destroy();
        return response(['status' => 'success', 'message' => 'Xóa cart thành công' ]);

    }
    public function removeProduct($rowId){
        Cart::remove($rowId);
        return redirect()->back();
    }
    public function getCartCount(){
        return Cart::content()->count();
    }
    
    
    public function cartTotal(){
        $total = 0;
        foreach(Cart::content() as $product){
            $total += $this->getProductTotal($product->rowId);
        };
        return $total;
    }
}

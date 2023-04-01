<?php

namespace App\Http\Controllers\frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function add_to_cart(Request $request)
    {
        $product_id = $request->product_id;
        $product_qty = $request->product_qty;
        if(Auth::check()){
            $check_product = Product::where('id', $product_id)->first();
            if($check_product){
                if(Cart::where('user_id', Auth::user()->id)->where('product_id', $product_id)->exists()){
                    return response()->json(['status' => $check_product->title . ' is already cart ']);
                }else{
                    $newAddProduct = new Cart();
                    $newAddProduct->user_id = Auth::user()->id;
                    $newAddProduct->product_id =  $product_id;
                    $newAddProduct->product_qty = $product_qty;
                    $newAddProduct->save();
                    return response()->json(['status' => $check_product->title . ' Added to cart']);
                }
            }
        }else{
            return response()->json(['status' => 'Please login to continue.']);
        }
    }

    public function cart_view()
    {
        $user_id = Auth::user()->id;
        $cartItmes = Cart::with('product')->where('user_id', $user_id)->get();
        return view('frontend.cart.viewCart', compact('cartItmes'));
    }
}

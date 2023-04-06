<?php

namespace App\Http\Controllers\frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\ProductPrice;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function add_to_cart(Request $request)
    {
        $product_id = $request->product_id;
        $product_qty = $request->product_qty;
        if (Auth::check()) {
            $check_product = Product::where('id', $product_id)->first();
            if ($check_product) {
                if (
                    Cart::where('user_id', Auth::user()->id)
                        ->where('product_id', $product_id)
                        ->exists()
                ) {
                    return response()->json(['status' => $check_product->title . ' is already cart ']);
                } else {
                    $newAddProduct = new Cart();
                    $newAddProduct->user_id = Auth::user()->id;
                    $newAddProduct->product_id = $product_id;
                    $newAddProduct->product_qty = $product_qty;
                    $newAddProduct->save();
                    return response()->json(['status' => $check_product->title . ' Added to cart']);
                }
            }
        } else {
            return response()->json(['status' => 'Please login to continue.']);
        }
    }

    public function cart_view()
    {
        $user_id = Auth::user()->id;
        $cartItmes = Cart::with('product')
            ->where('user_id', $user_id)
            ->get();
        return view('frontend.cart.viewCart', compact('cartItmes'));
    }

    public function addToCart(Request $request)
    {
        // $id = Auth::user();
        // $user = User::where('id',$id->id)->first();
        $product = Product::with('productPrice')
            ->where('id', $request->productId)
            ->first();
        $productCart = Cart::where('product_id', $request->productId)->first();
        if (Auth::check()) {
            if ($productCart == true) {
                $productCart->product_qty = $productCart->product_qty + 1;
                $productCart->price += $product->productPrice->price;
                $productCart->save();
                $allCartData = Cart::with('product')
                    ->where('user_id', Auth::user()->id)
                    ->get();
                $count = Cart::with('product')
                    ->where('user_id', Auth::user()->id)
                    ->count();

                $total = Cart::where('user_id', Auth::user()->id)->sum('price');
                return response()->json([
                    'status' => 'Succeessfully Add to Cart',
                    'allData' => $allCartData,
                    'totalPrice' => $total,
                    'count' => $count,
                ]);
            } else {
                $productCart = new Cart();
                $productCart->user_id = Auth::user()->id;
                $productCart->product_id = $product->id;
                $productCart->product_qty = 1;
                $productCart->product_price += $product->productPrice->id;
                $productCart->price = $product->productPrice->price;
                $productCart->save();
                $allCartData = Cart::with('product')
                    ->where('user_id', Auth::user()->id)
                    ->get();
                $count = Cart::with('product')
                    ->where('user_id', Auth::user()->id)
                    ->count();
                $total = Cart::where('user_id', Auth::user()->id)->sum('price');
                return response()->json([
                    'status' => 'Succeessfully Add to Cart',
                    'allData' => $allCartData,
                    'count' => $count,
                    'totalPrice' => $total,
                ]);
            }
        } else {
            return response()->json([
                'error' => 'please login first',
            ]);
        }
    }

    public function viewCart($id)
    {
        $cartItmes = Cart::with('product')
            ->where('user_id', $id)
            ->latest()
            ->get();
        return view('frontend.cart.viewCart', compact('cartItmes'));
    }

    public function deleteCart($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        $notification = [
            'message' => 'Product Successfully Deleted',
            'alert-type' => 'success',
        ];
        return back()->with($notification);
    }
}

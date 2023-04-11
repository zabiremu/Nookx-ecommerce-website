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

    public function addToCartProduct(Request $request, $id)
    {
        if (Auth::check()) {
            $product = Product::with('productPrice')
                ->where('id', $id)
                ->first();

            $productPrice = $product->productPrice->price;

            $cartData = Cart::with('product')
                ->where('user_id', Auth::user()->id)
                ->where('product_id', $id)
                ->first();

            if ($request->qty > 1) {
                $cart = new Cart();
                $cart->product_id = $id;
                $cart->user_id = Auth::user()->id;
                $cart->product_qty = $request->qty;
                $cart->product_price = $product->productPrice->id;
                $cart->price = $request->qty * $productPrice;
                $cart->save();
                $notification = [
                    'message' => 'Product Successfully Cart',
                    'alert-type' => 'success',
                ];
                return back()->with($notification);
            } else {
                $cart = new Cart();
                $cart->user_id = Auth::user()->id;
                $cart->product_id = $id;
                $cart->product_qty = $request->qty;
                $cart->product_price = $product->productPrice->id;
                $cart->price = $product->productPrice->price;
                $cart->save();
                $notification = [
                    'message' => 'Product Successfully Cart',
                    'alert-type' => 'success',
                ];
                return back()->with($notification);
            }
        } else {
            $notification = [
                'message' => 'Please login first',
                'alert-type' => 'error',
            ];
            return back()->with($notification);
        }
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

    public function updataCart(Request $request, $id)
    {
        $cart = Cart::where('user_id', Auth::user()->id)
            ->where('id', $id)
            ->first();

        $product = Product::with('productPrice')
            ->where('id', $cart->product_id)
            ->first();
            
        $cart->product_qty = $request->product_qty;
        $cart->price = $request->product_qty * $product->productPrice->price;
        $cart->save();
        $notification = [
            'message' => 'Product Cart Successfully updated',
            'alert-type' => 'success',
        ];
        return back()->with($notification);
    }

    public function cartProduct(Request $request)
    {
        if (Auth::check()) {
            $product = Product::with('productPrice')
                ->where('id', $request->product_id)
                ->first();

            $productPrice = $product->productPrice->price;

            $cartData = Cart::with('product')
                ->where('user_id', Auth::user()->id)
                ->where('product_id', $request->product_id)
                ->first();

            if ($request->product_qty > 1) {
                $cart = new Cart();
                $cart->product_id = $request->product_id;
                $cart->user_id = Auth::user()->id;
                $cart->product_qty = $request->product_qty;
                $cart->product_price = $product->productPrice->id;
                $cart->price = $request->product_qty * $productPrice;
                $cart->save();
                $notification = [
                    'message' => 'Product Successfully Cart',
                    'alert-type' => 'success',
                ];
                return back()->with($notification);
            } else {
                $cart = new Cart();
                $cart->user_id = Auth::user()->id;
                $cart->product_id = $request->product_id;
                $cart->product_qty = $request->product_qty;
                $cart->product_price = $product->productPrice->id;
                $cart->price = $product->productPrice->price;
                $cart->save();
                $notification = [
                    'message' => 'Product Successfully Cart',
                    'alert-type' => 'success',
                ];
                return back()->with($notification);
            }
        } else {
            $notification = [
                'message' => 'Please login first',
                'alert-type' => 'error',
            ];
            return back()->with($notification);
        }
    }
}

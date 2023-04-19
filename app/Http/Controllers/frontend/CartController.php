<?php

namespace App\Http\Controllers\frontend;

use App\Models\Cart;
use App\Models\User;
use App\Models\Cupon;
use App\Models\Product;
use App\Models\ProductPrice;
use Illuminate\Http\Request;
use App\Models\ProductWishlist;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CartController extends Controller
{
    public function addToWishts(Request $request)
    {
        $productData = Product::with('productPrice')
            ->where('id', $request->productId)
            ->first();

        $wish = ProductWishlist::where('product_id', $request->productId)->first();

        if (Auth::check()) {
            if ($wish == null) {
                $wishList = new ProductWishlist();
                $wishList->user_id = Auth::user()->id;
                $wishList->product_id = $request->productId;
                $wishList->product_price = $productData->productPrice->id;
                $wishList->price = $productData->productPrice->price;
                $wishList->product_qty = 1;
                $wishList->save();
                $allWishListsData = ProductWishlist::with('product')
                    ->where('user_id', Auth::user()->id)
                    ->get();
                $count = ProductWishlist::with('product')
                    ->where('user_id', Auth::user()->id)
                    ->count();
                $total = ProductWishlist::where('user_id', Auth::user()->id)->sum('price');    
                return response()->json(['allWishListsData' => $allWishListsData, 'count' => $count,'total'=>$total]);
            } else {
                return response()->json(['error_wish' => 'product alerady seleceted']);
            }
        }else{
            return response()->json(['error_auth' => 'Please login first']);
        }
    }

    public function viewToWishts($id)
    {
        $cartItmes = ProductWishlist::with('product')
            ->where('user_id', $id)
            ->latest()
            ->get();
        return view('frontend.wishlists.wish_lists', compact('cartItmes'));
    }

    public function addToCart(Request $request)
    {
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

        $orginalPrice="";    
        return view('frontend.cart.viewCart', compact('cartItmes','orginalPrice'));
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
    public function offer(Request $request)
    {
        $cuponName= Cupon::where('name',$request->offer)->first();
        if($cuponName == true)
        {
            if($cuponName->type == 'Discount')
            {
                $total = Cart::where('user_id', Auth::user()->id)->sum('price');
                $discountPrice= $total / $cuponName->discount;
                $orginalPrice= $total-$discountPrice;
                $notification = [
                    'message' => 'Successfully updated price',
                    'alert-type' => 'success',
                ];
                $cartItmes = Cart::with('product')
                ->where('user_id', Auth::user()->id)
                ->latest()
                ->get();
                return view('frontend.cart.viewCart',compact('cartItmes','orginalPrice'))->with($notification);

            }elseif($cuponName->type == 'Fixed'){
                $total = Cart::where('user_id', Auth::user()->id)->sum('price');
                $orginalPrice= $total - $cuponName->discount;
                $notification = [
                    'message' => 'Successfully updated price',
                    'alert-type' => 'success',
                ];
                $cartItmes = Cart::with('product')
                ->where('user_id', Auth::user()->id)
                ->latest()
                ->get();
                return view('frontend.cart.viewCart',compact('cartItmes','orginalPrice'))->with($notification);
            }else{
                $notification = [
                    'message' => 'Invalid Cupon',
                    'alert-type' => 'error',
                ];
                return back()->with($notification);
            }
        }else{
            $notification = [
                'message' => 'Cupon name error',
                'alert-type' => 'error',
            ];
            return back()->with($notification);
        }
    }
}

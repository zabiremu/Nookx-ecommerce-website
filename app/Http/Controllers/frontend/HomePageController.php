<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{
    //Display home page
    public function create()
    {
        $products = Product::latest()
                    ->with('user', 'category', 'subCategory', 'productPrice')
                    ->limit(8)
                    ->get();
        $productPrice = Product::with('productPrice')->first();
        $banners = Product::where('banner', 1)->limit(5)->latest()->get();
        $most_view = Product::where('trending', 1)->with('category')->limit(3)->get();
        $trendings = Product::where('trending', 1)->with('category')->limit(12)->get();
        // dd($products->all());
        return view('frontend.homePage', compact('products', 'banners', 'most_view', 'trendings', 'productPrice'));
    }

    // Display product details page
    public function createProductDetailsPage($slug=null)
    {
        $product = Product::
                      with('user', 'category', 'subCategory', 'productPrice', 'comments.replies', 'user', 'comments.user', 'comments.replies.user')
                    ->where('slug_unique', $slug)->get();                
        return view('frontend.productDetailsPage', compact('product'));
    }

    // display shop grid page
    public function createShopGrid()
    {
        return view('frontend.app.shopGrid');
    }

    // display shop list page
    public function createShopList()
    {
        return view('frontend.shopList');
    }

    // display shop left list page
    public function createShopLeftList()
    {
        return view('frontend.shopLeftList');
    }
    // display product right side
    public function createShopRightList()
    {
        return view('frontend.shopRightList');
    }
    // display product details left side
    public function createShopDetailsLeft()
    {
        return view('frontend.productDetailLeftSide');
    }
    // display product details right side
    public function createShopDetailsRight()
    {
        return view('frontend.productDetailRightSide');
    }
    // display store listing page
    public function createShopStoreListing()
    {
        return view('frontend.storeListing');
    }
    // display single store page
    public function createSingleShopStore()
    {
        return view('frontend.singleStore');
    }
    // display accont page
    public function createAccountPage()
    {
        return view('frontend.account');
    }
    // profile page
    public function createProfilePage()
    {   
        $id = Auth::user()->id;
        $user = User::with('roles')->find($id);
        return view('frontend.profile', compact('user'));
    }
    // order page
    public function createOdrerPage()
    {
        return view('frontend.orders');
    }
    // address page
    public function createAddressPage()
    {
        return view('frontend.addressBook');
    }
    // wisih list page
    public function createWisihPage()
    {
        return view('frontend.wishList');
    }
    // vendor page
    public function createVendorPage()
    {
        return view('frontend.vendor');
    }
    // cart page
    public function createCartPage()
    {
        return view('frontend.cartPage');
    }
    // check out page
    public function createCheckOutPage()
    {
        return view('frontend.checkoutPage');
    }
    // error 400 page
    public function createError400Page()
    {
        return view('frontend.error404');
    }
     // error 500 page
     public function createError500Page()
     {
         return view('frontend.error500');
     }
}

<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{
    //Display home page
    public function create()
    {
        $products = Product::latest()
            ->with('user', 'category', 'subCategory', 'productPrice', 'review')
            ->limit(8)
            ->get();

        $banners = Product::where('banner', 1)
            ->limit(4)
            ->latest()
            ->get(['id', 'title', 'image_url', 'description']);
        $most_view = Product::where('trending', 1)
            ->with('category', 'productPrice')
            ->limit(3)
            ->get();
        $trendings = Product::where('trending', 1)
            ->with('category', 'productPrice', 'review')
            ->limit(12)
            ->get();
        $dealsOfTheDay = Product::where('deals_of_the_day', 1)
            ->with('category', 'productPrice')
            ->limit(8)
            ->get();
        $category = Category::latest()
            ->limit(6)
            ->with('subCategory')
            ->get(['id', 'cat_name', 'image_url']);
        return view('frontend.homePage', compact('products', 'banners', 'most_view', 'trendings', 'category', 'dealsOfTheDay'));
    }

    // Display product details page
    public function createProductDetailsPage($slug)
    {
        $product = Product::where('slug_unique', $slug)
            ->with('user', 'category', 'subCategory', 'productImage', 'productPrice', 'comments.replies', 'user', 'comments.user', 'comments.replies.user', 'review')
            ->first();
        $id = Review::where('product_id', $product->id)->get();
        $five = Review::where('product_id', $product->id)
            ->where('ratings', 5)
            ->count();

        $four = Review::where('product_id', $product->id)
            ->where('ratings', 4)
            ->count();

        $three = Review::where('product_id', $product->id)
            ->where('ratings', 3)
            ->count();
        $two = Review::where('product_id', $product->id)
            ->where('ratings', 2)
            ->count();
        $one = Review::where('product_id', $product->id)
            ->where('ratings', 1)
            ->count();
        $totalCount = Review::where('product_id', $product->id)->count();
        $totalRatings = $five * 5 + $four * 4 + $three * 3 + $two * 2 + $one * 1;
        $averageResult = 0;
        if ($totalRatings > 0) {
            $averageResult = ceil($totalRatings / $totalCount);
        } else {
            $averageResult = 0;
        }
  
        return view('frontend.productDetailsPage', compact('product', 'five', 'four', 'three', 'two', 'one', 'averageResult'));
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

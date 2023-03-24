<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductsListsController extends Controller
{
    public function catProduct($slug)
    {
        $category= Category::where('cat_slug',$slug)->latest()->first();
        $productLists=Product::with('productPrice','review')->where('category_id',$category->id)->latest()->simplePaginate(4); 
        $count = $productLists->count();
        return view('frontend.shopGrid',compact('category','productLists','count'));
    }
    public function subProduct($slug)
    {
        $subCategory= SubCategory::where('sub_slug',$slug)->latest()->first();
        $productLists=Product::with('productPrice','review')->where('sub_category_id',$subCategory->id)->latest()->simplePaginate(5); 
        $count = $productLists->count();
        return view('frontend.shopLeftList',compact('subCategory','productLists','count'));
    }
}

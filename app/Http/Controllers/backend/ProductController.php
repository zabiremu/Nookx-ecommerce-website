<?php

namespace App\Http\Controllers\backend;

use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    //create product method
    public function create()
    {
        //Fetch categories and sub-categories
        $categories = Category::get();
        $sub_categories = SubCategory::get();
        return view('backend.product.create', compact('categories', 'sub_categories'));
    }
    //Store product method
    public function store(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'category' => 'required',
            'sub_category' => 'required',
            'product_name' => 'required|min:10|max:45',
            'sku_name' => 'required|min:5|max:15',
            'stock' => 'required',
            'specification' => 'required|max:30',
            'description' => 'required'

        ]);
        $product = new Product();
        $product->user_id = $user->id;
        $product->category_id = $request->category;
        $product->sub_category_id = $request->sub_category;
        $product->title = $request->product_name;
        $product->sku = $request->sku_name;
        $product->stock = $request->stock;
        $product->description = $request->description;
        $product->specification = $request->specification;
        $product->image_url = str()->slug($request->product_name);
        $ext = $request->product_image->extension();
        $image_name = $this->slugGenerator($product->image_url) . '.' . $ext;
        $upload_product_img = $request->product_image->storeAs('product', $image_name, 'public');
        $product->image = $upload_product_img;
        $product->save();
        $notification = [
            'message' => 'Your product successful update',
            'alert-type' => 'success'
        ];
        return back()
                ->with($notification);
    }
    //show all product method
    public function all()
    {
        $products = Product::paginate(5);
        return view('backend.product.view', compact('products'));
    }


    public function slugGenerator($title)
    {
        $count = Product::where('image_url', 'LIKE', '%' . $title . '%')->count();
        if($count > 0){
            $title = $title . '-' . $count++;
        }
        return $title;
    }
}

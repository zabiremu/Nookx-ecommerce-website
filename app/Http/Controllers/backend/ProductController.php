<?php

namespace App\Http\Controllers\backend;

use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isNull;

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
            'product_name' => 'required|min:10|max:45',
            'sku_name' => 'required|min:2|max:30',
            'stock' => 'required',
            'specification' => 'required',
            'description' => 'required',

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
        $imageUrl = str()->slug($request->product_name);
        $ext = $request->product_image->extension();
        $image_name = $this->slugGenerator($imageUrl) . '.' . $ext;
        $upload_product_img = $request->product_image->storeAs('product', $image_name, 'public');
        $product->image_url = config('app.url') . 'storage/' . $upload_product_img;
        $product->image = $upload_product_img;
        if(!isset($request->banner)){
            $product->banner = '0';
        }else{
            $product->banner = '1';
        }if(!isset($request->featured)){
            $product->featured = '0';
        }else{
            $product->featured = '1';
        }if(!isset($request->trending)){
            $product->trending = '0';
        }else{
            $product->trending = '1';
        }if(!isset($request->deals_of_the_day)){
            $product->deals_of_the_day = '0';
        }else{
            $product->deals_of_the_day = '1';
        }
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
        $products = Product::latest()->paginate(5);
        return view('backend.product.view', compact('products'));
    }

    //edit product method
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::get();
        $sub_categories = SubCategory::get();
        return view('backend.product.edit', compact('product','categories', 'sub_categories'));
    }
    //update product method
    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required',
            'product_name' => 'required|min:10|max:45',
            'sku_name' => 'required|min:2|max:30',
            'stock' => 'required',
            'specification' => 'required',
            'description' => 'required',

        ]);
        $product = Product::find($id);
        $product->category_id = $request->category;
        $product->sub_category_id = $request->sub_category;
        $product->title = $request->product_name;
        $product->sku = $request->sku_name;
        $product->stock = $request->stock;
        $product->description = $request->description;
        $product->specification = $request->specification;
        if ($request->hasFile('image')){
            $imageUrl = str()->slug($request->product_name);
            $ext = $request->product_image->extension();
            $image_name = $this->slugGenerator($imageUrl) . '.' . $ext;
            $upload_product_img = $request->product_image->storeAs('product', $image_name, 'public');
            $product->image_url = config('app.url') . 'storage/' . $upload_product_img;
            $product->image = $upload_product_img;
        }
        if(!isset($request->banner)){
            $product->banner = '0';
        }else{
            $product->banner = '1';
        }if(!isset($request->featured)){
            $product->featured = '0';
        }else{
            $product->featured = '1';
        }if(!isset($request->trending)){
            $product->trending = '0';
        }else{
            $product->trending = '1';
        }if(!isset($request->deals_of_the_day)){
            $product->deals_of_the_day = '0';
        }else{
            $product->deals_of_the_day = '1';
        }
        $product->save();
        $notification = [
            'message' => 'Product update successful !',
            'alert-type' => 'success'
        ];
        return back()
                ->with($notification);
    }
    //view single product 
    public function viewSingle($id)
    {
        $product = Product::find($id);
        return view('backend.product.viewSingle', compact('product'));
    }
    //Soft delete product method
    public function delete($id)
    {
        Product::find($id)->delete();
        $notification = [
            'message' => 'Product move to trash !',
            'alert-type' => 'warning'
        ];
        return back()
                ->with($notification);
    }



    private function slugGenerator($title)
    {
        $count = Product::where('image_url', 'LIKE', '%' . $title . '%')->count();
        if($count > 0){
            $title = $title . '-' . $count++;
        }
        return $title;
    }
}

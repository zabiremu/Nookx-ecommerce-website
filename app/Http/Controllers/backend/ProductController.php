<?php

namespace App\Http\Controllers\backend;

use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
use App\Models\ProductPrice;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Storage;
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
            'price' => 'required',

        ]);
        $product = new Product();

        $product->user_id = $user->id;
        $product->category_id = $request->category;
        $product->sub_category_id = $request->sub_category;
        $product->title = $request->product_name;
        $product->sku = $request->sku_name;
        $product->stock = $request->stock;
        $product->product_tag = $request->product_tag;
        $product->description = $request->description;
        $product->specification = $request->specification;
        $imageUrl = str()->slug($request->product_name);
        $ext = $request->product_image->extension();
        $image_name = $this->slugGenerator($imageUrl) . '.' . $ext;
        $upload_product_img = $request->product_image->storeAs('product', $image_name, 'public');
        $product->image_url = config('app.url') . 'storage/' . $upload_product_img;
        $product->image = $image_name;
        if (!isset($request->banner)) {
            $product->banner = '0';
        } else {
            $product->banner = '1';
        }
        if (!isset($request->featured)) {
            $product->featured = '0';
        } else {
            $product->featured = '1';
        }
        if (!isset($request->trending)) {
            $product->trending = '0';
        } else {
            $product->trending = '1';
        }
        if (!isset($request->deals_of_the_day)) {
            $product->deals_of_the_day = '0';
        } else {
            $product->deals_of_the_day = '1';
        }
        $product->save();
        $productPrice = new ProductPrice();
        $productPrice->product_id = $product->id;
        $productPrice->price = $request->price;
        $productPrice->discount = $request->discount;
        $productPrice->save();

        if ($request->gallery_images) {
            $gallery_images = $request->gallery_images;
            foreach ($gallery_images as $image) {
                $ext = $image->extension();
                $image_name = 'gallery-' . uniqid() . '.' . $ext;
                $upload_product_img = $image->storeAs('product/gallery', $image_name, 'public');
                $galleryImage = new ProductImage();
                $galleryImage->product_id = $product->id;
                $galleryImage->image = $image_name;
                $galleryImage->image_url = config('app.url') . 'storage/' . $upload_product_img;
                $galleryImage->save();
            }
        }

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
        $products = Product::where('SoftDelete', 1)->latest()->paginate(5);
        return view('backend.product.view', compact('products'));
    }

    //edit product method
    public function edit($id)
    {
        $product = Product::where('id', $id)->with('category', 'subCategory', 'productPrice')->first();
        $categories = Category::get();
        $sub_categories = SubCategory::get();
        $galleryImage = ProductImage::where('product_id', $id)->get();
        return view('backend.product.edit', compact('product', 'categories', 'sub_categories', 'galleryImage'));
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
            'price' => 'required',

        ]);
        $product = Product::find($id);
        if ($request->hasFile('product_image')) {
            $product->category_id = $request->category;
            $product->sub_category_id = $request->sub_category;
            $product->title = $request->product_name;
            $product->sku = $request->sku_name;
            $product->stock = $request->stock;
            $product->product_tag = $request->product_tag;
            $product->description = $request->description;
            $product->specification = $request->specification;
            $path = 'product/' . $product->image;
            if (Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
            }
            $imageUrl = str()->slug($request->product_name);
            $ext = $request->product_image->extension();
            $image_name = $this->slugGenerator($imageUrl) . '.' . $ext;
            $upload_product_img = $request->product_image->storeAs('product', $image_name, 'public');
            $product->image_url = config('app.url') . 'storage/' . $upload_product_img;
            $product->image = $image_name;
            if (!isset($request->banner)) {
                $product->banner = '0';
            } else {
                $product->banner = '1';
            }
            if (!isset($request->featured)) {
                $product->featured = '0';
            } else {
                $product->featured = '1';
            }
            if (!isset($request->trending)) {
                $product->trending = '0';
            } else {
                $product->trending = '1';
            }
            if (!isset($request->deals_of_the_day)) {
                $product->deals_of_the_day = '0';
            } else {
                $product->deals_of_the_day = '1';
            }
            $product->save();
            $productPrice = ProductPrice::where('product_id', $id)->first();
            $productPrice->product_id = $product->id;
            $productPrice->price = $request->price;
            $productPrice->discount = $request->discount;
            $productPrice->save();
            $notification = [
                'message' => 'Product update successful !',
                'alert-type' => 'success'
            ];
            return back()
                ->with($notification);
        } else {
            $product->category_id = $request->category;
            $product->sub_category_id = $request->sub_category;
            $product->title = $request->product_name;
            $product->sku = $request->sku_name;
            $product->stock = $request->stock;
            $product->description = $request->description;
            $product->specification = $request->specification;
            $product->product_tag = $request->product_tag;
            if (!isset($request->banner)) {
                $product->banner = '0';
            } else {
                $product->banner = '1';
            }
            if (!isset($request->featured)) {
                $product->featured = '0';
            } else {
                $product->featured = '1';
            }
            if (!isset($request->trending)) {
                $product->trending = '0';
            } else {
                $product->trending = '1';
            }
            if (!isset($request->deals_of_the_day)) {
                $product->deals_of_the_day = '0';
            } else {
                $product->deals_of_the_day = '1';
            }
            $product->save();
            $productPrice = ProductPrice::where('product_id', $id)->first();
            $productPrice->product_id = $product->id;
            $productPrice->price = $request->price;
            $productPrice->discount = $request->discount;
            $productPrice->save();
            $notification = [
                'message' => 'Product update successful !',
                'alert-type' => 'success'
            ];
            return back()
                ->with($notification);
        }
    }

    public function galleryImage(Request $request, $id)
    {
        $request->validate([
            'gallery_image' => 'required',
        ]);
        $productImage = ProductImage::find($id);
        $path = 'product/gallery/' . $productImage->image;
        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
        $ext = $request->gallery_image->extension();
        $image_name = 'gallery-' . uniqid() . '.' . $ext;
        $upload_product_img = $request->gallery_image->storeAs('product/gallery', $image_name, 'public');
        $productImage->image_url = config('app.url') . 'storage/' . $upload_product_img;
        $productImage->image = $image_name;
        $productImage->save();
        $notification = [
            'message' => 'Product gallery image successful updated!',
            'alert-type' => 'success'
        ];
        return back()
            ->with($notification);
    }

    public function deleteGalleryImage($id)
    {
        $productImage = ProductImage::find($id);
        $path = 'product/gallery/' . $productImage->image;
        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
        $productImage->delete();
        $notification = [
            'message' => 'Product gallery image successful updated!',
            'alert-type' => 'success'
        ];
        return back()
            ->with($notification);
    }

    //view single product
    public function viewSingle($id)
    {
        $product = Product::where('id', $id)->with('category', 'subCategory', 'productPrice')->first();
        $galleryImage = ProductImage::where('product_id', $id)->get();
        return view('backend.product.viewSingle', compact('product', 'galleryImage'));
    }

    //Soft delete product method
    public function delete($id)
    {
        $product =Product::find($id);

       $product->SoftDelete = 0;
        $product->save();
        $notification = [
            'message' => 'Product move to the Trashed folder  !',
            'alert-type' => 'warning'
        ];
        return back()
                ->with($notification);
    }


    private function slugGenerator($title)
    {
        $count = Product::where('image_url', 'LIKE', '%' . $title . '%')->count();
        if ($count > 0) {
            $title = $title . '-' . $count++;
        }
        return $title;
    }
}

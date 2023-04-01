<?php

namespace App\Http\Controllers\backend;

use App\Models\Product;
use App\Models\ProductCupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CategoryCupon;
use App\Models\Category;
use App\Models\Cupon;

class CuponController extends Controller
{
    public function productCupon()
    {
        $totalCupon = ProductCupon::with('product')
            ->latest()
            ->get();
        return view('backend.cupon.productCupon', compact('totalCupon'));
    }

    public function createCupon()
    {
        $products = Product::latest()->get(['id', 'title']);
        return view('backend.cupon.createProductCuopn', compact('products'));
    }

    public function storeCupon(Request $request)
    {
        $store = new ProductCupon();
        $store->product_id = $request->product_name;
        $store->name = $request->Cupon_Name;
        $store->discount = $request->Cupon_Discount;
        $store->start_date = $request->Start_Date;
        $store->end_date = $request->End_Date;
        $store->save();
        $notification = [
            'message' => 'Cupon Successfully Created',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('porduct.cupon')
            ->with($notification);
    }

    public function editCupon($id)
    {
        $selectedProduct = ProductCupon::find($id);
        $products = Product::latest()->get(['id', 'title']);
        return view('backend.cupon.editCupon', compact('products', 'selectedProduct'));
    }

    public function updateCupon(Request $request, $id)
    {
        $store = ProductCupon::find($id);
        $store->product_id = $request->product_name;
        $store->name = $request->Cupon_Name;
        $store->discount = $request->Cupon_Discount;
        $store->start_date = $request->Start_Date;
        $store->end_date = $request->End_Date;
        $store->save();
        $notification = [
            'message' => 'Cupon Successfully Updated',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('porduct.cupon')
            ->with($notification);
    }
    public function deleteCupon($id)
    {
        $selectedProduct = ProductCupon::find($id);
        $selectedProduct->delete();
        $notification = [
            'message' => 'Cupon Successfully Deleted',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('porduct.cupon')
            ->with($notification);
    }

    public function categoryCupon()
    {
        $totalCupon = categoryCupon::with('category')
            ->latest()
            ->get();
        return view('backend.categoryCupon.view', compact('totalCupon'));
    }
    public function createCatCupon()
    {
        $categories = Category::latest()->get(['id','cat_name']);
        return view('backend.categoryCupon.create', compact('categories'));
    }

    public function storeCatCupon(Request $request)
    {
        $store = new CategoryCupon();
        $store->category_id = $request->cat_name;
        $store->name = $request->Cupon_Name;
        $store->discount = $request->Cupon_Discount;
        $store->start_date = $request->Start_Date;
        $store->end_date = $request->End_Date;
        $store->save();
        $notification = [
            'message' => 'Cupon Successfully Created',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('cat.cupon')
            ->with($notification);
    }

    public function editCatCupon($id)
    {
        $selectedCategory = CategoryCupon::with('category')->find($id);
        $category = Category::latest()->get(['id', 'cat_name']);
        return view('backend.categoryCupon.edit', compact('category', 'selectedCategory'));
    }

    public function updateCatCupon(Request $request,$id)
    {
        $store = CategoryCupon::find($id);
        $store->category_id = $request->cat_name;
        $store->name = $request->Cupon_Name;
        $store->discount = $request->Cupon_Discount;
        $store->start_date = $request->Start_Date;
        $store->end_date = $request->End_Date;
        $store->save();
        $notification = [
            'message' => 'Cupon Successfully Updated',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('cat.cupon')
            ->with($notification);
    }

    public function deleteCatCupon($id)
    {
        $selectedProduct = CategoryCupon::find($id);
        $selectedProduct->delete();
        $notification = [
            'message' => 'Cupon Successfully Deleted',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('cat.cupon')
            ->with($notification);
    }

    public function allCupon()
    {
        $cupons = Cupon::latest()->get();
        return view('backend.allCupon.view',compact('cupons'));
    }

    public function createAllCupon()
    {
        return view('backend.allCupon.create');
    }

    public function storeAllCupon(Request $request)
    {
        $store = new Cupon();
        $store->name = $request->Cupon_Name;
        $store->discount = $request->Cupon_Discount;
        $store->start_date = $request->Start_Date;
        $store->end_date = $request->End_Date;
        $store->save();
        $notification = [
            'message' => 'Cupon Successfully Created',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('all.product.cupon')
            ->with($notification);
    }

    public function editAllCupon($id)
    {
        $cupon = Cupon::find($id);
        return view('backend.allCupon.edit', compact('cupon'));
    }

    public function updateAllCupon(Request $request,$id)
    {
        $store = Cupon::find($id);
        $store->name = $request->Cupon_Name;
        $store->discount = $request->Cupon_Discount;
        $store->start_date = $request->Start_Date;
        $store->end_date = $request->End_Date;
        $store->save();
        $notification = [
            'message' => 'Cupon Successfully Updated',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('all.product.cupon')
            ->with($notification);
    }

    public function deleteAllCupon($id)
    {
        $cupon = Cupon::find($id);
        $cupon->delete();
        $notification = [
            'message' => 'Cupon Successfully Deleted',
            'alert-type' => 'success',
        ];
        return redirect()
            ->route('all.product.cupon')
            ->with($notification);
    }
}

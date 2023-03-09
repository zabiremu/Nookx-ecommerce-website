<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class RecycleBinController extends Controller
{
    //
    public function all()
    {
        $products = Product::where('SoftDelete', 0)->latest()->get();
        return view('backend.recycle.recyclebin', compact('products'));
    }
    public function restoreProduct($id)
    {
        $product =Product::find($id);

        if($product->SoftDelete == 0){
            $product->SoftDelete = 1;
        }else{
            $product->SoftDelete =0;
        }
        $product->save();
        $notification = [
            'message' => 'Product successfully restored !',
            'alert-type' => 'success'
        ];
        return back()
                ->with($notification);
    }

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();
        $notification = [
            'message' => 'Product successfully deleted !',
            'alert-type' => 'error'
        ];
        return back()
                ->with($notification);
    }
}

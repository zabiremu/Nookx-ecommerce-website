<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ProductPrice;

class Product extends Model
{
    use HasFactory;

    public function productPrice()
    {
        return $this->hasOne(ProductPrice::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function  productImage()
    {
        return $this->hasMany(ProductImage::class);
    }
}

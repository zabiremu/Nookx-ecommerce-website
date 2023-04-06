<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'carts';
    protected $guarded = [];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function productPrice()
    {
        return $this->belongsTo(ProductPrice::class);
    }
}

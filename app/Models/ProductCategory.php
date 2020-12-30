<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class ProductCategory extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function products()
    {
       return $this->hasMany(Product::class,'p_category_id');
    }


    public function brands()
    {
        return $this->belongsToMany(Brand::class,
            'brand_product_category', 'p_category_id', 'brand_id');
    }

}

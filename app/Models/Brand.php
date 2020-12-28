<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function products()
    {
        $this->hasMany(Product::class);
    }

    public function productCategories()
    {
        return $this->belongsToMany(ProductCategory::class,
            'brand_product_category', 'brand_id', 'p_category_id');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function productCategories()
    {
        return $this->belongsTo(ProductCategory::class,'p_category_id');
    }


    public function brands()
    {
        return $this->belongsTo(Brand::class);
    }


}

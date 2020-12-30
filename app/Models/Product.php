<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;
use App\Helpers\Product as HelperProduct;

class Product extends Model
{

    use HasFactory;

    protected $guarded = [];

    protected $appends = ['is_favorite', 'after_discount','tax_val', 'value_added_tax'];

    protected $hidden =  ['is_favorite'];

//    protected $casts = [
//        'price' => 'decimal'
//    ];

    public function getIsFavoriteAttribute()
    {
      return HelperProduct::isFavorite($this->attributes['product_id'], 'favorite_products');
    }

    public function getTaxValAttribute()
    {
       return (string) HelperProduct::getTaxVal($this->attributes['tax_id'], 'taxes') . '%';
    }

    public function getValueAddedTaxAttribute()
    {
        $tax_val = HelperProduct::getTaxVal($this->attributes['tax_id'], 'taxes');
        $after_discount = HelperProduct::getAfterDiscount($this->attributes['price'], $this->attributes['discount']);
        return $after_discount + ($after_discount * ($tax_val / 100));
    }

    public function getAfterDiscountAttribute()
    {
       return HelperProduct::getAfterDiscount($this->attributes['price'], $this->attributes['discount']);
    }

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


    public function userProductsFavorites()
    {
        return $this->belongsToMany(User::class, 'favorite_products');
    }


    public function tax()
    {
        return $this->belongsTo(Tax::class);
    }

    /*
    protected static function boot()
    {
        parent::boot();

        static::creating(function (Model $model) {
            $model->setAttribute('uuid', Str::uuid());
        });

    }
*/


}

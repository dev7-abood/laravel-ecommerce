<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Helpers\ProductHelper;

class Product extends Model
{

    use HasFactory;

    protected $guarded = [];

    protected $appends = [
        'is_favorite',
        'after_discount',
        'tax_val',
        'value_added_tax',
        'tax_before_increase'
    ];

//    protected $hidden =  ['is_favorite'];

    protected $casts = [
        'price' => 'float'
    ];

    public function getIsFavoriteAttribute()
    {
      return ProductHelper::isFavorite($this->attributes['id'], 'favorite_products');
    }

    public function getTaxValAttribute()
    {
       return (float) ProductHelper::getTaxVal($this->attributes['tax_id'], 'taxes');
    }

    public function getTaxBeforeIncreaseAttribute()
    {
        $tax_val = ProductHelper::getTaxVal($this->attributes['tax_id'], 'taxes');
        $after_discount = ProductHelper::getAfterDiscount($this->attributes['price'], $this->attributes['discount']);
        return round(($after_discount * ($tax_val / 100)), 2);
    }

    public function getValueAddedTaxAttribute()
    {
        $tax_val = (float) ProductHelper::getTaxVal($this->attributes['tax_id'], 'taxes');
        $after_discount = (float) ProductHelper::getAfterDiscount($this->attributes['price'], $this->attributes['discount']);
        return round(($after_discount + ($after_discount * ($tax_val / 100))), 2);
    }

    public function getAfterDiscountAttribute()
    {
       return round(ProductHelper::getAfterDiscount($this->attributes['price'], $this->attributes['discount']),2);
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

    public function productPropertyNames()
    {
        return $this->hasMany(ProductPropertyName::class)->with('productPropertyValues');
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

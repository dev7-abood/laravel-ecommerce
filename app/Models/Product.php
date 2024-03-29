<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Helpers\ProductHelper;
use App\Helpers\CurrencyConverter;
use Illuminate\Support\Str;

class Product extends Model
{

    use HasFactory;

    protected $guarded = [];

    protected $appends =
        [
        'category_slug',
        'user_is_favorite',
        'tax_val_percent',
        'value_added_tax',
        'vat_after_discount',
        'pay',
    ];

    protected $hidden =  [
        'id',
        'user_is_favorite',
        'created_at',
        'updated_at'
    ];

    protected $casts =
        [
        'main_price'       => 'float',
        'discount_percent' => 'float',
        'tax_val_percent'  => 'float'
        ];


    public function getCategorySlugAttribute()
    {
        return ProductHelper::categorySlug($this->attributes['id']);
    }

    public function getUserIsFavoriteAttribute()
    {
      return ProductHelper::userIsFavorite('favorite_products' ,$this->attributes['id']);
    }

    public function getTaxValPercentAttribute()
    {
       return (float) ProductHelper::getTaxVal('taxes', $this->attributes['tax_id']);
    }

    public function getVatAfterDiscountAttribute()
    {
        $texPercent =  (float) ProductHelper::getTaxVal('taxes', $this->attributes['tax_id']);
        return $vat = ProductHelper::calcVAT($this->attributes['main_price'], $texPercent);
    }

    public function getPayAttribute()
    {
        $texPercent =  (float) ProductHelper::getTaxVal('taxes', $this->attributes['tax_id']);
        $main_price = ProductHelper::calcVAT($this->attributes['main_price'], $texPercent);
        return ProductHelper::calcDiscount($main_price, $this->attributes['discount_percent']);
    }

    public function getValueAddedTaxAttribute()
    {
        $texPercent  =  (float) ProductHelper::getTaxVal('taxes', $this->attributes['tax_id']);
        return $valueAddTax = ProductHelper::valueAddedTax($this->attributes['main_price'], $texPercent);
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

    public function ratingProducts()
    {
        return $this->hasMany(ProductRating::class);
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

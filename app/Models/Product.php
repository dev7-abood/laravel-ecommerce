<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Helpers\ProductHelper;
use App\Helpers\CurrencyConverter;

class Product extends Model
{

    use HasFactory;

    protected $guarded = [];

    protected $appends = ['user_is_favorite', 'tax_val_percent', 'value_added_tax', 'vat_after_discount', 'pay', 'currency_info'];

//    protected $hidden =  ['is_favorite'];

    protected $casts =
        [
        'main_price'       => 'float',
        'discount_percent' => 'float',
        'tax_val_percent'  => 'float'
        ];

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
        $converter = new  CurrencyConverter();
        $texPercent =  (float) ProductHelper::getTaxVal('taxes', $this->attributes['tax_id']);
        $vat = ProductHelper::calcVAT($this->attributes['main_price'], $texPercent);
//        return round($vat, 2);
        return round($vat * $converter->currency['value'], 2);
    }

    public function getPayAttribute()
    {
        $converter = new  CurrencyConverter();
        $texPercent =  (float) ProductHelper::getTaxVal('taxes', $this->attributes['tax_id']);
        $main_price = ProductHelper::calcVAT($this->attributes['main_price'], $texPercent);
        $pay = ProductHelper::calcDiscount($main_price, $this->attributes['discount_percent']);
//        return round($pay, 2);
        return round($pay * $converter->currency['value'], 2);
    }

    public function getValueAddedTaxAttribute()
    {
        $converter = new  CurrencyConverter();
        $texPercent  =  (float) ProductHelper::getTaxVal('taxes', $this->attributes['tax_id']);
        $valueAddTax = ProductHelper::valueAddedTax($this->attributes['main_price'], $texPercent);
//        return round($valueAddTax, 2);
        return round($valueAddTax * $converter->currency['value'], 2);
    }

    public function getCurrencyInfoAttribute()
    {
        $converter = new  CurrencyConverter();
        return $converter->currency;
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

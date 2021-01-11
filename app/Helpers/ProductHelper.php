<?php


namespace App\Helpers;

use Illuminate\Support\Facades\DB;


class ProductHelper{

    public static function userIsFavorite($table_name, $product_id)
    {
        try {
            $hasFav = DB::table($table_name)
                ->where('user_id', auth()->id())
                ->where('product_id', $product_id)->first()->product_id;

            if ($hasFav)
                return true;
        }catch (\ErrorException $errorException) {
            return false;
        }
    }


    public static function categorySlug($product_id)
    {
        try {
            return DB::table('product_categories')->find($product_id)->slug;
        }catch (\ErrorException $errorException) {
            return null;
        }
    }

    public static function getTaxVal($table_name ,$tax_id)
    {
        try {
            return DB::table($table_name)->where('id', $tax_id)->first()->tax_percent;
        }catch (\ErrorException $errorException) {
            return null;
        }
    }


    public static function calcVAT($price, $taxPercent)
    {
        return ($price + ($price * $taxPercent / 100));
    }


    public static function calcDiscount($price, $discountPercent)
    {
        return ($price - ($price * $discountPercent / 100));
    }

    public static function valueAddedTax($price, $taxPercent)
    {
        return $price * ($taxPercent / 100);
    }
}

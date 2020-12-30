<?php


namespace App\Helpers;

use Illuminate\Support\Facades\DB;


class Product{

    public static function isFavorite($product_id, $table_name)
    {
        try {
            $hasFav = DB::table($table_name)
                ->where('user_id', auth()->id())
                ->where('product_id', $product_id)->first()->product_id;

            if ($hasFav)
                return true;
        }catch (\ErrorException $errorException)
        {
            return false;
        }
    }

    public static function getTaxVal($tax_id, $table_name)
    {
        try {
            return DB::table($table_name)->where('id' ,$tax_id)->first()->tax_val;
        }catch (\ErrorException $errorException)
        {
            return null;
        }
    }

    public static function getAfterDiscount($price, $discount)
    {
        return ($price - ($price * $discount / 100));

    }




}

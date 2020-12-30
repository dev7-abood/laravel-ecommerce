<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPropertyName extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function products()
    {
        return $this->belongsTo(Product::class);
    }

    public function productPropertyValues()
    {
        return $this->belongsToMany(ProductPropertyValue::class, 'p_property_name_p_property_value', 'p_property_name_id', 'p_property_value_id');
    }

}

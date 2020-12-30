<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPropertyValue extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function productPropertyName()
    {
        return $this->belongsToMany(ProductPropertyName::class, 'p_property_name_p_property_value',
            'p_property_value_id', 'p_property_name_id');
    }
}

<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductCategory extends Controller
{
    public function index($brandSlug = null)
    {
        return view('main.product-category.index', ['brandSlug' => $brandSlug]);
    }
}

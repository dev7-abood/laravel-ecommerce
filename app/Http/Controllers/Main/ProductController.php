<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function singleIndex($slug)
    {
        return view('main.single-product.index', ['slug' => $slug]);
    }
}

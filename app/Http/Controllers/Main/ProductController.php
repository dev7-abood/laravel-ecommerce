<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($catSlug, $slug)
    {
        return view('main.single-product.index', ['catSlug' => $catSlug, 'slug' => $slug]);
    }
}

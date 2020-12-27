<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
    public function show($slug)
    {
        return view('main.products.show', ['slug' => $slug]);
    }
}

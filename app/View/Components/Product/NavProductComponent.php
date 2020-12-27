<?php

namespace App\View\Components\Product;

use App\Models\ProductCategory;
use Illuminate\View\Component;

class NavProductComponent extends Component
{
    public $slug;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($slug)
    {
        $this->slug = $slug;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $productCat = ProductCategory::where('slug', $this->slug)->first();
        if ($productCat) {
            return view('components.product.nav-product-component',['productCat' => $productCat]);
        }
    }
}

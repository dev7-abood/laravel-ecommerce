<?php

namespace App\View\Components\Product\Single;

use Illuminate\View\Component;

class ProductNavSingleComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.product.single-product.nav-product-component');
    }
}

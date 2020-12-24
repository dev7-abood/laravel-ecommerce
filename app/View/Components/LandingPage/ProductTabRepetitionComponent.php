<?php

namespace App\View\Components\LandingPage;

use Illuminate\View\Component;

use App\Models\Product;

class ProductTabRepetitionComponent extends Component
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
        return view('components.landing-page.product-tab-repetition-component');
    }

    public function getNewProducts()
    {
       return Product::where('new', true)->get();
    }

}

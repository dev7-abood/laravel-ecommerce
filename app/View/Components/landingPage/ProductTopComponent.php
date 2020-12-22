<?php

namespace App\View\Components\landingPage;

use Illuminate\View\Component;

class ProductTopComponent extends Component
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
        return view('components.landing-page.product-top-component');
    }
}
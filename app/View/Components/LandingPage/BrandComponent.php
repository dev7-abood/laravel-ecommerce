<?php

namespace App\View\Components\LandingPage;

use Illuminate\View\Component;

use App\Models\Brand;

class BrandComponent extends Component
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
        return view('components.landing-page.brand-component');
    }

    public function brands()
    {
        return Brand::with('image')->where('is_published', true)->get();
    }

}

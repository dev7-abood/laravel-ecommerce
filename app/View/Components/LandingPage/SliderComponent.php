<?php

namespace App\View\Components\LandingPage;

use Illuminate\View\Component;

use App\Models\Slider;

class SliderComponent extends Component
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
        return view('components.landing-page.slider-component');
    }


    public function sliders()
    {
        return Slider::with('image')->get();
    }

}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-landing-page.head-component/>
<body>
<!-- offcanvas-overlay start -->
<div class="offcanvas-overlay"></div>
<!-- offcanvas-overlay end -->
<!-- OffCanvas Cart Start -->
<livewire:landing-page.off-canvas-component/>
<!-- OffCanvas Cart End -->
<!-- header start -->
<header>
    <!-- header top start -->
    <livewire:landing-page.header-top-component/>
    <!-- header top end -->
    <!-- header-middle satrt -->
    <livewire:landing-page.header-middle-component/>
    <!-- header-middle end -->
</header>
<!-- header end -->
<!-- main slider start -->
<x-landing-page.slider-component/>
<!-- main slider end -->
<!-- static media start -->
<x-landing-page.statics-component/>
<!-- static media end -->
<!-- common banner  start -->
<x-landing-page.common-banner-one-component/>
<!-- common banner  end -->
<!-- product tab start -->
<x-landing-page.product-top-component/>
<!-- product tab end -->
<!-- common banner  start -->
<x-landing-page.common-banner-tow-component/>
<!-- common banner  end -->
<!-- product tab repetition start -->
<x-landing-page.product-tab-repetition-component/>
<!-- product tab repetition end -->

<!-- blog-section start -->
<!-- blog-section end -->
<!-- brand slider start -->

<x-landing-page.brand-component/>
<!-- brand slider end -->
<!-- footer strat -->
<x-landing-page.footer-component/>
<!-- footer end -->
<livewire:landing-page.models-middle-component/>
<x-landing-page.script-component/>
@livewireScripts
</body>
</html>

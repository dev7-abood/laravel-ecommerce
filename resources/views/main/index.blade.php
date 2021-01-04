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
@if(Request::is('/'))
<!-- main slider start -->
<x-landing-page.slider-component/>
<!-- main slider end -->
<!-- static media start -->
<x-landing-page.statics-component/>
<!-- static media end -->
<!-- common banner  start -->
{{--<x-landing-page.common-banner-one-component/>--}}
{{--<!-- common banner  end -->--}}
{{--<!-- ProductHelper tab start -->--}}
{{--<x-landing-page.product-top-component/>--}}
{{--<!-- ProductHelper tab end -->--}}
{{--<!-- common banner  start -->--}}
{{--<x-landing-page.common-banner-tow-component/>--}}
<!-- common banner  end -->
<!-- ProductHelper tab repetition start -->
{{--<x-landing-page.single-product-product-tab-repetition-component/>--}}
<!-- ProductHelper tab repetition end -->
<!-- blog-section start -->
<!-- blog-section end -->
<!-- brand slider start -->
<button id="dd">dd</button>
<x-landing-page.brand-component/>
@endif
<!-- brand slider end -->
@yield('container')
<!-- footer strat -->
<x-landing-page.footer-component/>
<!-- footer end -->
<livewire:landing-page.models-middle-component/>
<x-landing-page.script-component/>
@livewireScripts
<script src="/js/app.js"></script>
<script>

    document.getElementById('dd').addEventListener('click',function(e){
        console.log('s')
        Swal.fire('ddd');
    });</script>
<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false"></script>
@yield('script')
</body>
</html>

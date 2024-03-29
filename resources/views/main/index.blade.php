<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-landing-page.head-component/>
<body>
@if(Request::is('/'))
{{--<div id="load_screen"><div class="loader"><div class="loader-content">--}}
{{--            <div class="spinner-grow align-self-center"></div></div></div></div>--}}
{{--<div class="offcanvas-overlay"></div>--}}
@endif
<livewire:landing-page.off-canvas-component/>
<header>
    <livewire:landing-page.header-top-component/>
    <livewire:landing-page.header-middle-component/>
</header>
@if(Request::is('/'))
<x-landing-page.slider-component/>
<x-landing-page.brand-component/>
<livewire:landing-page.list-products-livewire/>
@endif
@yield('container')
<div id="footerDisplay" style="display: none">
    <x-landing-page.footer-component/>
</div>
<livewire:landing-page.models-middle-component/>
<x-landing-page.script-component/>
@livewireScripts
<script>
    window.addEventListener('load', _ => {
        document.getElementById('brand-slider').style.visibility = 'visible'
    })
    window.addEventListener('turbolinks:load', _ => {
        document.getElementById('brand-slider').style.visibility = 'visible'
    })
</script>
<script src="/js/app.js"></script>
<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/2.2.3/jquery.elevatezoom.min.js" integrity="sha512-UH428GPLVbCa8xDVooDWXytY8WASfzVv3kxCvTAFkxD2vPjouf1I3+RJ2QcSckESsb7sI+gv3yhsgw9ZhM7sDw==" crossorigin="anonymous" data-turbolinks-track="reload"></script>
<script>
    $('.hide-chat-box').click(function () {
        $('.chat-content').slideToggle();
    });
</script>
@yield('script')
</body>
</html>

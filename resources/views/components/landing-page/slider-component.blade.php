<section class="bg-light">
    <div class="main-slider dots-style theme1">
        @foreach($sliders as $slider)
        <div class="slider-item bg-img" style="background-image: url({{$slider->image->url}})">
            <div class="container">
                <div class="row align-items-center slider-height">
                    <div class="col-12">
                        <div class="slider-content">
                            <p
                                class="text animated"
                                data-animation-in="fadeInDown"
                                data-delay-in=".300"
                            >
                                {{$slider->title}}
                            </p>
                            <h2 class="title animated">
                <span
                    class="animated d-block"
                    data-animation-in="fadeInLeft"
                    data-delay-in=".800"
                >{{$slider->sub_title}}</span
                >
                                <span
                                    class="animated font-weight-bold"
                                    data-animation-in="fadeInRight"
                                    data-delay-in="1.5"
                                >{{$slider->discount}}</span
                                >
                            </h2>
                            <a
                                href="{{$slider->link}}"
                                class="btn btn-outline-primary btn--lg animated mt-45 mt-sm-25"
                                data-animation-in="fadeInLeft"
                                data-delay-in="1.9"
                            >Shop now</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

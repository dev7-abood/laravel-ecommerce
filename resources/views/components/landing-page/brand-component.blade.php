<div class="brand-slider-section theme1 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="brand-init border-top py-35 slick-nav-brand">
                    @foreach($brands as $brand)
                    <div class="slider-item">
                        <div class="single-brand">
                            <a
                                href="{{route('main.categories.index', ['brandSlug' => $brand->slug])}}"
                                class="brand-thumb"
                            >
                                <img src="{{$brand->image}}" alt="brand-thumb-nail" title="{{$brand->title}}"/>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    <!-- slider-item end -->
                </div>
            </div>
        </div>
    </div>
</div>

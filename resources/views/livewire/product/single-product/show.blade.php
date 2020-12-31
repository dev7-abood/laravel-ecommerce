<section class="product-single theme1 pt-60">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="main-img mb-4">
                    <img class="" height="390" id="main-img" src="{{$product->image}}" data-zoom-image="{{$product->image}}" alt="" title=""
                         style="border-radius: 2px;object-fit: cover;background-size: cover">
                </div>

                <div class="image-select responsive">
                    <div class="col-2 my-2 mx-2" style="width: 180px">
                        <img id="image_slider0" onclick="changMinImage(this)" class="img-fluid product-image" src="{{$product->image}}"
                             alt="" style="border-radius: 2px;cursor: pointer" height="250">
                    </div>

                    @foreach($product->images as $img)
                        <div class="col-2 my-2 mx-2" style="width: 200px">
                            <img id="image_slider{{$loop->index+1}}" class="img-fluid product-image" height="250" src="{{$img->url}}" alt=""
                                 style="border-radius: 2px;cursor: pointer"
                                 onclick="changMinImage(this)">
                        </div>
                    @endforeach
                </div>

            </div>
            <div class="col-lg-6">

                <div class="single-product-info">
                    <div class="single-product-head">
                        <h2 class="title mb-20">{{$product->name}}</h2>
                        <div class="star-content mb-20">
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                            {{--                            <a href="#" id="write-comment"><span class="ml-2"><i class="far fa-comment-dots"></i></span>--}}
                            {{--                                Read reviews <span>(1)</span></a>--}}
                            {{--                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter"><span class="edite"><i class="far fa-edit"></i></span> Write a--}}
                            {{--                                review</a>--}}
                        </div>
                    </div>
                    <div class="product-body mb-40">
                        <div class="d-flex align-items-center mb-30">


               <span class="product-price mr-20">
                 @if($product->discount)
                       <del class="del">${{$product->price}}</del>
                   @endif
                      <span class="onsale">${{$product->after_discount}}</span></span>
                            @if($product->discount)
                                <span style="z-index: -1"
                                    class="badge position-static bg-success rounded-0">Save {{$product->discount}}%</span>
                            @endif
                        </div>

                        {!! $product->desc !!}
                    </div>

                    @foreach($productProperty as $property)
                        @if($property['type'] == 'select')
                            <div class="product-footer">
                                <div class="d-flex justify-content-between">
                                    <div class="product-size mr-5">
                                        <h3 class="title">{{$property['p_property_name']}}</h3>
                                        <select>
                                            @foreach($property['product_property_values'] as  $value)
                                                <option value="0">{{$value['p_property_value']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @endif
                                    @endforeach
                                    @foreach($productProperty as $property)
                                        @if($property['type'] == 'checkbox')
                                            <div class="check-box ml-5">
                                                <h4 class="title">{{$property['p_property_name']}}</h4>
                                                <div class="d-flex check-box-wrap-list">
                                                    @foreach($property['product_property_values'] as  $value)
                                                        <div class="widget-check-box">
                                                            <div
                                                                style="background-color: {{$value['p_property_value']}};width: 15px;height: 5px"></div>
                                                            <input type="checkbox"
                                                                   id="p_property_value_{{$loop->index}}">
                                                            <label for="p_property_value_{{$loop->index}}"></label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="product-count style d-flex flex-column flex-sm-row mt-30 mb-20">
                                    <div class="count d-flex">
                                        <input type="number" min="1" max="10" step="1" value="1">
                                        <div class="button-group">
                                            <button class="count-btn increment">
                                                <i class="fas fa-chevron-up"></i>
                                            </button>
                                            <button class="count-btn decrement">
                                                <i class="fas fa-chevron-down"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-dark btn--xl mt-5 mt-sm-0">
                                            <span class="mr-2"><i class="ion-android-add"></i></span>
                                            Add to cart
                                        </button>
                                    </div>
                                </div>
                                <div class="addto-whish-list">
                                    <a href="#"><i class="icon-heart"></i> Add to wishlist</a>
{{--                                    <a href="#"><i class="icon-shuffle"></i> Add to compare</a>--}}
                                </div>
                                <div class="pro-social-links mt-10">
                                    <ul class="d-flex align-items-center">
                                        <li class="share">Share</li>
                                        <li>
                                            <a href="#"><i class="ion-social-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-google"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-pinterest"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
</section>
@section('script')
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $('.responsive').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            arrows: true,
            prevArrow: `<div class="d-flex justify-content-center">
<button style="width: 100%;background-color: #5A5AC9;color: white;border-radius: 50%" ><i class="fas fa-arrow-left"></i></button>
</div>
`,
            // nextArrow: `<button hidden></button>`,
             nextArrow: `<div class="d-flex justify-content-between" style="position: absolute;right: 0">
<button  style="width: 100%;background-color: #5A5AC9;color: white;border-radius: 50%" ><i class="fas fa-arrow-right"></i></button>
</div>`,
        });
        document.getElementById('prevArrowEdit').classList.remove("slick-arrow");
    </script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/2.2.3/jquery.elevatezoom.min.js" integrity="sha512-UH428GPLVbCa8xDVooDWXytY8WASfzVv3kxCvTAFkxD2vPjouf1I3+RJ2QcSckESsb7sI+gv3yhsgw9ZhM7sDw==" crossorigin="anonymous"></script>
    <script>
        function changMinImage(e) {
            let getSlideImage = e
            document.getElementById('main-img').setAttribute('src', getSlideImage.src)
            $('#main-img').data('zoom-image', e.src).elevateZoom({cursor: "crosshair",scrollZoom : true});

        }
        $(`#main-img`).elevateZoom({cursor: "crosshair",scrollZoom : true});
    </script>
@endsection

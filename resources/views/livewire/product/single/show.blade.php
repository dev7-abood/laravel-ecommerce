<section class="product-single theme1 pt-60">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="main-img mb-4">
                    <img class="" height="450" id="main-img" src="{{$product->image}}" alt="" title=""
                         style="border-radius: 2px">
                </div>

                <div class="image-select responsive">
                        <div class="col-2 my-2 mx-2" style="width: 180px">
                            <img onclick="changMinImage(this)" class="img-fluid product-image" src="{{$product->image}}"
                                 alt="" style="border-radius: 2px;cursor: pointer" height="250">
                        </div>

                        @foreach($product->images as $img)
                            <div class="col-2 my-2 mx-2" style="width: 200px">
                                <img class="img-fluid product-image" height="250" src="{{$img->url}}" alt=""
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
                            <a href="#" id="write-comment"><span class="ml-2"><i class="far fa-comment-dots"></i></span>
                                Read reviews <span>(1)</span></a>
                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter"><span class="edite"><i class="far fa-edit"></i></span> Write a
                                review</a>
                        </div>
                    </div>
                    <div class="product-body mb-40">
                        <div class="d-flex align-items-center mb-30">
              <span class="product-price mr-20"><del class="del">$23.90</del>
                <span class="onsale">$21.51</span></span>
                            <span class="badge position-static bg-dark rounded-0">Save 10%</span>
                        </div>
                       {!! $product->desc !!}
                    </div>
                    <div class="product-footer">
                        <div class="d-flex justify-content-around">
                            <div class="product-size mr-5">
                                <h3 class="title">size</h3>
                                <select>
                                    <option value="0">S</option>
                                    <option value="1">M</option>
                                    <option value="2">L</option>
                                    <option value="3">XL</option>
                                </select>
                            </div>
                            <div class="check-box ml-5">
                                <h4 class="title">color</h4>
                                <div class="d-flex check-box-wrap-list">
                                    <div class="widget-check-box color-white">
                                        <input type="checkbox" id="test13">
                                        <label for="test13"></label>
                                    </div>
                                    <div class="widget-check-box color-black">
                                        <input type="checkbox" id="test14">
                                        <label for="test14"></label>
                                    </div>
                                </div>
                            </div>
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
                            <a href="#"><i class="icon-shuffle"></i> Add to compare</a>
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
            prevArrow: `<button id="prevArrowEdit" style="width: 100%;background-color: #b4a3ef;color: white;border-radius: 4px" ><i style="font-size: 20px" class="fas fa-arrows-alt-h"></i></button>`,
            nextArrow: `<button hidden></button>`
        });
        function changMinImage(e) {
            // single-product = document.querySelector('.single-product-image')
            // for (let i = 0; i < single-product.length; i++) {
            //     console.log('fakeImage: ', single-product[i]);
            // }
            let getSlideImage = e.src
            document.getElementById('main-img').setAttribute('src', getSlideImage)
        }
        document.getElementById('prevArrowEdit').classList.remove("slick-arrow");
        // document.getElementById('prevArrowEdit').classList.remove("slick-arrow");
    </script>
@endsection
@section('style')
    <style>
        #prevArrowEdit:hover{
            background-color: #1b1e21;
        }
    </style>
@endsection

<div>
<section class="product-single theme1 pt-60">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="main-img mb-4">
                    <img class="" height="390" id="main-img" src="{{$product->image}}"
                         data-zoom-image="{{$product->image}}" alt="" title=""
                         style="border-radius: 2px;object-fit: cover;background-size: cover">
                </div>
                <div class="image-select responsive">
                    <div class="col-2 my-2 mx-2" style="width: 180px">
                        <img id="image_slider0" onclick="changMinImage(this)" class="img-fluid product-image"
                             src="{{$product->image}}"
                             alt="" style="border-radius: 2px;cursor: pointer" height="250">
                    </div>

                    @foreach($product->images as $img)
                        <div class="col-2 my-2 mx-2" style="width: 200px">
                            <img id="image_slider{{$loop->index+1}}" class="img-fluid product-image" height="250"
                                 src="{{$img->url}}" alt=""
                                 style="border-radius: 2px;cursor: pointer"
                                 onclick="changMinImage(this)">
                        </div>
                    @endforeach
                </div>

            </div>
            <div class="col-lg-6">

                <div class="single-product-head">
                    <h2 class="title mb-20">{{$product->name}}</h2>
                    <div class="star-content mb-20">
                        {{--                            <span class="star-on"><i class="ion-ios-star"></i> </span>--}}
                        {{--                            <span class="star-on"><i class="ion-ios-star"></i> </span>--}}
                        {{--                            <span class="star-on"><i class="ion-ios-star"></i> </span>--}}
                        {{--                            <span class=""><i class="ion-ios-star"></i> </span>--}}
                        @for($i = 0; $i < $rating; $i++)
                            <span class="star-on"><i class="ion-ios-star"></i> </span>
                        @endfor


                        <button onclick="rating()" type="button"><span class="ml-2 btn-link"><i
                                    class="fas fa-star-half-alt"></i></span>
                            Rate
                        </button>
                        <span>&nbsp;&nbsp;</span>
                        <button type="button"><span class="edite btn-link"><i class="far fa-edit"></i></span> Write
                            a
                            review
                        </button>
                    </div>
                </div>
                <div class="product-body mb-40">
                    <div class="d-flex align-items-center mb-30">
               <span class="product-price mr-20">
                 @if($product->discount_percent != 0)
                       <del
                           class="del">{{$product->currency_info['currency_icon']}} {{$product->vat_after_discount}}</del>
                   @endif
                   <span class="onsale"
                         style="font-size: 18px">{{$product->currency_info['currency_icon']}} {{$product->pay}}</span>
                     <br/>
                 @if($product->discount_percent != 0)
                      </span>
                        <span style="z-index: -1"
                              class="badge position-static bg-success rounded-0">Save {{$product->discount_percent}}%</span>
                    </div>
                    @endif
                    <div style="font-weight: normal">
                        {!! $product->desc !!}
                    </div>
                </div>
                <form wire:submit.prevent="submitAddToCard">

                    <div class="d-flex justify-content-between">
                        @foreach($productProperty as $property)
                            @if($property['type'] == 'select')
                                <div class="product-footer">
                                    <div class="product-size mr-5">
                                        <h3 class="title">{{$property['p_property_name']}}</h3>
                                        <select wire:model="select">
                                            <option></option>
                                            @foreach($property['product_property_values'] as  $value)
                                                <option
                                                    value="{{$value['p_property_value']}}">{{$value['p_property_value']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
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
                                                       wire:model="checkbox.{{$value['p_property_value']}}"
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
                            <input id="quantity" value="1" type="number" min="1" max="10" step="1"
                                   disabled>
                            <div class="button-group">
                                <button onclick="increment()" type="button" class="count-btn">
                                    <i class="fas fa-chevron-up"></i>
                                </button>
                                <button onclick="decrement()" type="button" class="count-btn">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </div>
                        </div>
                        <div>
                            <button wire:loading.remove type="submit"
                                    class="btn btn-dark btn--xl mt-5 mt-sm-0">
                                <span class="mr-2"><i class="ion-android-add"></i></span>
                                Add to cart
                            </button>
                            <button wire:loading class="btn btn-dark btn--xl mt-5 mt-sm-0" type="button"
                                    disabled>
                                                <span class="spinner-border spinner-border-sm" role="status"
                                                      aria-hidden="true"></span>
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
                </form>
            </div>
        </div>
    </div>
</section>
    @section('script')
        <script>
            function increment() {
                let quantity = document.getElementById('quantity').value;
                if (parseInt(quantity) <= 9) {
                    let value = parseInt(quantity) + 1;
                    document.getElementById('quantity').value = value;
                    Livewire.emit('quantity', value)
                }

            }

            function decrement() {
                let quantity = document.getElementById('quantity').value;
                if (quantity > 1) {
                    let value = parseInt(quantity) - 1;
                    document.getElementById('quantity').value = value;
                    Livewire.emit('quantity', value)
                }

            }

            window.addEventListener('conform_product_exist_or_not', e => {
                Swal.fire({
                    title: 'The product in the card do you want to add the same product to card?',
                    showCancelButton: true,
                    icon: 'info',
                    confirmButtonText: `Save`,
                    customClass: {
                        confirmButton: 'bg-success' //insert class here
                    }
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        livewire.emit('store')
                    } else if (result.isDenied) {
                        Swal.fire('Changes are not saved', '', 'info')
                    }
                })
            })
        </script>
        <script>

            let newWidth = window.innerWidth;
            if (newWidth > 994) {
                function changMinImage(e) {
                    let getSlideImage = e.src
                    document.getElementById('main-img').setAttribute('src', getSlideImage)
                    $('#main-img').data('zoom-image', getSlideImage).elevateZoom({
                        cursor: "crosshair",
                        scrollZoom: true
                    });
                }

                $(`#main-img`).elevateZoom({cursor: "crosshair", scrollZoom: true});
            }


            let ratingVal;

            function ratingValue(value) {
                return ratingVal = value;
            }

            function rating() {
                Swal.fire({
                    title: '<p style="font-size: 20px">Your rating helps us to do the best</p>',
                    html:
                        `
                      <form class="d-flex justify-content-center">
                     <ul class="rate-area">
                      <input onclick="ratingValue(5)"  type="radio" id="5-star" name="crating" value="5">
                      <label for="5-star" title="Amazing">5 stars</label>
                      <input onclick="ratingValue(4)" type="radio" id="4-star" name="crating" value="4">
                       <label for="4-star" title="Good">4 stars</label>
                       <input onclick="ratingValue(3)" type="radio" id="3-star" name="crating" value="3">
                      <label for="3-star" title="Average">3 stars</label>
                       <input onclick="ratingValue(2)" type="radio" id="2-star" name="crating" value="2">
                      <label for="2-star" title="Not Good">2 stars</label>
                      <input onclick="ratingValue(1)" type="radio" id="1-star" required=""
                      name="crating" value="1" aria-required="true">
                       <label for="1-star" title="Bad">1 star</label>
                     </ul>
                    <form>

                    `,
                    showCloseButton: false,
                    showCancelButton: true,
                    focusConfirm: false,
                })
                    .then(result => {
                        if (result.isConfirmed) {
                            Livewire.emit('rating', ratingVal)
                        }
                    })
            }

        </script>

        <script>
            $('.responsive').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3,
                arrows: true,
                prevArrow: `<div class="d-flex justify-content-center"><button style="width: 100%;background-color: #5A5AC9;color: white;border-radius: 50%" ><i class="fas fa-arrow-left"></i></button></div>`,
                nextArrow: `<div class="d-flex justify-content-between" style="position: absolute;right: 0"><button  style="width: 100%;background-color: #5A5AC9;color: white;border-radius: 50%" ><i class="fas fa-arrow-right"></i></button></div>`,
            });
            document.getElementById('prevArrowEdit').classList.remove("slick-arrow");
        </script>


    @endsection
    @section('style')
        <link rel="stylesheet" href="/main/assets/css/rating.css"/>
        <meta name="turbolinks-visit-control" content="reload">
    @endsection
</div>

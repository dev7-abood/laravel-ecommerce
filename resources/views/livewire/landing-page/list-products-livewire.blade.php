<div>
    <div class="container tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="row grid-view theme1 mb-10" id="card">
                @foreach($products as $product)
                    @php $rating_val = $this->productRating($product->id); @endphp
                    <div class="col-sm-6 col-lg-4 col-xl-3 mb-30" data-product-number="{{$loop->index+1}}">
                        <div class="card product-card">
                            <div class="card-body">
                                <div class="product-thumbnail position-relative">
{{--                                    <span class="badge badge-danger top-right">New</span>--}}
                                    <a href="{{route('main.product.Single.index', ['catSlug' => $product->category_slug, 'slug' => $product->slug])}}">
                                        <img class="first-img" src="{{$product->image}}" alt="thumbnail">
                                    </a>
                                    <!-- product links -->
                                    <ul class="actions d-flex justify-content-center">
                                        <li>
                                            <a class="action" href="wishlist.html">
                        <span data-toggle="tooltip" data-placement="bottom" title="" class="icon-heart"
                              data-original-title="add to wishlist">
                        </span>
                                            </a>
                                        </li>

                                        <li>
                                            <a class="action" target="_blank" href="{{route('main.product.Single.index', ['catSlug' => $product->category_slug, 'slug' => $product->slug])}}">
                                                <span data-toggle="tooltip" data-placement="bottom" title=""
                                                      class="icon-magnifier" data-original-title="Show"></span>
                                            </a>
                                        </li>


                                    </ul>
                                    <!-- product links end-->
                                </div>
                                <div class="product-desc py-0 px-0">
                                    <h3 class="title">
                                        <a href="{{route('main.product.Single.index', ['catSlug' => $product->category_slug, 'slug' => $product->slug])}}">{{$product->name}}</a>
                                    </h3>
                                    <div class="star-rating">

                                        {!! str_repeat('<span class="star-on"><i class="ion-ios-star"></i> </span>', (int) $rating_val ) !!}
                                        @if($this->productRating($product->id) != 0)
                                            {!! str_repeat('<span class="text-dark"><i class="ion-ios-star"></i> </span>',  (5 -  (int) $rating_val )) !!}
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">


                                        <div class="d-flex align-items-center mb-30">
               <span class="product-price mr-20">
                 @if($product->discount_percent != 0)
                       <del
                           class="del">{{$currency['currency_icon']}} {{$this->calculateCurrency($product->vat_after_discount)}}</del>
                   @endif
                   <span class="onsale"
                         style="font-size: 18px">{{$currency['currency_icon']}} {{$this->calculateCurrency($product->pay)}}</span>
                     <br/>
                 @if($product->discount_percent != 0)
                      </span>
                                            <span class="badge position-static bg-success rounded-0">Save {{$product->discount_percent}}%</span>
                                        </div>
                                        @endif
                                        <button class="pro-btn" data-toggle="modal" data-target="#add-to-cart">
                                            <i class="icon-basket"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center my-5">
        <div class="spinner-border" id="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        @section('script')
            <script>
                window.onscroll = function (ev) {
                    let productNumber = document.getElementById('card').lastElementChild.dataset.productNumber;
                    if (productNumber != {{$total}}) {
                        if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
                            Livewire.emit('loadMoreProducts');
                        }
                    }
                    if (productNumber == {{$total}}) {
                        document.getElementById('spinner-border').style.display = 'none'
                        document.getElementById('footerDisplay').style.display = 'block'
                    }
                };

            </script>
        @endsection
    </div>
</div>

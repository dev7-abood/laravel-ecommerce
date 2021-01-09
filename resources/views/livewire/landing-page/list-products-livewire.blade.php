<div>

    <div class="container tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="row grid-view theme1 mb-10" id="card">
                @foreach($products as $product)
                <div class="col-sm-6 col-lg-4 col-xl-3 mb-30" data-product-number="{{$loop->index+1}}">
                    <div class="card product-card">
                        <div class="card-body">
                            <div class="product-thumbnail position-relative">
                                <span class="badge badge-danger top-right">New</span>
                                <a href="single-product.html">
                                    <img class="first-img" src="{{$product->image}}" alt="thumbnail">
                                </a>
                                <!-- product links -->
                                <ul class="actions d-flex justify-content-center">
                                    <li>
                                        <a class="action" href="wishlist.html">
                        <span data-toggle="tooltip" data-placement="bottom" title="" class="icon-heart" data-original-title="add to wishlist">
                        </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="action" href="#" data-toggle="modal" data-target="#quick-view">
                                            <span data-toggle="tooltip" data-placement="bottom" title="" class="icon-magnifier" data-original-title="Quick view"></span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- product links end-->
                            </div>
                            <div class="product-desc py-0 px-0">
                                <h3 class="title">
                                    <a href="shop-grid-4-column.html">{{$product->name}}</a>
                                </h3>
                                <div class="star-rating">
                                    {!! str_repeat('<span class="star-on"><i class="ion-ios-star"></i> </span>', (int) $this->productRating($product->id)) !!}
                                    @if($this->productRating($product->id) != 0)
                                    {!! str_repeat('<span class="text-dark"><i class="ion-ios-star"></i> </span>',  (5 -  (int) $this->productRating($product->id))) !!}
                                    @endif
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="product-price">{{$currency['currency_icon'].' '.round($currency['value'] * $product->pay, 2)}}</span>
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
                if (productNumber != {{$total}}){
                    if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
                        Livewire.emit('loadMoreProducts');
                    }
                }
                if (productNumber == {{$total}})
                {
                    document.getElementById('spinner-border').style.display = 'none'
                    document.getElementById('footerDisplay').style.display = 'block'
                }
            };
        </script>
    @endsection
</div>
</div>

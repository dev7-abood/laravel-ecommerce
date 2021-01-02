<div class="product-tab bg-white pt-40 pb-40">
    <div class="container">
        <div class="grid-nav-wraper bg-lighten2 mb-30">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 mb-3 mb-md-0">
                    <nav class="shop-grid-nav">
                    </nav>
                </div>
                <div class="col-12 col-md-6 position-relative">
                    <div class="shop-grid-button d-flex align-items-center">
                        <span class="sort-by">Sort by:</span>
                        <button
                            class="d-flex justify-content-between"
                            type="button"
                            id="dropdownMenuButton"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                            Relevance <span class="ion-android-arrow-dropdown"></span>
                        </button>
                        <div
                            class="dropdown-menu shop-grid-menu"
                            aria-labelledby="dropdownMenuButton"
                        >
                            <a class="dropdown-item" href="#">Relevance</a>
                            <a class="dropdown-item" href="#"> Name, A to Z</a>
                            <a class="dropdown-item" href="#"> Name, Z to A</a>
                            <a class="dropdown-item" href="#"> Price, low to high</a>
                            <a class="dropdown-item" href="#"> Price, high to low</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div
                class="tab-pane fade show active"
                id="pills-home"
                role="tabpanel"
                aria-labelledby="pills-home-tab">
                <div class="row grid-view theme1">
                    @foreach($products as $product)
                        <div class="col-sm-6 col-md-4 mb-30">
                            <div class="card product-card">
                                <div class="card-body">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-right">New</span>
                                        <a href="{{route('main.product.Single.index', ['catSlug' => $productCat->slug, 'slug' => $product->slug]) }}">
                                            <img
                                                class="first-img"
                                                src="{{asset($product->image)}}"
                                                alt="thumbnail"
                                            />
                                        </a>
                                        <ul class="actions d-flex justify-content-center">
                                            <li>
                                                <a id="{{$product->uuid}}" class="action" style="cursor: pointer;@if($product->is_favorite) background-color: #5a5ac9;color: white @endif"
                                                   >
                        <span wire:click="addToFavorite('{{$product->uuid}}')" data-toggle="tooltip" data-placement="bottom" title="" class="icon-heart"
                              data-original-title="add to wishlist">
                        </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="action" href="#" data-toggle="modal" data-target="#compare">
                                                    <span data-toggle="tooltip" data-placement="bottom" title=""
                                                          class="icon-shuffle"
                                                          data-original-title="Add to compare"></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="action" href="#" data-toggle="modal"
                                                   data-target="#quick-view">
                                                    <span data-toggle="tooltip" data-placement="bottom" title=""
                                                          class="icon-magnifier"
                                                          data-original-title="Quick view"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-desc py-0 px-0">
                                        <h3 class="title">
                                            <a href="{{route('main.product.Single.index', ['catSlug' => $productCat->slug, 'slug' => $product->slug]) }}"
                                            >{{$product->name}}</a
                                            >
                                        </h3>
                                        <div class="star-rating">
                                            <span class="ion-ios-star"></span>
                                            <span class="ion-ios-star"></span>
                                            <span class="ion-ios-star"></span>
                                            <span class="ion-ios-star"></span>
                                            <span class="ion-ios-star de-selected"></span>
                                        </div>
                                        <div
                                            class="d-flex align-items-center justify-content-between"
                                        >
                                            <span class="product-price">${{$product->after_discount}}</span>
                                            <button
                                                class="pro-btn"
                                                data-toggle="modal"
                                                data-target="#add-to-cart"
                                            >
                                                <i class="icon-basket"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center">
                    {!! $products->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>


@section('script')
    <script>
        document.addEventListener('addToFavorite', e => {
            document.getElementById(e.detail.uuid).style.backgroundColor = '#5a5ac9'
            document.getElementById(e.detail.uuid).style.color = '#fff'
        })
    </script>
@endsection

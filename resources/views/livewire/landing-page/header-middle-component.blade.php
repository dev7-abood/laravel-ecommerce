<div id="sticky" class="header-middle theme1 py-15 py-lg-0">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-6 col-lg-2 col-xl-2">
                <div class="logo">
                    <a href="/"
                    ><img src="assets/img/logo/logo.png" alt="logo"
                        /></a>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7 d-none d-lg-block">
                <ul class="main-menu d-flex justify-content-center">
                    <li>
                        <a href="#">Pages <i class="ion-ios-arrow-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="about-us.html">About Page</a></li>
                            <li><a href="cart.html">Cart Page</a></li>
                            <li><a href="checkout.html">Checkout Page</a></li>
                            <li><a href="compare.html">Compare Page</a></li>
                            <li><a href="login.html">Login &amp; Register Page</a></li>
                            <li><a href="myaccount.html">Account Page</a></li>
                            <li><a href="wishlist.html">Wishlist Page</a></li>
                        </ul>
                    </li>
{{--                    <li>--}}
{{--                        <a href="blog-grid-3-column.html"--}}
{{--                        >Blog <i class="ion-ios-arrow-down"></i--}}
{{--                            ></a>--}}
{{--                        <ul class="sub-menu">--}}
{{--                            <li>--}}
{{--                                <a href="blog-grid-3-column.html">Blog Grid</a>--}}
{{--                                <ul class="sub-menu">--}}
{{--                                    <li>--}}
{{--                                        <a href="blog-grid-3-column.html">Blog Grid 3 column</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="blog-grid-4-column.html">Blog Grid 4 column</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="blog-grid-left-sidebar.html"--}}
{{--                                        >Blog Grid Left Sidebar</a--}}
{{--                                        >--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="blog-grid-right-sidebar.html"--}}
{{--                                        >Blog Grid Right Sidebar</a--}}
{{--                                        >--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="blog-single-left-sidebar.html">Blog List</a>--}}
{{--                                <ul class="sub-menu">--}}
{{--                                    <li>--}}
{{--                                        <a href="blog-list-left-sidebar.html"--}}
{{--                                        >Blog List Left Sidebar</a--}}
{{--                                        >--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="blog-list-right-sidebar.html"--}}
{{--                                        >Blog List Right Sidebar</a--}}
{{--                                        >--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="single-blog.html">Blog Single</a>--}}
{{--                                <ul class="sub-menu">--}}
{{--                                    <li><a href="single-blog.html">Single Blog</a></li>--}}
{{--                                    <li>--}}
{{--                                        <a href="blog-single-left-sidebar.html"--}}
{{--                                        >Blog Single Left Sidebar</a--}}
{{--                                        >--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="blog-single-right-sidebar.html"--}}
{{--                                        >Blog Single Right Sidbar</a--}}
{{--                                        >--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                    <li><a href="{{route('main.contactUs.index')}}">contact Us</a></li>
                    <li><a href="{{route('main.categories.index')}}">Categories</a></li>
                </ul>
            </div>
            <div class="col-6 col-lg-3 col-xl-2">
                <!-- search-form end -->
                <div class="d-flex align-items-center justify-content-end">
                    <!-- static-media end -->
                    <div class="cart-block-links theme1 d-none d-sm-block">
                        <ul class="d-flex">
                            <li>
                                <a href="javascript:void(0)" class="search search-toggle">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </li>
                            <li>
                                <a class="offcanvas-toggle" href="#offcanvas-wishlist">
                    <span class="position-relative">
                      <i class="icon-heart"></i>
                      <span class="badge cbdg1">{{$favoriteCount}}</span>
                    </span>
                                </a>
                            </li>
                            <li class="mr-xl-0 cart-block position-relative">
                                <a class="offcanvas-toggle" href="#offcanvas-cart">
                    <span class="position-relative">
                      <i class="icon-bag"></i>
                      <span class="badge cbdg1">{{$cardCount}}</span>
                    </span>
                                </a>
                            </li>
                            <!-- cart block end -->
                        </ul>
                    </div>
                    <div class="mobile-menu-toggle theme1 d-lg-none">
                        <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                            <svg viewbox="0 0 700 550">
                                <path
                                    d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                    id="top"
                                ></path>
                                <path d="M300,320 L540,320" id="middle"></path>
                                <path
                                    d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                    id="bottom"
                                    transform="translate(480, 320) scale(1, -1) translate(-480, -318)"
                                ></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

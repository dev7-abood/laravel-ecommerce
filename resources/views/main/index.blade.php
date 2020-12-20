<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-landing-page.head-component/>
<body>
<!-- offcanvas-overlay start -->
<div class="offcanvas-overlay"></div>
<!-- offcanvas-overlay end -->
<!-- OffCanvas Cart Start -->
<livewire:landing-page.off-canvas-component/>
<!-- OffCanvas Cart End -->
<!-- header start -->
<header>
    <!-- header top start -->
    <livewire:landing-page.header-top-component/>
    <!-- header top end -->
    <!-- header-middle satrt -->
    <livewire:landing-page.header-middle-component/>
    <!-- header-middle end -->
</header>
<!-- header end -->
<!-- main slider start -->
<x-landing-page.slider-component/>
<!-- main slider end -->
<!-- staic media start -->
<x-landing-page.staic-component/>
<!-- staic media end -->
<!-- common banner  start -->
<div class="common-banner bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-30">
                <div class="banner-thumb">
                    <a
                        href="shop-grid-4-column.html"
                        class="zoom-in d-block overflow-hidden"
                    >
                        <img src="assets/img/banner/1.jpg" alt="banner-thumb-naile"/>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-30">
                <div class="banner-thumb">
                    <a
                        href="shop-grid-4-column.html"
                        class="zoom-in d-block overflow-hidden"
                    >
                        <img src="assets/img/banner/2.jpg" alt="banner-thumb-naile"/>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-30">
                <div class="banner-thumb">
                    <a
                        href="shop-grid-4-column.html"
                        class="zoom-in d-block overflow-hidden"
                    >
                        <img src="assets/img/banner/3.jpg" alt="banner-thumb-naile"/>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- common banner  end -->
<!-- product tab start -->
<section class="product-tab bg-white pt-50 pb-80">
    <div class="container">
        <div class="product-tab-nav mb-50">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title pb-3 mb-3">Our products</h2>
                        <p class="text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Perspiciatis, culpa?
                        </p>
                    </div>
                </div>
                <div class="col-12">
                    <nav class="product-tab-menu theme1">
                        <ul
                            class="nav nav-pills justify-content-center"
                            id="pills-tab"
                            role="tablist"
                        >
                            <li class="nav-item">
                                <a
                                    class="nav-link active"
                                    id="pills-home-tab"
                                    data-toggle="pill"
                                    href="#pills-home"
                                    role="tab"
                                    aria-controls="pills-home"
                                    aria-selected="true"
                                >new products</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    id="pills-profile-tab"
                                    data-toggle="pill"
                                    href="#pills-profile"
                                    role="tab"
                                    aria-controls="pills-profile"
                                    aria-selected="false"
                                >onsale</a
                                >
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    id="pills-contact-tab"
                                    data-toggle="pill"
                                    href="#pills-contact"
                                    role="tab"
                                    aria-controls="pills-contact"
                                    aria-selected="false"
                                >upcoming products</a
                                >
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- product-tab-nav end -->
        <div class="row">
            <div class="col-12">
                <div class="tab-content" id="pills-tabContent">
                    <!-- first tab-pane -->
                    <div
                        class="tab-pane fade show active"
                        id="pills-home"
                        role="tabpanel"
                        aria-labelledby="pills-home-tab"
                    >
                        <div class="product-slider-init theme1 slick-nav">
                            <div class="slider-item">
                                <div class="card product-card">
                                    <div class="card-body p-0">
                                        <div class="media flex-column">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img
                                                        class="first-img"
                                                        src="assets/img/product/1.png"
                                                        alt="thumbnail"
                                                    />
                                                </a>
                                                <!-- product links -->
                                                <ul class="actions d-flex justify-content-center">
                                                    <li>
                                                        <a class="action" href="wishlist.html">
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="add to wishlist"
                                  class="icon-heart"
                              >
                              </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="action"
                                                            href="#"
                                                            data-toggle="modal"
                                                            data-target="#compare"
                                                        >
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="Add to compare"
                                  class="icon-shuffle"
                              ></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="action"
                                                            href="#"
                                                            data-toggle="modal"
                                                            data-target="#quick-view"
                                                        >
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="Quick view"
                                  class="icon-magnifier"
                              ></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- product links end-->
                                            </div>
                                            <div class="media-body">
                                                <div class="product-desc">
                                                    <h3 class="title">
                                                        <a href="shop-grid-4-column.html"
                                                        >All Natural Makeup Beauty Cosmetics</a
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
                                                        <span class="product-price">$11.90</span>
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
                                </div>
                            </div>
                            <!-- slider-item end -->
                            <div class="slider-item">
                                <div class="card product-card">
                                    <div class="card-body p-0">
                                        <div class="media flex-column">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img
                                                        class="first-img"
                                                        src="assets/img/product/2.png"
                                                        alt="thumbnail"
                                                    />
                                                </a>
                                                <!-- product links -->
                                                <ul class="actions d-flex justify-content-center">
                                                    <li>
                                                        <a class="action" href="wishlist.html">
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="add to wishlist"
                                  class="icon-heart"
                              >
                              </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="action"
                                                            href="#"
                                                            data-toggle="modal"
                                                            data-target="#compare"
                                                        >
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="Add to compare"
                                  class="icon-shuffle"
                              ></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="action"
                                                            href="#"
                                                            data-toggle="modal"
                                                            data-target="#quick-view"
                                                        >
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="Quick view"
                                  class="icon-magnifier"
                              ></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- product links end-->
                                            </div>
                                            <div class="media-body">
                                                <div class="product-desc">
                                                    <h3 class="title">
                                                        <a href="shop-grid-4-column.html"
                                                        >On Trend Makeup and Beauty Cosmetics</a
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
                                                        <span class="product-price">$11.90</span>
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
                                </div>
                            </div>
                            <!-- slider-item end -->
                            <div class="slider-item">
                                <div class="card product-card">
                                    <div class="card-body p-0">
                                        <div class="media flex-column">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img
                                                        class="first-img"
                                                        src="assets/img/product/3.png"
                                                        alt="thumbnail"
                                                    />
                                                </a>
                                                <!-- product links -->
                                                <ul class="actions d-flex justify-content-center">
                                                    <li>
                                                        <a class="action" href="wishlist.html">
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="add to wishlist"
                                  class="icon-heart"
                              >
                              </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="action"
                                                            href="#"
                                                            data-toggle="modal"
                                                            data-target="#compare"
                                                        >
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="Add to compare"
                                  class="icon-shuffle"
                              ></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="action"
                                                            href="#"
                                                            data-toggle="modal"
                                                            data-target="#quick-view"
                                                        >
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="Quick view"
                                  class="icon-magnifier"
                              ></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- product links end-->
                                            </div>
                                            <div class="media-body">
                                                <div class="product-desc">
                                                    <h3 class="title">
                                                        <a href="shop-grid-4-column.html"
                                                        >The Cosmetics and Beauty brand Shoppe</a
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
                                                        <span class="product-price">$21.51</span>
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
                                </div>
                            </div>
                            <!-- slider-item end -->
                            <div class="slider-item">
                                <div class="card product-card">
                                    <div class="card-body p-0">
                                        <div class="media flex-column">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img
                                                        class="first-img"
                                                        src="assets/img/product/4.png"
                                                        alt="thumbnail"
                                                    />
                                                </a>
                                                <!-- product links -->
                                                <ul class="actions d-flex justify-content-center">
                                                    <li>
                                                        <a class="action" href="wishlist.html">
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="add to wishlist"
                                  class="icon-heart"
                              >
                              </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="action"
                                                            href="#"
                                                            data-toggle="modal"
                                                            data-target="#compare"
                                                        >
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="Add to compare"
                                  class="icon-shuffle"
                              ></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="action"
                                                            href="#"
                                                            data-toggle="modal"
                                                            data-target="#quick-view"
                                                        >
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="Quick view"
                                  class="icon-magnifier"
                              ></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- product links end-->
                                            </div>
                                            <div class="media-body">
                                                <div class="product-desc">
                                                    <h3 class="title">
                                                        <a href="shop-grid-4-column.html"
                                                        >orginal Age Defying Cosmetics Makeup</a
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
                                                        <span class="product-price">$11.90</span>
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
                                </div>
                            </div>
                            <!-- slider-item end -->
                            <div class="slider-item">
                                <div class="card product-card">
                                    <div class="card-body p-0">
                                        <div class="media flex-column">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img
                                                        class="first-img"
                                                        src="assets/img/product/5.png"
                                                        alt="thumbnail"
                                                    />
                                                    <img
                                                        class="second-img"
                                                        src="assets/img/product/6.png"
                                                        alt="thumbnail"
                                                    />
                                                </a>
                                                <!-- product links -->
                                                <ul class="actions d-flex justify-content-center">
                                                    <li>
                                                        <a class="action" href="wishlist.html">
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="add to wishlist"
                                  class="icon-heart"
                              >
                              </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="action"
                                                            href="#"
                                                            data-toggle="modal"
                                                            data-target="#compare"
                                                        >
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="Add to compare"
                                  class="icon-shuffle"
                              ></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="action"
                                                            href="#"
                                                            data-toggle="modal"
                                                            data-target="#quick-view"
                                                        >
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="Quick view"
                                  class="icon-magnifier"
                              ></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- product links end-->
                                            </div>
                                            <div class="media-body">
                                                <div class="product-desc">
                                                    <h3 class="title">
                                                        <a href="shop-grid-4-column.html"
                                                        >orginal Clear Water Cosmetics On Trend</a
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
                                                        <span class="product-price">$11.90</span>
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
                                </div>
                            </div>
                            <!-- slider-item end -->
                        </div>
                    </div>
                    <!-- second tab-pane -->
                    <div
                        class="tab-pane fade"
                        id="pills-profile"
                        role="tabpanel"
                        aria-labelledby="pills-profile-tab"
                    >
                        <div class="product-slider-init theme1 slick-nav">
                            <div class="slider-item">
                                <div class="card product-card">
                                    <div class="card-body p-0">
                                        <div class="media flex-column">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img
                                                        class="first-img"
                                                        src="assets/img/product/1.png"
                                                        alt="thumbnail"
                                                    />
                                                </a>
                                                <!-- product links -->
                                                <ul class="actions d-flex justify-content-center">
                                                    <li>
                                                        <a class="action" href="wishlist.html">
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="add to wishlist"
                                  class="icon-heart"
                              >
                              </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="action"
                                                            href="#"
                                                            data-toggle="modal"
                                                            data-target="#compare"
                                                        >
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="Add to compare"
                                  class="icon-shuffle"
                              ></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="action"
                                                            href="#"
                                                            data-toggle="modal"
                                                            data-target="#quick-view"
                                                        >
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="Quick view"
                                  class="icon-magnifier"
                              ></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- product links end-->
                                            </div>
                                            <div class="media-body">
                                                <div class="product-desc">
                                                    <h3 class="title">
                                                        <a href="shop-grid-4-column.html"
                                                        >All Natural Makeup Beauty Cosmetics</a
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
                                                        <span class="product-price">$11.90</span>
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
                                </div>
                            </div>
                            <!-- slider-item end -->
                            <div class="slider-item">
                                <div class="card product-card">
                                    <div class="card-body p-0">
                                        <div class="media flex-column">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img
                                                        class="first-img"
                                                        src="assets/img/product/2.png"
                                                        alt="thumbnail"
                                                    />
                                                </a>
                                                <!-- product links -->
                                                <ul class="actions d-flex justify-content-center">
                                                    <li>
                                                        <a class="action" href="wishlist.html">
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="add to wishlist"
                                  class="icon-heart"
                              >
                              </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="action"
                                                            href="#"
                                                            data-toggle="modal"
                                                            data-target="#compare"
                                                        >
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="Add to compare"
                                  class="icon-shuffle"
                              ></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="action"
                                                            href="#"
                                                            data-toggle="modal"
                                                            data-target="#quick-view"
                                                        >
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="Quick view"
                                  class="icon-magnifier"
                              ></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- product links end-->
                                            </div>
                                            <div class="media-body">
                                                <div class="product-desc">
                                                    <h3 class="title">
                                                        <a href="shop-grid-4-column.html"
                                                        >On Trend Makeup and Beauty Cosmetics</a
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
                                                        <span class="product-price">$11.90</span>
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
                                </div>
                            </div>
                            <!-- slider-item end -->
                            <div class="slider-item">
                                <div class="card product-card">
                                    <div class="card-body p-0">
                                        <div class="media flex-column">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img
                                                        class="first-img"
                                                        src="assets/img/product/3.png"
                                                        alt="thumbnail"
                                                    />
                                                </a>
                                                <!-- product links -->
                                                <ul class="actions d-flex justify-content-center">
                                                    <li>
                                                        <a class="action" href="wishlist.html">
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="add to wishlist"
                                  class="icon-heart"
                              >
                              </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="action"
                                                            href="#"
                                                            data-toggle="modal"
                                                            data-target="#compare"
                                                        >
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="Add to compare"
                                  class="icon-shuffle"
                              ></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="action"
                                                            href="#"
                                                            data-toggle="modal"
                                                            data-target="#quick-view"
                                                        >
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="Quick view"
                                  class="icon-magnifier"
                              ></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- product links end-->
                                            </div>
                                            <div class="media-body">
                                                <div class="product-desc">
                                                    <h3 class="title">
                                                        <a href="shop-grid-4-column.html"
                                                        >The Cosmetics and Beauty brand Shoppe</a
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
                                                        <span class="product-price">$21.51</span>
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
                                </div>
                            </div>
                            <!-- slider-item end -->
                            <div class="slider-item">
                                <div class="card product-card">
                                    <div class="card-body p-0">
                                        <div class="media flex-column">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img
                                                        class="first-img"
                                                        src="assets/img/product/4.png"
                                                        alt="thumbnail"
                                                    />
                                                </a>
                                                <!-- product links -->
                                                <ul class="actions d-flex justify-content-center">
                                                    <li>
                                                        <a class="action" href="wishlist.html">
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="add to wishlist"
                                  class="icon-heart"
                              >
                              </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="action"
                                                            href="#"
                                                            data-toggle="modal"
                                                            data-target="#compare"
                                                        >
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="Add to compare"
                                  class="icon-shuffle"
                              ></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="action"
                                                            href="#"
                                                            data-toggle="modal"
                                                            data-target="#quick-view"
                                                        >
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="Quick view"
                                  class="icon-magnifier"
                              ></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- product links end-->
                                            </div>
                                            <div class="media-body">
                                                <div class="product-desc">
                                                    <h3 class="title">
                                                        <a href="shop-grid-4-column.html"
                                                        >orginal Age Defying Cosmetics Makeup</a
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
                                                        <span class="product-price">$11.90</span>
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
                                </div>
                            </div>
                            <!-- slider-item end -->
                            <div class="slider-item">
                                <div class="card product-card">
                                    <div class="card-body p-0">
                                        <div class="media flex-column">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img
                                                        class="first-img"
                                                        src="assets/img/product/5.png"
                                                        alt="thumbnail"
                                                    />
                                                    <img
                                                        class="second-img"
                                                        src="assets/img/product/6.png"
                                                        alt="thumbnail"
                                                    />
                                                </a>
                                                <!-- product links -->
                                                <ul class="actions d-flex justify-content-center">
                                                    <li>
                                                        <a class="action" href="wishlist.html">
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="add to wishlist"
                                  class="icon-heart"
                              >
                              </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="action"
                                                            href="#"
                                                            data-toggle="modal"
                                                            data-target="#compare"
                                                        >
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="Add to compare"
                                  class="icon-shuffle"
                              ></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="action"
                                                            href="#"
                                                            data-toggle="modal"
                                                            data-target="#quick-view"
                                                        >
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="Quick view"
                                  class="icon-magnifier"
                              ></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- product links end-->
                                            </div>
                                            <div class="media-body">
                                                <div class="product-desc">
                                                    <h3 class="title">
                                                        <a href="shop-grid-4-column.html"
                                                        >orginal Clear Water Cosmetics On Trend</a
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
                                                        <span class="product-price">$11.90</span>
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
                                </div>
                            </div>
                            <!-- slider-item end -->
                        </div>
                    </div>
                    <!-- third tab-pane -->
                    <div
                        class="tab-pane fade"
                        id="pills-contact"
                        role="tabpanel"
                        aria-labelledby="pills-contact-tab"
                    >
                        <div class="product-slider-init theme1 slick-nav">
                            <div class="slider-item">
                                <div class="card product-card">
                                    <div class="card-body p-0">
                                        <div class="media flex-column">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img
                                                        class="first-img"
                                                        src="assets/img/product/1.png"
                                                        alt="thumbnail"
                                                    />
                                                </a>
                                                <!-- product links -->
                                                <ul class="actions d-flex justify-content-center">
                                                    <li>
                                                        <a class="action" href="wishlist.html">
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="add to wishlist"
                                  class="icon-heart"
                              >
                              </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="action"
                                                            href="#"
                                                            data-toggle="modal"
                                                            data-target="#compare"
                                                        >
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="Add to compare"
                                  class="icon-shuffle"
                              ></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="action"
                                                            href="#"
                                                            data-toggle="modal"
                                                            data-target="#quick-view"
                                                        >
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="Quick view"
                                  class="icon-magnifier"
                              ></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- product links end-->
                                            </div>
                                            <div class="media-body">
                                                <div class="product-desc">
                                                    <h3 class="title">
                                                        <a href="shop-grid-4-column.html"
                                                        >All Natural Makeup Beauty Cosmetics</a
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
                                                        <span class="product-price">$11.90</span>
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
                                </div>
                            </div>
                            <!-- slider-item end -->
                            <div class="slider-item">
                                <div class="card product-card">
                                    <div class="card-body p-0">
                                        <div class="media flex-column">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img
                                                        class="first-img"
                                                        src="assets/img/product/2.png"
                                                        alt="thumbnail"
                                                    />
                                                </a>
                                                <!-- product links -->
                                                <ul class="actions d-flex justify-content-center">
                                                    <li>
                                                        <a class="action" href="wishlist.html">
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="add to wishlist"
                                  class="icon-heart"
                              >
                              </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="action"
                                                            href="#"
                                                            data-toggle="modal"
                                                            data-target="#compare"
                                                        >
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="Add to compare"
                                  class="icon-shuffle"
                              ></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="action"
                                                            href="#"
                                                            data-toggle="modal"
                                                            data-target="#quick-view"
                                                        >
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="Quick view"
                                  class="icon-magnifier"
                              ></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- product links end-->
                                            </div>
                                            <div class="media-body">
                                                <div class="product-desc">
                                                    <h3 class="title">
                                                        <a href="shop-grid-4-column.html"
                                                        >On Trend Makeup and Beauty Cosmetics</a
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
                                                        <span class="product-price">$11.90</span>
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
                                </div>
                            </div>
                            <!-- slider-item end -->
                            <div class="slider-item">
                                <div class="card product-card">
                                    <div class="card-body p-0">
                                        <div class="media flex-column">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img
                                                        class="first-img"
                                                        src="assets/img/product/3.png"
                                                        alt="thumbnail"
                                                    />
                                                </a>
                                                <!-- product links -->
                                                <ul class="actions d-flex justify-content-center">
                                                    <li>
                                                        <a class="action" href="wishlist.html">
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="add to wishlist"
                                  class="icon-heart"
                              >
                              </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="action"
                                                            href="#"
                                                            data-toggle="modal"
                                                            data-target="#compare"
                                                        >
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="Add to compare"
                                  class="icon-shuffle"
                              ></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="action"
                                                            href="#"
                                                            data-toggle="modal"
                                                            data-target="#quick-view"
                                                        >
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="Quick view"
                                  class="icon-magnifier"
                              ></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- product links end-->
                                            </div>
                                            <div class="media-body">
                                                <div class="product-desc">
                                                    <h3 class="title">
                                                        <a href="shop-grid-4-column.html"
                                                        >The Cosmetics and Beauty brand Shoppe</a
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
                                                        <span class="product-price">$21.51</span>
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
                                </div>
                            </div>
                            <!-- slider-item end -->
                            <div class="slider-item">
                                <div class="card product-card">
                                    <div class="card-body p-0">
                                        <div class="media flex-column">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img
                                                        class="first-img"
                                                        src="assets/img/product/4.png"
                                                        alt="thumbnail"
                                                    />
                                                </a>
                                                <!-- product links -->
                                                <ul class="actions d-flex justify-content-center">
                                                    <li>
                                                        <a class="action" href="wishlist.html">
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="add to wishlist"
                                  class="icon-heart"
                              >
                              </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="action"
                                                            href="#"
                                                            data-toggle="modal"
                                                            data-target="#compare"
                                                        >
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="Add to compare"
                                  class="icon-shuffle"
                              ></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="action"
                                                            href="#"
                                                            data-toggle="modal"
                                                            data-target="#quick-view"
                                                        >
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="Quick view"
                                  class="icon-magnifier"
                              ></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- product links end-->
                                            </div>
                                            <div class="media-body">
                                                <div class="product-desc">
                                                    <h3 class="title">
                                                        <a href="shop-grid-4-column.html"
                                                        >orginal Age Defying Cosmetics Makeup</a
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
                                                        <span class="product-price">$11.90</span>
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
                                </div>
                            </div>
                            <!-- slider-item end -->
                            <div class="slider-item">
                                <div class="card product-card">
                                    <div class="card-body p-0">
                                        <div class="media flex-column">
                                            <div class="product-thumbnail position-relative">
                                                <span class="badge badge-danger top-right">New</span>
                                                <a href="single-product.html">
                                                    <img
                                                        class="first-img"
                                                        src="assets/img/product/5.png"
                                                        alt="thumbnail"
                                                    />
                                                    <img
                                                        class="second-img"
                                                        src="assets/img/product/6.png"
                                                        alt="thumbnail"
                                                    />
                                                </a>
                                                <!-- product links -->
                                                <ul class="actions d-flex justify-content-center">
                                                    <li>
                                                        <a class="action" href="wishlist.html">
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="add to wishlist"
                                  class="icon-heart"
                              >
                              </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="action"
                                                            href="#"
                                                            data-toggle="modal"
                                                            data-target="#compare"
                                                        >
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="Add to compare"
                                  class="icon-shuffle"
                              ></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            class="action"
                                                            href="#"
                                                            data-toggle="modal"
                                                            data-target="#quick-view"
                                                        >
                              <span
                                  data-toggle="tooltip"
                                  data-placement="bottom"
                                  title="Quick view"
                                  class="icon-magnifier"
                              ></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- product links end-->
                                            </div>
                                            <div class="media-body">
                                                <div class="product-desc">
                                                    <h3 class="title">
                                                        <a href="shop-grid-4-column.html"
                                                        >orginal Clear Water Cosmetics On Trend</a
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
                                                        <span class="product-price">$11.90</span>
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
                                </div>
                            </div>
                            <!-- slider-item end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product tab end -->
<!-- common banner  start -->
<div class="common-banner bg-white pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="banner-thumb">
                    <a
                        class="zoom-in d-block overflow-hidden position-relative"
                        href="shop-grid-4-column.html"
                    ><img src="assets/img/banner/5.jpg" alt="banner-thumb-naile"
                        /></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="banner-thumb">
                    <a
                        class="zoom-in d-block overflow-hidden position-relative"
                        href="shop-grid-4-column.html"
                    >
                        <img src="assets/img/banner/6.jpg" alt="banner-thumb-naile"
                        /></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 mb-30">
                <div class="banner-thumb">
                    <a
                        class="zoom-in d-block overflow-hidden position-relative"
                        href="shop-grid-4-column.html"
                    >
                        <img src="assets/img/banner/4.jpg" alt="banner-thumb-naile"
                        /></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- common banner  end -->
<!-- product tab repetation start -->
<section class="bg-white theme1 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- section-title start -->
                <div class="section-title text-center">
                    <h2 class="title pb-3 mb-3">New Arrival products</h2>
                    <p class="text">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Dignissimos, repellat.
                    </p>
                </div>
                <!-- section-title end -->
                <div class="product-slider-init theme1 slick-nav">
                    <div class="slider-item">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-right">New</span>
                                        <a href="single-product.html">
                                            <img
                                                class="first-img"
                                                src="assets/img/product/8.png"
                                                alt="thumbnail"
                                            />
                                        </a>
                                        <!-- product links -->
                                        <ul class="actions d-flex justify-content-center">
                                            <li>
                                                <a class="action" href="wishlist.html">
                          <span
                              data-toggle="tooltip"
                              data-placement="bottom"
                              title="add to wishlist"
                              class="icon-heart"
                          >
                          </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    class="action"
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#compare"
                                                >
                          <span
                              data-toggle="tooltip"
                              data-placement="bottom"
                              title="Add to compare"
                              class="icon-shuffle"
                          ></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    class="action"
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#quick-view"
                                                >
                          <span
                              data-toggle="tooltip"
                              data-placement="bottom"
                              title="Quick view"
                              class="icon-magnifier"
                          ></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                        <div class="product-desc">
                                            <h3 class="title">
                                                <a href="shop-grid-4-column.html"
                                                >All Natural Makeup Beauty Cosmetics</a
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
                                                <span class="product-price">$11.90</span>
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
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-right">New</span>
                                        <a href="single-product.html">
                                            <img
                                                class="first-img"
                                                src="assets/img/product/9.png"
                                                alt="thumbnail"
                                            />
                                        </a>
                                        <!-- product links -->
                                        <ul class="actions d-flex justify-content-center">
                                            <li>
                                                <a class="action" href="wishlist.html">
                          <span
                              data-toggle="tooltip"
                              data-placement="bottom"
                              title="add to wishlist"
                              class="icon-heart"
                          >
                          </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    class="action"
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#compare"
                                                >
                          <span
                              data-toggle="tooltip"
                              data-placement="bottom"
                              title="Add to compare"
                              class="icon-shuffle"
                          ></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    class="action"
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#quick-view"
                                                >
                          <span
                              data-toggle="tooltip"
                              data-placement="bottom"
                              title="Quick view"
                              class="icon-magnifier"
                          ></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                        <div class="product-desc">
                                            <h3 class="title">
                                                <a href="shop-grid-4-column.html"
                                                >On Trend Makeup and Beauty Cosmetics</a
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
                                                <span class="product-price">$11.90</span>
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
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-right">New</span>
                                        <a href="single-product.html">
                                            <img
                                                class="first-img"
                                                src="assets/img/product/10.png"
                                                alt="thumbnail"
                                            />
                                        </a>
                                        <!-- product links -->
                                        <ul class="actions d-flex justify-content-center">
                                            <li>
                                                <a class="action" href="wishlist.html">
                          <span
                              data-toggle="tooltip"
                              data-placement="bottom"
                              title="add to wishlist"
                              class="icon-heart"
                          >
                          </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    class="action"
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#compare"
                                                >
                          <span
                              data-toggle="tooltip"
                              data-placement="bottom"
                              title="Add to compare"
                              class="icon-shuffle"
                          ></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    class="action"
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#quick-view"
                                                >
                          <span
                              data-toggle="tooltip"
                              data-placement="bottom"
                              title="Quick view"
                              class="icon-magnifier"
                          ></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                        <div class="product-desc">
                                            <h3 class="title">
                                                <a href="shop-grid-4-column.html"
                                                >The Cosmetics and Beauty brand Shoppe</a
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
                                                <span class="product-price">$21.51</span>
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
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-right">New</span>
                                        <a href="single-product.html">
                                            <img
                                                class="first-img"
                                                src="assets/img/product/11.png"
                                                alt="thumbnail"
                                            />
                                        </a>
                                        <!-- product links -->
                                        <ul class="actions d-flex justify-content-center">
                                            <li>
                                                <a class="action" href="wishlist.html">
                          <span
                              data-toggle="tooltip"
                              data-placement="bottom"
                              title="add to wishlist"
                              class="icon-heart"
                          >
                          </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    class="action"
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#compare"
                                                >
                          <span
                              data-toggle="tooltip"
                              data-placement="bottom"
                              title="Add to compare"
                              class="icon-shuffle"
                          ></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    class="action"
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#quick-view"
                                                >
                          <span
                              data-toggle="tooltip"
                              data-placement="bottom"
                              title="Quick view"
                              class="icon-magnifier"
                          ></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                        <div class="product-desc">
                                            <h3 class="title">
                                                <a href="shop-grid-4-column.html"
                                                >orginal Age Defying Cosmetics Makeup</a
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
                                                <span class="product-price">$11.90</span>
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
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-right">New</span>
                                        <a href="single-product.html">
                                            <img
                                                class="first-img"
                                                src="assets/img/product/12.png"
                                                alt="thumbnail"
                                            />
                                            <img
                                                class="second-img"
                                                src="assets/img/product/13.png"
                                                alt="thumbnail"
                                            />
                                        </a>
                                        <!-- product links -->
                                        <ul class="actions d-flex justify-content-center">
                                            <li>
                                                <a class="action" href="wishlist.html">
                          <span
                              data-toggle="tooltip"
                              data-placement="bottom"
                              title="add to wishlist"
                              class="icon-heart"
                          >
                          </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    class="action"
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#compare"
                                                >
                          <span
                              data-toggle="tooltip"
                              data-placement="bottom"
                              title="Add to compare"
                              class="icon-shuffle"
                          ></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    class="action"
                                                    href="#"
                                                    data-toggle="modal"
                                                    data-target="#quick-view"
                                                >
                          <span
                              data-toggle="tooltip"
                              data-placement="bottom"
                              title="Quick view"
                              class="icon-magnifier"
                          ></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body">
                                        <div class="product-desc">
                                            <h3 class="title">
                                                <a href="shop-grid-4-column.html"
                                                >orginal Clear Water Cosmetics On Trend</a
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
                                                <span class="product-price">$11.90</span>
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
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <!-- New women's Fresh Faced Trendy cream -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product tab repetation end -->
<!-- blog-section start -->
<section class="blog-section theme1 pb-65">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <h2 class="title pb-3 mb-3">from our Latest Blogs</h2>
                    <p class="text">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="blog-init slick-nav">
                    <div class="slider-item">
                        <div class="single-blog">
                            <a
                                class="blog-thumb mb-20 zoom-in d-block overflow-hidden"
                                href="blog-grid-left-sidebar.html"
                            >
                                <img src="assets/img/blog-post/1.png" alt="blog-thumb-naile"/>
                            </a>
                            <div class="blog-post-content">
                                <a
                                    class="blog-link theme-color d-inline-block mb-10 text-uppercase"
                                    href="https://themeforest.net/user/hastech"
                                >Fashion</a
                                >
                                <h3 class="title mb-15">
                                    <a href="single-blog.html">This is first Post For Blog</a>
                                </h3>
                                <p class="sub-title">
                                    Posted by
                                    <a
                                        class="theme-color d-inline-block mx-1"
                                        href="https://themeforest.net/user/hastech"
                                    >HasTech</a
                                    >
                                    12TH Nov 2020
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="single-blog">
                            <a
                                class="blog-thumb mb-20 zoom-in d-block overflow-hidden"
                                href="blog-grid-left-sidebar.html"
                            >
                                <img src="assets/img/blog-post/2.png" alt="blog-thumb-naile"/>
                            </a>
                            <div class="blog-post-content">
                                <a
                                    class="blog-link theme-color d-inline-block mb-10 text-uppercase"
                                    href="https://themeforest.net/user/hastech"
                                >Fashion</a
                                >
                                <h3 class="title mb-15">
                                    <a href="single-blog.html">This is Secound Post For Blog</a>
                                </h3>
                                <p class="sub-title">
                                    Posted by
                                    <a
                                        class="theme-color d-inline-block mx-1"
                                        href="https://themeforest.net/user/hastech"
                                    >HasTech</a
                                    >
                                    12TH Nov 2020
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="single-blog">
                            <a
                                class="blog-thumb mb-20 zoom-in d-block overflow-hidden"
                                href="blog-grid-left-sidebar.html"
                            >
                                <img src="assets/img/blog-post/3.png" alt="blog-thumb-naile"/>
                            </a>
                            <div class="blog-post-content">
                                <a
                                    class="blog-link theme-color d-inline-block mb-10 text-uppercase"
                                    href="https://themeforest.net/user/hastech"
                                >Fashion</a
                                >
                                <h3 class="title mb-15">
                                    <a href="single-blog.html">This is third Post For Blog</a>
                                </h3>
                                <p class="sub-title">
                                    Posted by
                                    <a
                                        class="theme-color d-inline-block mx-1"
                                        href="https://themeforest.net/user/hastech"
                                    >HasTech</a
                                    >
                                    12TH Nov 2020
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="single-blog">
                            <a
                                class="blog-thumb mb-20 zoom-in d-block overflow-hidden"
                                href="blog-grid-left-sidebar.html"
                            >
                                <img src="assets/img/blog-post/4.png" alt="blog-thumb-naile"/>
                            </a>
                            <div class="blog-post-content">
                                <a
                                    class="blog-link theme-color d-inline-block mb-10 text-uppercase"
                                    href="https://themeforest.net/user/hastech"
                                >Fashion</a
                                >
                                <h3 class="title mb-15">
                                    <a href="single-blog.html">This is fourth Post For Blog</a>
                                </h3>
                                <p class="sub-title">
                                    Posted by
                                    <a
                                        class="theme-color d-inline-block mx-1"
                                        href="https://themeforest.net/user/hastech"
                                    >HasTech</a
                                    >
                                    12TH Nov 2020
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                    <div class="slider-item">
                        <div class="single-blog">
                            <a
                                class="blog-thumb mb-20 zoom-in d-block overflow-hidden"
                                href="blog-grid-left-sidebar.html"
                            >
                                <img src="assets/img/blog-post/5.png" alt="blog-thumb-naile"/>
                            </a>
                            <div class="blog-post-content">
                                <a
                                    class="blog-link theme-color d-inline-block mb-10 text-uppercase"
                                    href="https://themeforest.net/user/hastech"
                                >Fashion</a
                                >
                                <h3 class="title mb-15">
                                    <a href="single-blog.html">This is fiveth Post For Blog</a>
                                </h3>
                                <h5 class="sub-title">
                                    Posted by
                                    <a
                                        class="theme-color d-inline-block mx-1"
                                        href="https://themeforest.net/user/hastech"
                                    >HasTech
                                    </a>
                                    12TH Nov 2020
                                </h5>
                            </div>
                        </div>
                    </div>
                    <!-- slider-item end -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog-section end -->
<!-- brand slider start -->
<x-landing-page.brand-component/>
<!-- brand slider end -->
<!-- footer strat -->
<x-landing-page.footer-component/>
<!-- footer end -->
<livewire:landing-page.models-middle-component/>
<x-landing-page.script-component/>
@livewireScripts
</body>
</html>

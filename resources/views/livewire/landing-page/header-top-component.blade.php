<div class="header-top theme1 bg-dark py-15">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-sm-6 order-last order-sm-first">
                <div
                    class="d-flex justify-content-center justify-content-sm-start align-items-center"
                >
                    <div class="social-network2">
                        <ul class="d-flex">
                            <li>
                                <a href="https://www.facebook.com/" target="_blank"
                                ><span class="icon-social-facebook"></span
                                    ></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/" target="_blank"
                                ><span class="icon-social-twitter"></span
                                    ></a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/" target="_blank"
                                ><span class="icon-social-youtube"></span
                                    ></a>
                            </li>
                            <li class="mr-0">
                                <a href="https://www.instagram.com/" target="_blank"
                                ><span class="icon-social-instagram"></span
                                    ></a>
                            </li>
                        </ul>
                    </div>
                    <div class="media static-media ml-4 d-flex align-items-center">
                        <div class="media-body">
                            <div class="phone">
                                <a href="tel:(+123)4567890" class="text-white"
                                ><i class="icon-call-out mr-1"></i> (+123)4567890</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <nav class="navbar-top pb-2 pb-sm-0 position-relative">
                    <ul
                        class="d-flex justify-content-center justify-content-md-end align-items-center"
                    >
                        <li>
                            <a
                                href="#"
                                id="dropdown1"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >Setting <i class="ion ion-ios-arrow-down"></i
                                ></a>
                            <ul
                                class="topnav-submenu dropdown-menu"
                                aria-labelledby="dropdown1"
                            >
                                <li><a href="myaccount.html">My account</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="login.html">Sign out</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" id="dropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USD $ <i class="ion ion-ios-arrow-down"></i></a>
                            <ul class="topnav-submenu dropdown-menu" aria-labelledby="dropdown2">
                                <form action="{{route('settings.set.currency')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="currency_type" value="ils">
                                    <button type="submit" class="p-2 m-1">
                                        <li class="active" style="color: #5A5AC9">ILS ₪</li>
                                    </button>
                                </form>

                                <form action="{{route('settings.set.currency')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="currency_type" value="usd">
                                    <button type="submit" class="p-2 m-1">
                                        <li style="color: #5A5AC9">USD $</li>
                                    </button>
                                </form>
                            </ul>
                        </li>
                        <li class="english">
                            <a
                                href="#"
                                id="dropdown3"
                                class="pr-0"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                            >
                                <img src="assets/img/logo/us-flag.jpg" alt="us flag" />
                                English
                                <i class="ion ion-ios-arrow-down"></i>
                            </a>
                            <ul
                                class="topnav-submenu dropdown-menu"
                                aria-labelledby="dropdown3"
                            >
                                <li class="active">
                                    <a href="#"
                                    ><img src="assets/img/logo/us-flag.jpg" alt="us flag" />
                                        English</a
                                    >
                                </li>
                                <li>
                                    <a href="#"
                                    ><img
                                            src="assets/img/logo/france.jpg"
                                            alt="france flag"
                                        />
                                        Français</a
                                    >
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

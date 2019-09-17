        <div class="ct-headerWrapper ct-u-paddingBottom40">
            <div class="container">

                <div class="ct-header ct-header--default ct-u-paddingTop30 ct-u-paddingBottom50">
                    <div class="ct-header-navigation">
                        <ul class="list-unstyled list-inline">
                            <li><a href="my-account.html">My Account</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                        </ul>
                    </div>
                    <div class="ct-header-logo">
                        <a href="{{ route('home') }}">
                            {{-- {{env('APP_NAME')}} --}}
                            @isset($siteSettings)
                            {{$siteSettings->w_name}}
                            <img src="{{ asset($siteSettings->w_image) }}" alt="Diana Logo">
                            @else
                            <img src="{{ asset('assets/images/demo-content/logo.png') }}" alt="Diana Logo">
                            @endisset
                        </a>
                    </div>
                </div>
            </div>
            <nav class="navbar yamm">
                <div class="container">
                    <ul class="nav navbar-nav ct-navbar--fadeIn">
                        <li class="dropdown active">
                            <a href="{{ route('home') }}">Home</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <h5 class="text-uppercase"><strong>Home Pages</strong>
                                                    <br><small>Select your homepage</small>
                                                </h5>
                                                <ul class="list-unstyled">
                                                    <li><a href="index-2.html"><i class="fa fa-angle-right fa-fw"></i> Home - v1</a></li>
                                                    <li><a href="index2.html"><i class="fa fa-angle-right fa-fw"></i> Home - v2</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-4">
                                                <h5 class="text-uppercase"><strong>Headers</strong>
                                                    <br><small>Select your header</small>
                                                </h5>
                                                <ul class="list-unstyled">
                                                    <li><a href="index-paralax.html"><i class="fa fa-angle-right fa-fw"></i> Parallax</a></li>
                                                    <li><a href="index-2.html"><i class="fa fa-angle-right fa-fw"></i> Slider</a></li>
                                                    <li><a href="index-video.html"><i class="fa fa-angle-right fa-fw"></i> Video</a></li>
                                                    <li><a href="index-logo-left.html"><i class="fa fa-angle-right fa-fw"></i> Logo Left</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-4">
                                                <h5 class="text-uppercase"><strong>Menu/Top bars</strong>
                                                    <br><small>Select your bar</small>
                                                </h5>
                                                <ul class="list-unstyled">
                                                    <li><a href="index-black-menu.html"><i class="fa fa-angle-right fa-fw"></i> Black Menu</a></li>
                                                    <li><a href="index-grey-top.html"><i class="fa fa-angle-right fa-fw"></i> Grey Top</a></li>
                                                    <li><a href="index-both-colour.html"><i class="fa fa-angle-right fa-fw"></i> Menu/Top Colour</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="collections.html">Collections</a>
                            <!--        We need here padding-bottom 0 to display properly the image inside this content. Please, don't change paddingBottom.        -->
                            <ul class="dropdown-menu ct-u-paddingBottom0">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6">
                                                <h5 class="text-uppercase"><strong>Products</strong><br><small>Jewellery</small></h5>
                                                <ul class="list-unstyled">
                                                    <li><a href="paypal-shop-page.html"><i class="fa fa-angle-right fa-fw"></i> Shop with Paypal integration</a></li>
                                                    <li><a href="collections.html"><i class="fa fa-angle-right fa-fw"></i> Shop Collection Type 1</a></li>
                                                    <li><a href="collections2.html"><i class="fa fa-angle-right fa-fw"></i> Shop Collection Type 2</a></li>
                                                    <li><a href="collections-list.html"><i class="fa fa-angle-right fa-fw"></i> Shop Collection List</a></li>
                                                    <li><a href="single-product.html"><i class="fa fa-angle-right fa-fw"></i> Single Product</a></li>
                                                    <li><a href="collections-no-sidebar.html"><i class="fa fa-angle-right fa-fw"></i> Shop No Sidebar</a></li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <h5 class="text-uppercase"><strong>Shop Pages</strong><br><small>Shopping</small></h5>
                                                <ul class="list-unstyled">
                                                    <li><a href="my-cart.html"><i class="fa fa-angle-right fa-fw"></i> Cart</a></li>
                                                    <li><a href="checkout.html"><i class="fa fa-angle-right fa-fw"></i> Checkout</a></li>
                                                    <li><a href="wishlist.html"><i class="fa fa-angle-right fa-fw"></i> Wishlist</a></li>
                                                    <li><a href="{{ route('register') }}"><i class="fa fa-angle-right fa-fw"></i> Register</a></li>
                                                    <li><a href="login.html"><i class="fa fa-angle-right fa-fw"></i> Login</a></li>
                                                    <li><a href="lost-password.html"><i class="fa fa-angle-right fa-fw"></i> Lost Password</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 hidden-sm">
                                                <div class="ct-collectionRightPicture">
                                                    <img src="{{ asset('assets/images/demo-content/main-menu-collection-right-bg.png') }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="about-us.html">Pages</a>
                            <ul class="dropdown-menu text-uppercase">
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="our-mission.html">Our Mission</a></li>
                            <li><a href="testimonials.html">Testimonials</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="our-services.html">Our Services</a></li>
                            <li><a href="our-team.html">Our Designers</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="portfolio-masonry.html">Lookbook</a>
                            <ul class="dropdown-menu text-uppercase">
                                <li class="dropdown-submenu">
                                    <a href="portfolio-masonry.html">Masonry <i class="fa fa-angle-double-down fa-fw"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-masonry.html">Default</a></li>
                                        <li><a href="portfolio-masonry-column1.html">1 Column</a></li>
                                        <li><a href="portfolio-masonry-column2.html">2 Columns</a></li>
                                        <li><a href="portfolio-masonry-column3.html">3 Columns</a></li>
                                    </ul>
                                </li>
                                <li><a href="portfolio-left-sidebar.html">Left Sidebar</a></li>
                                <li><a href="portfolio-right-sidebar.html">Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="blog.html">Blog</a>
                            <ul class="dropdown-menu text-uppercase">
                                <li class="dropdown-submenu">
                                    <a href="blog-full-width.html">Full Width <i class="fa fa-angle-double-down fa-fw"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog-wide.html">Left Image</a></li>
                                        <li><a href="blog-full-width.html">Top Image</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                                <li><a href="blog.html">Right Sidebar</a></li>
                                <li><a href="blog-masonry.html">2 Columns</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="{{ route('support') }}">24x7 Support Center</a></li>
                        <li><a href="{{ route('faqs') }}">FAQs</a></li>
                    </ul>
                    <div id="ct-js-navSearch" class="ct-navbar-navSearch navbar-search pull-right">
                        <i class="fa fa-fw fa-search"></i>
                    </div>
                    <div class="ct-navbar-search">
                        <form role="form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Please type keywords..." required>
                            </div>
                            <button class="ct-navbar-search-button" type="submit">
                                <i class="fa fa-search fa-fw"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
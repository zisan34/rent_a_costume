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
                         
                        </li>
                        <li class="dropdown">
                            <a href="collections.html">Collections</a>
                            <!--        We need here padding-bottom 0 to display properly the image inside this content. Please, don't change paddingBottom.        -->
                            <ul class="dropdown-menu ct-u-paddingBottom0">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6">
                                                <h5 class="text-uppercase"><strong>Products</strong><br><small>Brands</small></h5>
                                                <ul class="list-unstyled">
                                                    @if($all_brands)
                                                       @foreach($all_brands as $b)
                                                             <li><a href="{{url('all_brands/'.urlencode($b->id))}}"> {{$b->brand_name}}</a></li>
                                                        @endforeach
                                                    @endif
                                                   
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <h5 class="text-uppercase"><strong>Products</strong><br><small>Category</small></h5>
                                                <ul class="list-unstyled">
                                                    @if($all_category)
                                                        @foreach($all_category as $c)

                                                            <li><a href="{{url('all_category/'.urlencode($c->id))}}"> {{$c->category_name}}</a></li>
                                                        @endforeach
                                                    @endif
                                                   
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
                        
                          
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="our-services.html">Our Services</a></li>
                           
                            <li><a href="faq.html">FAQ</a></li>
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
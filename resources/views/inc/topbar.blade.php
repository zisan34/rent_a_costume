        <!-- TOPBAR -->
        <div class="ct-topBar">
            <div class="container">
                <div class="ct-topBar-navigation pull-left">
                    <ul class="list-unstyled">
                        <li><i class="fa fa-fw fa-phone"></i> Call us: {{$siteSettings->w_phone}}</li>
                        @guest
                        <li><a href="{{ route('login') }}"><i class="fa fa-fw fa-user"></i> Login</a></li>
                        <li><a href="{{ route('register') }}"><i class="fa fa-fw fa-pencil"></i> Create an account</a></li>
                        @else
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-fw fa-user"></i> Logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                            @auth
                            @if(auth()->user()->is_super_admin)
                            <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-fw fa-pencil"></i> Admin Panel</a></li>
                            @endif
                            @endauth
                        @endguest


                    </ul>
                </div>

                {{-- cart --}}
                <div class="pull-right">
                    <div class="ct-topBar-basket">
                        <a href="my-cart.html"><span class="ct-topBar-basket-cart"><i class="fa fa-fw fa-shopping-cart"></i> Cart: </span><span class="ct-topBar-basket-quantity">3 item(s)</span><span class="ct-topBar-basket-price"> - $0.00</span></a>
                        <div class="ct-topBar-basket-info">
                            <div class="ct-cartItem">
                                <a href="single-product.html">
                                    <div class="ct-cartItem-image pull-left">
                                        <img src="{{ asset('assets/images/demo-content/shop-cart-ring1.png') }}" alt="">
                                    </div>
                                    <div class="ct-cartItem-title">
                                        Round Pave' Color Diamon Ring, Sterling, 1/4 cttw
                                    </div>
                                    <div class="ct-cartItem-price">
                                        $167.00
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                            <div class="ct-cartItem">
                                <a href="single-product.html">
                                    <div class="ct-cartItem-image pull-left">
                                        <img src="{{ asset('assets/images/demo-content/shop-cart-ring2.png') }}" alt="">
                                    </div>
                                    <div class="ct-cartItem-title">
                                        Barbara Bixby Sterling 18K Gold Citrine or Pink
                                    </div>
                                    <div class="ct-cartItem-price">
                                        $290.99
                                    </div>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                            <div class="clearfix"></div>
                            <div class="ct-cartSubtotal">
                                <div class="pull-left ct-fw-600">Subtotal</div>
                                <div class="pull-right ct-fw-600">$457.99</div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="ct-cartGoNext text-uppercase ct-u-paddingBoth20">
                                <a class="btn btn-default ct-u-width-49pc" href="my-cart.html" role="button">View Cart <i class="fa fa-angle-double-right fa-fw"></i></a>
                                <a class="btn btn-default pull-right ct-u-width-49pc" href="checkout.html" role="button">Checkout <i class="fa fa-angle-double-right fa-fw"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-md dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            EN <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">FR</a></li>
                            <li><a href="#">ES</a></li>
                            <li><a href="#">DE</a></li>
                            <li><a href="#">PT</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-md dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            $ <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">EUR €</a></li>
                            <li><a href="#">GBP £</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
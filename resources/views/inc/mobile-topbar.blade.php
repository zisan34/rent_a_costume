    <div class="ct-shopMenuMobile">
        <!-- Language Dropdown -->
       
        <nav class="ct-shopMenuMobile-navbar">
            <ul class="list-unstyled">
                @guest
                <li><a href="{{ route('login') }}"><i class="fa fa-user fa-fw"></i> Login</a></li>
                <li><a href="{{ route('register') }}"><i class="fa fa-pencil fa-fw"></i> Create an account</a></li>
                @else
                <li><a href="{{url('logout')}}"><i class="fa fa-user fa-fw"></i> Logout</a></li>
                @endguest

                @auth
                @if(auth()->user()->is_super_admin)
                <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-cog fa-fw"></i>Admin Panel</a></li>
                @endif
                @endauth

            </ul>
        </nav>
        <div class="ct-shopMenuMobile-basket">
            <a href="my-cart.html"><i class="fa fa-shopping-cart fa-fw"></i> My Basket <span class="ct-topBar-basket-quantity">(3 items)</span></a>
            <div class="ct-shopMenuMobile-basketContainer">
                <ul class="ct-shopMenuMobile-basketProducts list-unstyled">
                    @php
                        $myCartCollection =0;
                        $myCartSubtotal =0;
                        $mycartTotalQuantity =0;
                        $myTotal =0;
                        if(!Cart::isEmpty()){
                            $myCartCollection = Cart::getContent();
                            $myTotal = Cart::getTotal();
                        }
                      // print_r($myCartCollection->toArray());
                    @endphp
                    <li class="ct-shopMenuMobile-basketProduct">
                        <a href="single-product.html">
                            <img class="pull-left" src="{{ asset('assets/images/demo-content/mobile-shop-cart-ring1.png') }}" alt="">
                            <div class="ct-shopMenuMobile-basketProductContent">
                                <div class="ct-shopMenuMobile-basketProductTitle">Round Pave' Color Diamon Ring, Sterling, 1/4 cttw</div>
                                <div class="ct-shopMenuMobile-basketProductPrice ct-fw-600">$167.00</div>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li class="ct-shopMenuMobile-basketProduct">
                        <a href="single-product.html">
                            <img class="pull-left" src="{{ asset('assets/images/demo-content/mobile-shop-cart-ring2.png') }}" alt="">
                            <div class="ct-shopMenuMobile-basketProductContent">
                                <div class="ct-shopMenuMobile-basketProductTitle">Barbara Bixby Sterling 18K Gold Citrine or Pink</div>
                                <div class="ct-shopMenuMobile-basketProductPrice ct-fw-600">$290.99</div>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                </ul>
                <div class="ct-shopMenuMobile-basketWrap ct-shopMenuMobile-subTotal ct-fw-600">
                    <div class="pull-left text-uppercase">Subtotal</div>
                    <div class="pull-right">$457.99</div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
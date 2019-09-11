    <div class="ct-shopMenuMobile">
        <!-- Language Dropdown -->
        <div class="btn-group">
            <button type="button" class="btn btn-white btn-md dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                EN <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">FR</a></li>
                <li><a href="#">ES</a></li>
                <li><a href="#">DE</a></li>
                <li><a href="#">PT</a></li>
            </ul>
        </div>
        <!-- Currency Dropdown -->
        <div class="btn-group">
            <button type="button" class="btn btn-white btn-md dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                $ <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">EUR €</a></li>
                <li><a href="#">GBP £</a></li>
            </ul>
        </div>
        <nav class="ct-shopMenuMobile-navbar">
            <ul class="list-unstyled">
                <li><a href="login.html"><i class="fa fa-user fa-fw"></i> Login</a></li>
                <li><a href="create-account.html"><i class="fa fa-pencil fa-fw"></i> Create an account</a></li>
                <li><a href="my-account.html"><i class="fa fa-cog fa-fw"></i> My Account</a></li>
                <li><a href="wishlist.html"><i class="fa fa-edit fa-fw"></i> Wishlist</a></li>
                <li><a href="checkout.html"><i class="fa fa-archive fa-fw"></i> Checkout</a></li>
            </ul>
        </nav>
        <div class="ct-shopMenuMobile-basket">
            <a href="my-cart.html"><i class="fa fa-shopping-cart fa-fw"></i> My Basket <span class="ct-topBar-basket-quantity">(3 items)</span></a>
            <div class="ct-shopMenuMobile-basketContainer">
                <ul class="ct-shopMenuMobile-basketProducts list-unstyled">
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
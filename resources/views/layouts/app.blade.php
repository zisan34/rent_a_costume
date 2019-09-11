
<!DOCTYPE html>
<html class="no-js" lang="en">

<head lang="en">
    <meta charset="UTF-8">
    <meta name="description" content="Macaroon -Creative Patisserie HTML Template">
    <meta name="author" content="CreateIT">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>{{env('APP_NAME')}}</title>
    <script src="{{ asset('assets/cdn-cgi/apps/head/sxN6HgCn8v7CG45Nsym8imDXilk.js') }}"></script><link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/select2.css')}}">


    <script src="{{asset('assets/js/modernizr.custom.js')}}"></script>
</head>

<body class="ct-headroom--scrollUpBoth cssAnimate">
    <div class="ct-preloader">
        <div class="ct-preloader-content">
        </div>
    </div>

    @include('inc.mobile-topbar')

    @include('inc.mobile-menu')

    <div id="ct-js-wrapper" class="ct-pageWrapper">
        
        <!-- navbar + logo menu -->
        <div class="ct-navbarMobile">
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            {{-- company logo --}}
            <a class="navbar-brand" href="index-2.html"><img src="{{ asset('assets/images/demo-content/logo.png') }}" alt="Diana Logo"> </a>
            <button type="button" class="navbarShop-toggle">
                <i class="fa fa-fw fa-user"></i>
            </button>
        </div>

        
        @include('inc.topbar')
        

        @include('inc.menu')


        {{-- contents --}}

        @yield('contents')

        <!-- FOOTER -->
        @include('inc.footer')

    </div>

    <!-- JavaScripts files -->

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui/jquery-ui.js') }}"></script>

    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.placeholder.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assets/js/device.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.browser.min.js') }}"></script>
    <script src="{{ asset('assets/js/snap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>

    <script src="{{ asset('assets/plugins/headroom/headroom.js') }}"></script>
    <script src="{{ asset('assets/plugins/headroom/jQuery.headroom.js') }}"></script>
    <script src="{{ asset('assets/plugins/headroom/init.js') }}"></script>

    <script src="{{ asset('assets/form/js/contact-form.js') }}"></script>

    <script src="{{ asset('assets/js/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/stacktable/stacktable.js') }}"></script>


    <script src="{{ asset('assets/plugins/owl/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/owl/init.js') }}"></script>

    <script src="{{ asset('assets/js/elevate-zoom/jquery.elevatezoom.js') }}"></script>
    <script src="{{ asset('assets/js/elevate-zoom/init.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>

    

</body>

</html>
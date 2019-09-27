
<!DOCTYPE html>
<html class="no-js" lang="en">

<head lang="en">
    <meta charset="UTF-8">
    <meta name="description" content="Macaroon -Creative Patisserie HTML Template">
    <meta name="author" content="CreateIT">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>{{$siteSettings->w_name}}</title>
    <link rel="icon" type="image/gif" href="{{ asset($siteSettings->w_logo) }}" />

    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/select2.css')}}">


    
    {{-- <script src="{{asset('js/notify.min.js')}}"></script> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body class="ct-headroom--scrollUpBoth cssAnimate">
    <div class="ct-preloader">
        <div class="ct-preloader-content">
        </div>
    </div>

    @include('inc.mobile-topbar')

    @include('inc.mobile-menu')

    <div id="ct-js-wrapper" class="ct-pageWrapper">
    @php
        $mes_ti=Session::get('message');
    @endphp
    @if($mes_ti)
        <div>
            <h5 class="text-info">{{$mes_ti}}</h5>
        </div>
    @endif
        <!-- navbar + logo menu -->
        <div class="ct-navbarMobile">
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            {{-- company logo --}}
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset($siteSettings->w_image) }}" alt="Diana Logo"></a>
            <button type="button" class="navbarShop-toggle">
                <i class="fa fa-fw fa-user"></i>
            </button>
        </div>

        
        @include('inc.topbar')
        

        @include('inc.menu')


        {{-- contents --}}

        @yield('content')

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

    <script src="{{ asset('assets/cdn-cgi/apps/head/sxN6HgCn8v7CG45Nsym8imDXilk.js') }}"></script>

    <script src="{{asset('assets/js/modernizr.custom.js')}}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    

</body>

</html>
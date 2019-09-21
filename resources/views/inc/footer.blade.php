


@php
    $footer=DB::table('site_settings')->first();
@endphp
<div>

</div>

<footer class="ct-footer ct-u-paddingTop210 ct-u-paddingBottom90">
    <div class="container">
        <div class="row">
           
            <div class="col-sm-4 col-md-3">
                <h5 class="ct-widgetHeader text-uppercase ct-u-size18">Customer service</h5>
                <div class="ct-widgetLinks">
                    <ul class="ct-widgetLinks-list">
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('mission') }}">Our Mission</a></li>
                        <li><a href="{{route('faqs')}}">Faq</a></li>
                    </ul>
                </div>
            </div>
           
            <div class="col-sm-4 col-md-3">
                <h5 class="ct-widgetHeader text-uppercase ct-u-size18 ct-u-paddingBottom20">Connect With Us</h5>
                <ul class="ct-socials ct-socials--large ct-socials--white list-inline list-unstyled">
                    <li><a href="{{$footer->w_facebook}}"><i class="fa fa-facebook fa-fw"></i></a></li>
                    <li><a href="{{$footer->w_youtube}}"><i class="fa fa-youtube fa-fw"></i></a></li>
                    <li><a href="{{$footer->w_twitter}}"><i class="fa fa-twitter fa-fw"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="ct-u-bottomFooterBar ct-u-paddingTop40 ct-u-marginTop50">
                <div class="col-sm-6">
                    <div class="ct-rights">
                        <a href="#">Mtech</a> © {{$footer->copyright}} 2019
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</footer>
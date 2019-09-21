<div class="container">
    <div class="ct-dividedSection ct-u-paddingTop60">
        <div class="row">
            <div class="col-md-7 col-sm-12">
                <div class="ct-dividedSection-left">
                    <h3>Sign up for our newsletter</h3>
                    <div class="ct-contactForm">
                        <div class="successMessage alert alert-success" style="display: none">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            Thank You!
                        </div>
                        <div class="errorMessage alert alert-danger" style="display: none">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            Ups! An error occured. Please try again later.
                        </div>
                        <form class="validateIt"  method="post" action="http://diana.html.themeplayers.net/assets/form/send.php" role="form" data-email-subject="Contact Form" data-show-errors="true">
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Your Email Address" required name="field[]">
                            <span class="input-group-btn">
                                <button class="btn btn-default btn-sm" type="submit"><i class="fa fa-fw fa-long-arrow-right"></i></button>
                            </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-12">
                <div class="ct-dividedSection-right">
                    <img src="{{ asset('assets/images/demo-content/prefooter-diamond.png') }}" class="text-right pull-left" alt="Diamond Ring">
                    <h3 class="text-uppercase text-right">Have a jewelry inquiry?</h3>
                    If you have any  questions regarding our jeweleries please <a href="#">contact us directly</a> or use our contact form to get in touch.
                    <div class="ct-dividedSection-right-triangle hidden-sm hidden-xs"></div>
                </div>
            </div>
        </div>
        <div class="ct-tooltips text-center ct-u-paddingTop50 ct-u-paddingBottom40">
            <ul class="list-unstyled list-inline">
                <li data-toggle="tooltip" title="75,000+ customers trusted us to create their rings."><i class="fa fa-heart fa-fw fa-6x"></i></li>
                <li data-toggle="tooltip" title="Pay by cash, credit card, bank transfer or store."><i class="fa fa-dollar fa-fw fa-6x"></i></li>
                <li data-toggle="tooltip" title="Fully protected, all payments secured."><i class="fa fa-lock fa-fw fa-6x"></i></li>
                <li data-toggle="tooltip" title="Double guarantee for gold and diamonds."><i class="fa fa-certificate fa-fw fa-6x"></i></li>
                <li data-toggle="tooltip" title="24/7 support at your service."><i class="fa fa-headphones fa-fw fa-6x"></i></li>
                <li data-toggle="tooltip" title="Latest news collections directly on your email."><i class="fa fa-envelope fa-fw fa-6x"></i></li>
                <li data-toggle="tooltip" title="Free & easy returns in 48h."><i class="fa fa-circle-o-notch fa-fw fa-6x"></i></li>
                <li data-toggle="tooltip" title="Free Delivery and Assurance."><i class="fa fa-truck fa-fw fa-6x"></i></li>
                <li data-toggle="tooltip" title="Your data is fully protected."><i class="fa fa-folder fa-fw fa-6x"></i></li>
                <li data-toggle="tooltip" title="Find your measurements for your ring."><i class="fa fa-pencil-square-o fa-fw fa-6x"></i></li>
            </ul>
        </div>
    </div>
</div>





<footer class="ct-footer ct-u-paddingTop210 ct-u-paddingBottom90">
    <div class="container">
        <div class="row">
            <div class="col-md-3 hidden-sm hidden-xs">
                <div class="ct-footer-image">
                    <img src="{{ asset('assets/images/demo-content/footer-necklace.png') }}" alt="Golden Necklace">
                </div>
            </div>
                                <div class="col-sm-4 col-md-3">
                <h5 class="ct-widgetHeader text-uppercase ct-u-size18">Customer service</h5>
                <div class="ct-widgetLinks">
                    <ul class="ct-widgetLinks-list">
                        <li><a href="#">Free Shipping</a></li>
                        <li><a href="#">30-Day Returns</a></li>
                        <li><a href="#">Special Orders</a></li>
                        <li><a href="#">Free Gift Packaging</a></li>
                        <li><a href="#">Jewellery Insurance</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4 col-md-3">
                <h5 class="ct-widgetHeader text-uppercase ct-u-size18">About Diana Jewellery</h5>
                <div class="ct-widgetLinks">
                    <ul class="ct-widgetLinks-list">
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('mission') }}">Our Mission</a></li>
                        {{-- <li><a href="blog.html">In the news</a></li> --}}
                    </ul>
                </div>
            </div>
            <div class="col-sm-4 col-md-3">
                <h5 class="ct-widgetHeader text-uppercase ct-u-size18 ct-u-paddingBottom20">Connect With Us</h5>
                <ul class="ct-socials ct-socials--large ct-socials--white list-inline list-unstyled">
                    <li><a href="{{$siteSettings->w_facebook}}"><i class="fa fa-facebook fa-fw"></i></a></li>
                    <li><a href="{{$siteSettings->w_youtube}}"><i class="fa fa-youtube fa-fw"></i></a></li>
                    <li><a href="{{$siteSettings->w_twitter}}"><i class="fa fa-twitter fa-fw"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="ct-u-bottomFooterBar ct-u-paddingTop40 ct-u-marginTop50">
                <div class="col-sm-6">
                    <div class="ct-rights">
                        <a href="http://www.createit.pl/">createIT</a> © Copyright 2015
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="ct-iconPayments pull-right">
                        <ul class="list-inline list-unsyled">
                            <li><i class="fa fa-cc-visa fa-fw fa-2x"></i></li>
                            <li><i class="fa fa-cc-mastercard fa-fw fa-2x"></i></li>
                            <li><i class="fa fa-cc-discover fa-fw fa-2x"></i></li>
                            <li><i class="fa fa-cc-amex fa-fw fa-2x"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
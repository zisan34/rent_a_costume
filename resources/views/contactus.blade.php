@extends('layouts.app')

@section('content')
<div class="ct-preloader"><div class="ct-preloader-content"></div></div>
 
    <div id="ct-js-wrapper" class="ct-pageWrapper">


        <div class="ct-contentWrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop50">Contact Us</h4>
                       

                        <ul class="ct-contactAddress list-unstyled ct-u-size16 ct-u-paddingBottom20">
                            <li>
                                <div class="ct-addressReference"><i class="fa fa-location-arrow"></i> Mailing Address:</div>
                                <div class="ct-addressDataReference">
                                    <span>{{env('APP_NAME')}}</span><br>
                                    <span>{{$site_data->w_address}}</span><br>
                                  
                                </div>
                            </li>
                            <li>
                                <div class="ct-addressReference"><i class="fa fa-phone"></i> Phone Number:</div>
                                <div class="ct-addressDataReference">
                                    <span>{{$site_data->w_phone}}</span>
                                </div>
                            </li>
                            <li>
                                <div class="ct-addressReference"><i class="fa fa-envelope"></i> Email Address:</div>
                                <div class="ct-addressDataReference">
                                    <a href="#"><span>{{$site_data->w_email}}</span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop50">Follow Us</h4>
                        <div class="ct-u-paddingBottom20 ct-u-paddingTop30">
                            <ul class="ct-socials ct-socials--small ct-socials--black list-inline list-unstyled">
                                  <li><a href="{{url($site_data->w_facebook)}}"><i class="fa fa-facebook fa-fw"></i></a></li>
                                <li><a href="{{url($site_data->w_twitter)}}"><i class="fa fa-twitter fa-fw"></i></a></li>
                                <li><a  href="{{url($site_data->w_youtube)}}"><i class="fa fa-rss fa-fw"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="ct-googleMap" data-location="New York" data-zoom="12" data-height="500"></div>
                <div class="row">
                    <div class="col-md-8">
                      
                        <div class="ct-contactForm">
                           

                           
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>

            <!-- PreFOOTER -->
          
        </div>

        <!-- FOOTER -->
      
    </div>
@endsection
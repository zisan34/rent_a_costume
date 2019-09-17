@extends('layouts.app')

@section('content')

        <div class="ct-js-owl owl-carousel ct-mainCarousel ct-mainCarousel--arrowsMiddle" data-snap-ignore="true" data-pagination="false" data-items="1" data-autoPlay="false" data-bg="true" data-animations="true" data-height="525" data-navigation="true">
            <div class="item" data-bg="{{ asset('assets/images/demo-content/slider-image.png') }}">
                <div class="inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h1 class="ct-u-colorBlack">
                                    <span class="animated" data-fx="fadeIn">Customized Dress</span>
                                    <br>
                                    <span class="ct-u-colorWhite animated" data-fx="fadeIn" data-time="200">& Fancy costume</span></h1>
                                <div class="text-center ct-u-paddingTop15 ct-u-paddingBottom30">
                                    <hr class="hr-slider animated" data-fx="fadeIn">
                                </div>
                                <div class="text-center">
                                    <a class="btn btn-blackTransparent animated" data-fx="fadeInUp" href="{{url('showall_product')}}" role="button">Browse Collection <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            {{-- <div class="item" data-bg="{{ asset('assets/images/demo-content/slider-image.png') }}">
                <div class="inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-4 col-sm-12">
                                <h1 class="ct-u-colorWhite text-right animated" data-fx="fadeInRight">Experienced with Experience</h1>
                                <h2 class="ct-u-colorWhite text-right animated" data-fx="fadeInRightBig">Interchangable Collections</h2>
                                <div class="text-right ct-mobileCenter ct-u-paddingTop40">
                                   <a class="btn btn-blackTransparent btn-blackTransparent--white animated" data-fx="bounceInUp" href="{{url('showlast_product')}}" role="button">Browse latest Collection <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div> --}}
           
           
        </div>

        <div class="ct-contentWrapper">
            <div class="container">
                <!-- FIRST SHOP ELEMENTS SLIDER - FEATURED ITEMS -->
                <h4 class="ct-headerBox text-center ct-u-borderBottom3 ct-u-paddingBottom15 ct-u-paddingTop55">Featured Items</h4>
                <div class="ct-u-paddingBottom20 ct-u-paddingTop35">
                    <div class="ct-js-owl owl-carousel ct-productCarousel ct-productCarousel--arrowsTop" data-single="false" data-pagination="false" data-navigation="true" data-items="4" data-snap-ignore="true">
                    @if($product_featureds)
                        @foreach($product_featureds as $pro)
                        @php
                            $image=App\Image::where('type','App\Product')->where('type_id',$pro->id)->first();
                        @endphp
                        <div class="item">
                            <div class="ct-productShop ct-productShop--zoom">
                                <div class="ct-productShop-category">
                                    <span class="ct-productShop-h5">{{$pro->product_name}}</span>
                                    <div class="clearfix"></div>
                                    @if($pro->img_count($pro->id)>0)
                                    <img class="ct-js-zoomImage" src="{{ asset('upload/product/'.$image->image) }}" data-zoom-image="{{ asset('upload/product/'.$image->image) }}" alt="{{ asset('assets/images/demo-content/featured-item1-large.jpg') }}">
                                    @endif
                                </div>
                                <div class="ct-productShop-content">
                                    <div class="ct-productShop-content-description">
                                        <a  href="{{url('single_product/'.urlencode($pro->id))}}">
                                            <h3>{{$pro->description}}</h3>
                                            <span> ${{$pro->price}}</span>
                                        </a>
                                        <span class="ct-productShop-shopCart">
                                            <a class="btn btn-default" onclick="addto_card('{{$pro->id}}')" role="button"><i class="fa fa-shopping-cart fa-fw"></i></a>
                                            <a class="btn btn-default btn-hidden" href="{{url('single_product/'.urlencode($pro->id))}}" role="button"><i class="fa fa-chain fa-fw"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
                       
                    </div>
                </div>

                {{ $product_featureds->links() }}
                <!-- HIGHLIGHTS SECTION -->
                <h4 class="ct-headerBox ct-u-borderBottom3 ct-u-paddingBottom15 text-center ct-u-paddingTop55">Highlights</h4>
                <section class="ct-u-paddingTop10">
                     <div class="row">
                        @if($highlights)
                        @foreach($highlights as $high)
                        @php
                            $img=App\Image::where('type','App\Product')->where('type_id',$high->id)->first();
                        @endphp
                    
                            <div class="col-md-4">
                                <div class="ct-u-marginBoth20">
                                    <a href="{{url('single_product/'.urlencode($high->id))}}">
                                        <div class="ct-highlightsItem">
                                            @if($high->img_count($high->id)>0)
                                            <div class="ct-highlightsItem-content" data-bg="{{ asset('upload/product/'.$img->image) }}">
                                                <span class="ct-highlightsItem-content-firstTitle ct-u-size30 text-uppercase">{{$high->product_name}}</span>
                                                <br>
                                                <span class="ct-highlightsItem-content-secondTitle ct-u-size34 text-uppercase ct-fw-600">{{$high->description}}</span>
                                                <br>
                                                <span class="ct-highlightsItem-content-thirdTitle ct-u-size16">] ${{$high->price}}</span>
                                            </div>
                                            @endif
                                        </div>
                                    </a>
                                </div>
                            </div>
                        
                        
                        @endforeach
                        @endif
                    </div>
                </section>
                 {{ $highlights->links() }}
                <!-- SECOND SHOP ELEMENTS SLIDER - LATEST PRODUCTS -->
                <h4 class="ct-headerBox ct-u-borderBottom3 text-center ct-u-paddingBottom15 ct-u-paddingTop55">Latest Products</h4>
                <div class="ct-u-paddingBottom20 ct-u-paddingTop35">
                    <div class="ct-js-owl owl-carousel ct-productCarousel ct-productCarousel--arrowsTop" data-single="false" data-pagination="false" data-navigation="true" data-items="4" data-snap-ignore="true">
                       @if($last_products)
                          @foreach($last_products as $product)
                          @php
                              $im=App\Image::where('type','App\Product')->where('type_id',$product->id)->first();
                          @endphp
                        <div class="item">
                            <div class="ct-productShop ct-productShop--default">
                                <div class="ct-productShop-category">
                                    <span class="ct-productShop-h5">{{$product->product_name}}</span>
                                    <div class="clearfix"></div>
                                    @if($product->img_count($product->id)>0)
                                    <img class="" src="{{ asset('upload/product/'.$im->image) }}" data-zoom-image="{{ asset('upload/product/'.$im->image) }}" alt="">
                                    @endif
                                </div>
                                <div class="ct-productShop-content">
                                    <div class="ct-productShop-content-description">
                                        <a href="{{url('single_product/'.urlencode($product->id))}}">
                                            <h3>{{$product->description}}</h3>
                                            <span>${{$product->price}}</span>
                                        </a>
                                        <span class="ct-productShop-shopCart">
                                            <a class="btn btn-default" onclick="addto_card('{{$product->id}}')" role="button"><i class="fa fa-shopping-cart fa-fw"></i></a>
                                            <a class="btn btn-default btn-hidden" href="{{url('single_product/'.urlencode($product->id))}}" role="button"><i class="fa fa-chain fa-fw"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
                       
                    </div>
                </div>

                <!-- THIRD SHOP ELEMENTS SLIDER - TOP RATED PRODUCTS -->
              
            </div>
        </div>

<script>
function addto_card(id){
    event.preventDefault();
    $.ajax({
        type:'get',
        url:'{{url('addto_card')}}',
        data:{'id':id},
        success:function(res){
            console.log(res);
            if(res=='success'){
                alert('cart Added');
            }else{
                alert("Cart not Added, please try again later!");
            }
        }
    })
}
</script>
@endsection
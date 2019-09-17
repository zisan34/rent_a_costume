@extends('layouts.app')

@section('content')


    <div id="ct-js-wrapper" class="ct-pageWrapper">
        
        <div class="ct-contentWrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-md-push-3">
                  

                        <form id="frm" action="{{url('showall_product')}}" method="POST">
                            @csrf
                            <div class="ct-sortingBar ct-u-paddingRight10 ct-u-paddingLeft10">
                                <ul class="ct-sortBy list-inline list-unstyle pull-left ct-u-paddingBoth15">
                                   
                                    <li>
                                        <span class="ct-sortBy-text ct-u-paddingRight10">Sort By:</span>
                                        <select name="sort_option" onchange="$('#frm').submit();" class="ct-select ct-select--default">
                                            <option value="price">Price</option>
                                            <option value="date">date</option>
                                            {{-- <option value="rating">Rating</option> --}}
                                            <option value="highlight">Highlight</option>
                                        </select>
                                        <span id="test"></span>
                                    </li>
                                </ul>
                               
                                <div class="clearfix"></div>
                            </div>
                           
                        </form>



                        <div class="ct-showProducts ct-showProducts--list">
                            <ul class="ct-productsList list-unstyled list-inline">
                                @if($all_products)
                                    @foreach($all_products as $p)
                                    @php
                                        $image=$p->img($p->id);
                                    @endphp
                                        <li>
                                            <div class="ct-productShop ct-productShop--zoom ct-productShop--smaller">
                                                <div class="ct-productShop-category">
                                                    <span class="ct-productShop-h5">{{$p->product_name}}</span>
                                                    <div class="clearfix"></div>
                                                    <div class="text-center">
                                                        @if(($p->img_count($p->id))>0)
                                                        <img class="ct-js-zoomImage" src="{{asset('upload/product/'.$image[0]->image)}}" @if(sizeof($image)>1) data-zoom-image="{{asset('upload/product/'.$image[1]->image)}}" @endif alt="">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="ct-productShop-content">
                                                    <div class="ct-productShop-content-description">
                                                        <div class="ct-productShop-content-description-h5 text-uppercase">Best Seller</div>
                                                        <a href="single-product.html">
                                                            <h3>{{$p->description}}</h3>
                                                            <span>${{$p->price}}</span>
                                                        </a>
                                                        <div class="ct-listElementDescription">
                                                            <div class="ct-stars">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star ct-u-colorGrey"></i>
                                                                <i class="fa fa-star ct-u-colorGrey"></i>
                                                                <div class="ct-reviews">
                                                                    <a href="single-product.html">2 customer reviews</a>
                                                                </div>
                                                            </div>
                                                            <div class="ct-u-paddingTop10 ct-u-paddingBottom15">
                                                                <a class="ct-detailsLink" href="{{url('single_product/'.urlencode($p->id))}}"><i class="fa fa-long-arrow-right fa-fw"></i> details</a>
                                                            </div>
                                                            <div>
                                                                @auth
                                                                <a class="btn btn-default" href="#" onclick="addto_card('{{$p->id}}')" role="button"><i class="fa fa-shopping-cart"></i></a>
                                                                <div class="ct-or text-uppercase ct-u-paddingBottom20">
                                                                    OR
                                                                </div>
                                                                <a class="btn btn-default ct-u-size18 text-uppercase" href="checkout.html" role="button">Speed Buy <i class="fa fa-long-arrow-right ct-u-paddingLeft10"></i></a>
                                                                @endauth
                                                            </div>
                                                        </div>
                                                        <span class="ct-productShop-shopCart">
                                                            <a class="btn btn-default" onclick="addto_card('{{$p->id}}')" role="button"><i class="fa fa-shopping-cart fa-fw"></i></a>
                                                            <a class="btn btn-default btn-hidden" href="single-product.html" role="button"><i class="fa fa-chain fa-fw"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>
                                    @endforeach
                                @endif

                            </ul>
                            {{ $all_products->links() }}
                        </div>
                    </div>

                    <div class="col-md-3 col-md-pull-9">
                        <div class="widget">
                            <div class="widget-inner">
                                <h4 class="ct-headerBox ct-u-borderBottom3 ct-u-paddingBottom10 text-left ct-u-paddingTop35">Brands</h4>
                                <ul class="ct-productCategories ct-u-paddingTop30">
                                    @if($all_brands)
                                        @foreach($all_brands as $bran)
                                                <li><a href="#">{{$bran->brand_name}} - </a><span>({{$bran->product_count($bran->id)}})</span></li>
                                        @endforeach
                                    @endif
                                   
                                </ul>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="widget-inner">
                                <h4 class="ct-headerBox ct-u-borderBottom3 ct-u-paddingBottom10 text-left">Specials</h4>
                                <div class="ct-specials ct-u-marginBoth20">
                                    @php
                                        $img=$special_product->img($special_product->id);
                                    @endphp
                                    @if($special_product->img_count($special_product->id)>0)
                                    <img class="ct-js-zoomImage"  src="{{asset('upload/product/'.$img[0]->image)}}" @if(sizeof($img)>1) data-zoom-image="{{asset('upload/product/'.$img[1]->image)}}" @endif alt="">
                                    @endif
                                    <a href="{{url('single_product/'.urlencode($special_product->id))}}">
                                        <div class="ct-specialsDescription">
                                            <span>{{$special_product->description}}</span>
                                            <span class="ct-u-size22"> ${{$special_product->price}}</span>
                                            <a class="btn btn-default" href="#" onclick="addto_card('{{$special_product->id}}')" role="button"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="widget">
                           
                        </div>
                       
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <!-- PreFOOTER -->
           
        </div>

        <!-- FOOTER -->

    </div>
  <script src="https://rawgit.com/notifyjs/notifyjs/master/dist/notify.js"></script>
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
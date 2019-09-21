
@extends('layouts.app')

@section('content')

<div class="ct-preloader"><div class="ct-preloader-content"></div></div>


    <div id="ct-js-wrapper" class="ct-pageWrapper">
        <!-- navbar + logo menu -->
     

        <div class="ct-contentWrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop40">Single Product</h4>
                        <div class="ct-productSection ct-u-paddingBoth50">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="ct-productGallery ct-js-popupGallery" data-snap-ignore="true">
                                      
                                       
                                            @if($image_count>0)
                                            <div class="item">
                                                <a href="{{asset('upload/product/'.$image[0]->image)}}" class="ct-js-magnificPopupImage"><img src="{{asset('upload/product/'.$image[0]->image)}}" alt="Product 1"></a>
                                            </div>
                                            @endif
                                       
                                       
                                    </div>
                                    
                                </div>
                                <div class="col-md-7">
                                    <div class="ct-productCustomization">
                                        <h3>Added On: {{$product->created_at}}</h3>
                                        <div class="ct-categoryDivider">
                                            <h5>{{$product->product_name}}</h5>
                                            <button onclick="addto_card('{{$product->id}}')" class="btn btn-sm btn-default">Add to Cart</button>
                                        </div>
                                        <div class="ct-price">
                                           
                                            <span class="ct-u-colorBlack ct-u-size40">${{$product->price}}</span>
                                           
                                        </div>
                                        
                                        <div class="ct-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star ct-u-colorGrey"></i>
                                            <i class="fa fa-star ct-u-colorGrey"></i>
                                            <div class="ct-reviews">
                                                <a href="#">2 customer reviews</a>
                                            </div>
                                        </div>

                                      
                                           
                                       
                                       
                                            <div class="ct-productSize">
                                                <div class="ct-u-size16 ct-u-paddingBottom10">Last Rent : {{$product->last_rent}}</div>
                                               
                                            </div>
                                            <div class="ct-u-size16 ct-u-paddingTop10">Availability:
                                                @if($product->availability==1)
                                                    <i class="badge badge-success"><b>Yes</b></i>
                                                @else 
                                                    <i class="badge badge-danger"><b>No</b></i>
                                                @endif
                                            </div>
                                            
                                            <div class="ct-productQuantity">
                                                
                                            </div>
                                            <div class="ct-speedbuy ct-u-paddingBoth20">
                                                <a class="btn btn-default" onclick="addto_card('{{$product->id}}')" role="button"><i class="fa fa-shopping-cart"></i></a>
                                                <div class="ct-or text-uppercase ct-u-paddingBottom20">
                                                    OR
                                                </div>
                                               
                                            </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="ct-u-paddingTop20 ct-u-paddingBottom30">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
                                <li role="presentation"><a href="#specification" aria-controls="specification" role="tab" data-toggle="tab">Product Specification</a></li>
                                {{-- <li role="presentation"><a href="#delivery" aria-controls="delivery" role="tab" data-toggle="tab">Delivery Date Estimate</a></li> --}}
                                <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Customer Reviews</a></li>
                                {{-- <li role="presentation"><a href="#questions" aria-controls="questions" role="tab" data-toggle="tab">Community Q&amp;A</a></li> --}}
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="description">
                                    <div class="adjust-text">
                                        <div class="ct-u-paddingBottom30 ct-u-paddingTop10 ct-panelWidget">
                                            <a href="#" class="pull-left"><i class="fa fa-fw fa-file-text-o"></i> {{$product->product_name}}</a>
                                                <span class="pull-right">Adjust Text Size <a href="#" class="plus">+</a><a href="#" class="minus">-</a></span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <p>
                                            {{$product->description}}
                                        </p>
                                       
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="specification">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table ct-table ct-u-marginBoth20">
                                                <thead>
                                                <tr>
                                                    <th colspan="2">General</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th>Brand</th>
                                                    <td>{{$brand->brand_name}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <td>{{$product->unique_code}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Last Rent</th>
                                                    <td>{{$product->last_rent}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Unit Time Price</th>
                                                    <td>{{$product->price}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Model Name</th>
                                                    <td>{{$product->product_name}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Added at</th>
                                                    <td>{{$product->created_at}}</td>
                                                </tr>
                                               
                                                </tbody>
                                            </table>
                                        </div>
                
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <table class="table ct-table ct-u-marginBoth20">
                                                <thead>
                                                <tr>
                                                    <th colspan="2">Rent Features</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th>Rent frequency</th>
                                                    <td>{{$product->rent_frequency($product->id)}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Quality</th>
                                                    <td>Good</td>
                                                </tr>
                                                <tr>
                                                    <th>Availability</th>
                                                    <td>
                                                         @if($product->availability==1)
                                                            <i class="badge badge-success"><b>Yes</b></i>
                                                        @else 
                                                            <i class="badge badge-danger"><b>No</b></i>
                                                        @endif
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                       
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <table class="table ct-table ct-u-marginBoth20">
                                                <thead>
                                                <tr>
                                                    <th colspan="2">Additional Info</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th>Category</th>
                                                    <td>{{$category->category_name}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Quantity Total</th>
                                                    <td>{{$product->quantity}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                              
                                <div role="tabpanel" class="tab-pane" id="reviews">
                                    <div class="ct-reviewImageBox">
                                        <img src="assets/images/demo-content/review-image.jpg" alt="Review Image">
                                    </div>
                                    <div class="ct-ratings">
                                        <div class="ct-ratingsLeft">
                                            <h4>Rating Snapshot</h4>
                                            <div class="ct-stars">
                                                <i class="fa fa-star">{{$product->averageRate()}}</i>
                                                
                                                <div class="ct-reviews">
                                                    <a href="#">{{$product->totalCommentsCount()}} customer reviews</a>
                                                </div>
                                            </div>
                                           
                                           
                                        </div>
                                        
                                        <div class="clearfix"></div>
                                        <hr>
                                       
                                    </div>
                                    <div class="clearfix"></div>
                                    <h4 class="ct-fw-600 ct-u-paddingBottom30 ct-u-marginBottom0 ct-u-paddingTop30">2 Reviews</h4>
                                    @php
                                       $me=Auth::user();
                                        $comments=DB::table('comments')->where('commentable_id',$product->id)
                                                                       ->get();
                                    @endphp
                                    @if($comments)
                                        @foreach($comments as $com)
                                        @php
                                            $u=$com->commented_id;
                                            $u=App\User::find($u);
                                        @endphp
                                            <div class="ct-feedback ct-u-paddingTop30">
                                                <span class="pull-left">{{$product->product_name}}</span><span></span>
                                                <span class="pull-right"><i class="fa fa-pencil fa-fw"></i>  Posted by: <a href="#" class="author">{{$u->name}}</a></span>
                                                <div class="clearfix"></div>
                                                <div class="ct-stars ct-u-paddingBoth10">
                                                    <i class="fa fa-star"></i>
                                                
                                                </div>
                                                <div class="ct-feedbackDescription ct-u-paddingBottom20">
                                                   {{$com->comment}}
                                                </div>
                                                
                                            </div>
                                        @endforeach
                                    @endif
                                   
                                    <div class="ct-feedback ct-u-paddingTop25">
                                        <div class="row">
                                            <div class="col-md-8">
                                                @auth
                                                @php
                                                   
                                                    $tm=Auth::user()->id;
                                                    $checker=App\Order::where('user_id',$tm)->where('product_id',$product->id)->count();
                                                @endphp
                                                <h4 class="ct-fw-600 ct-u-paddingBottom20 ct-u-marginBottom0">Help others! Write a review</h4>
                                                <div class="ct-u-size16">All fields are mandatory.</div>
                                                @if($checker>0)
                                                <form class="form-horizontal ct-u-paddingTop30" method="POST" action="{{url('submit_rating')}}">
                                                   @csrf
                                                   <input type="hidden" name="pro_id" value="{{$product->id}}">
                                                    <div class="form-group">
                                                        <label for="review" class="col-sm-3 control-label">Your Review:</label>
                                                        <div class="col-sm-9">
                                                            <textarea id="review" name="comment" class="form-control" rows="6"></textarea>
                                                            <span>Please do not include: HTML, references to other retailers, pricing, personal informations, any profane, inflammatory or copyrighted comments, or any copied content.</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name" class="col-sm-3 control-label">Your Rating:</label>
                                                        <div class="col-sm-9">
                                                            <div class="lead">
                                                                <div id="stars-existing" class="starrr" data-rating='4'>
                                                                    <input type="number" name="rating" class="form-control">
                                                                </div>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                   
                                                    
                                                    <div class="form-group ct-u-paddingTop30">
                                                        <input class="btn btn-default " type="submit" value="Submit">
                                                       
                                                    </div>
                                                </form>
                                                @endif
                                                @endauth
                                            </div>
                                            <div class="col-md-4">
                                                <div class="widget">
                                                    <div class="widget-inner">
                                                        <div class="ct-widgetReview">
                                                            <h3>What makes a good review</h3>
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <div><i class="fa fa-fw fa-long-arrow-right"></i> Have you used this product?</div>
                                                                    <p>It's always better to review a product you have personally experienced.</p>
                                                                </li>
                                                                <li>
                                                                    <div><i class="fa fa-fw fa-long-arrow-right"></i> Educate your readers</div>
                                                                    <p>Provide a relevant, unbiased overview of the product. Readers are interested in the pros and the cons of the product.</p>
                                                                </li>
                                                                <li>
                                                                    <div><i class="fa fa-fw fa-long-arrow-right"></i> Be yourself, be informative</div>
                                                                    <p>Let your personality shine through, but it's equally important to provide facts to back up your opinion.</p>
                                                                </li>
                                                                <li>
                                                                    <div><i class="fa fa-fw fa-long-arrow-right"></i> Stay concise</div>
                                                                    <p>Be creative but also remember to stay on topic. A catchy title gets attention!</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                               
                            </div>
                        </div>

                    </div>
                </div>
                <h4 class="ct-headerBox text-left ct-u-borderBottom3 ct-u-paddingBottom15 ct-u-paddingTop55">Recommendations For You </h4>
                <div class="ct-u-paddingBottom50 ct-u-paddingTop35">
                    <div class="ct-js-owl owl-carousel ct-productCarousel ct-productCarousel--arrowsTopRight" data-single="false" data-pagination="false" data-navigation="true" data-items="4" data-snap-ignore="true">
                        @if($related_products)
                          @foreach($related_products as $recommend)
                          @php
                              $image=$recommend->img($recommend->id);
                          @endphp
                            <div class="item">
                                <div class="ct-productShop ct-productShop--zoom">
                                    <div class="ct-productShop-category">
                                        <span class="ct-productShop-h5">{{$recommend->product_name}}</span>
                                        <div class="clearfix"></div>
                                        @if($recommend->img_count($recommend->id)>0)
                                        <img class="ct-js-zoomImage" src="{{asset('upload/product/'.$image[0]->image)}}" data-zoom-image="{{asset('upload/product/'.$image[0]->image)}}" alt="">
                                        @endif
                                    </div>
                                    <div class="ct-productShop-content">
                                        <div class="ct-productShop-content-description">
                                            <a href="single-product.html">
                                                <h3>{{$recommend->description}}</h3>
                                                <span> ${{$recommend->price}}</span>
                                            </a>
                                            <span class="ct-productShop-shopCart">
                                                <a class="btn btn-default" href="#" onclick="addto_card('{{$recommend->id}}')" role="button"><i class="fa fa-shopping-cart fa-fw"></i></a>
                                                <a class="btn btn-default btn-hidden" href="single-product.html" role="button"><i class="fa fa-chain fa-fw"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                      
                    </div>
                      {{ $related_products->links() }}
                </div>
            </div>

            <!-- No padding here for ct-prefooter - disabled ct-u-paddingTop60 -->

            <!-- PreFOOTER -->
          
        </div>

        <!-- FOOTER -->
    
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

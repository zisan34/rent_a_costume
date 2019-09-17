
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
                                      
                                        <div id="sync1" class="owl-carousel">
                                             @for($i=0;$i<$image_count;$i++)
                                            <div class="item">
                                                <a href="{{asset('upload/product/'.$image[$i]->image)}}" class="ct-js-magnificPopupImage"><img src="{{asset('upload/product/'.$image[$i]->image)}}" alt="Product 1"></a>
                                            </div>
                                            @endfor
                                        </div>
                                        <div id="sync2" class="owl-carousel ct-u-paddingBoth20">
                                            @for($j=0;$j<$image_count;$j++)
                                            <div class="item">
                                                <img src="{{asset('upload/product/'.$image[$i]->image)}}" alt="Product 1">
                                            </div>
                                           @endfor
                                        </div>
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

                                      
                                           
                                       
                                        <form action="#">
                                            <div class="ct-productSize">
                                                <div class="ct-u-size16 ct-u-paddingBottom10">Select Size:</div>
                                                <div class="">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> <span>5</span>
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> <span>6</span>
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> <span>7</span>
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4"> <span>8</span>
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5"> <span>9</span>
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio6" value="option6"> <span>10</span>
                                                    </label>
                                                    <a href="#" class=""><i class="fa fa-fw fa-file-text-o"></i> Ring Size Guide</a>
                                                </div>
                                            </div>
                                            <div class="ct-u-size16 ct-u-paddingTop10">Select Color:</div>
                                            <select class="ct-js-colorSelector">
                                                <option value="0" data-color="#d2a48a" selected="selected">salmon</option>
                                                <option value="1" data-color="#e1c99b">yellow</option>
                                                <option value="2" data-color="#deddd9">grey</option>
                                            </select>
                                            <div class="ct-productQuantity">
                                                <div class="ct-u-size16 ct-u-paddingBottom10">Select Quantity:</div>
                                                <div class="">
                                                    <select class="ct-select ct-select--small">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="ct-speedbuy ct-u-paddingBoth20">
                                                <a class="btn btn-default" href="my-cart.html" role="button"><i class="fa fa-shopping-cart"></i></a>
                                                <div class="ct-or text-uppercase ct-u-paddingBottom20">
                                                    OR
                                                </div>
                                                <a class="btn btn-default ct-u-size18 text-uppercase" href="checkout.html" role="button">Speed Buy <i class="fa fa-long-arrow-right ct-u-paddingLeft10"></i></a>
                                            </div>
                                        </form>
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
                                                    <th>Type</th>
                                                    <td>Ring</td>
                                                </tr>
                                                <tr>
                                                    <th>Model Name</th>
                                                    <td>The Carysa</td>
                                                </tr>
                                                <tr>
                                                    <th>Occasion</th>
                                                    <td>Love</td>
                                                </tr>
                                                <tr>
                                                    <th>Color</th>
                                                    <td>White Gold</td>
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
                                                    <td>14 K</td>
                                                </tr>
                                                <tr>
                                                    <th>Normal Rent Time</th>
                                                    <td>2.82</td>
                                                </tr>
                                                <tr>
                                                    <th>Availability</th>
                                                    <td>2.82</td>
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
                                                    <td>GIA Certified, BIS Hallmark</td>
                                                </tr>
                                                <tr>
                                                    <th>Quantity Total</th>
                                                    <td>GIA Certified, BIS Hallmark</td>
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
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star ct-u-colorGrey"></i>
                                                <i class="fa fa-star ct-u-colorGrey"></i>
                                                <div class="ct-reviews">
                                                    <a href="#">2 customer reviews</a>
                                                </div>
                                            </div>
                                            <div class="ct-u-paddingTop10">Overall Rating 2.8 out of 5</div>
                                            <div class="ct-u-paddingTop15 ct-fs-i">(21 of 56 (38%) reviewers would recommend this product to a friend.)</div>
                                        </div>
                                        <div class="ct-ratingsRight">
                                            <ul class="list-unstyled ct-u-paddingTop15">
                                                <li><span>5 stars</span><span><span data-width="60"></span></span><span>12</span></li>
                                                <li><span>4 stars</span><span><span data-width="20"></span></span><span>7</span></li>
                                                <li><span>3 stars</span><span><span data-width="50"></span></span><span>7</span></li>
                                                <li><span>2 stars</span><span><span data-width="80"></span></span><span>17</span></li>
                                                <li><span>1 star</span><span><span data-width="45"></span></span><span>13</span></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                        <hr>
                                        <div class="ct-range ct-u-paddingTop25">
                                            <div>Sizing Snapshot</div>
                                            <div>Fit Snug</div>
                                            <div class="ct-rangeSlider">
                                                <div class="ct-js-noUiSliderDisabled ct-noUiSlider"></div>
                                            </div>
                                            <div>Runs Large</div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <h4 class="ct-fw-600 ct-u-paddingBottom30 ct-u-marginBottom0 ct-u-paddingTop30">2 Reviews</h4>

                                    <div class="ct-feedback ct-u-paddingTop30">
                                         <span class="pull-left">Very Beautiful Ring!!</span><span></span>
                                         <span class="pull-right"><i class="fa fa-pencil fa-fw"></i>  Posted by: <a href="#" class="author">Karen1234</a></span>
                                         <div class="clearfix"></div>
                                        <div class="ct-stars ct-u-paddingBoth10">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="ct-feedbackDescription ct-u-paddingBottom20">
                                            This ring looks really elegant and dainty!! Love it!! This is really a pretty ring. get all kinds of compliments, I normally wear an 8 on my ring finger, so I orderd the size 10 for my pointer finger. perfect fit. I bought the clad & it is awesome.
                                        </div>
                                        <div class="ct-recommendation ct-u-paddingBoth20">
                                            <span class="ct-fw-600">Would you recommend this product as a gift?</span><br>
                                            <span>Yes</span><br>
                                            <span class="ct-fw-600">Who would this be a perfect gift for?</span><br>
                                            <span>Families</span><br>
                                            <div class="ct-recommendationReport ct-u-paddingBoth25">Was this review helpful to you? <a href="#">Yes</a><a href="#">No</a><span><i class="fa fa-fw fa-long-arrow-right"></i> <a href="#"> Report Inappropriate Review</a></span></div>
                                            <div>
                                                <span>Share this review:</span>
                                                <ul class="ct-socials ct-socials--small ct-socials--black list-inline list-unstyled">
                                                      <li><a href="https://www.facebook.com/createITpl"><i class="fa fa-facebook fa-fw"></i></a></li>
                                                    <li><a href="https://twitter.com/createitpl"><i class="fa fa-twitter fa-fw"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ct-feedback ct-u-paddingTop30">
                                        <span class="pull-left">Cute but not confortable</span><span></span>
                                        <span class="pull-right"><i class="fa fa-pencil fa-fw"></i>  Posted by: <a href="#" class="author">Jessie Macdonalds</a></span>
                                        <div class="clearfix"></div>
                                        <div class="ct-stars ct-u-paddingBoth10">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star ct-u-colorGrey"></i>
                                            <i class="fa fa-star ct-u-colorGrey"></i>
                                            <i class="fa fa-star ct-u-colorGrey"></i>
                                        </div>
                                        <div class="ct-feedbackDescription ct-u-paddingBottom20">
                                            I wore this ring twice and one of the stones already popped out! It is a cute ring but not very comfortable. I wore it on my left hand ring finger and it is scratchy. I purchaed the ring in both silver and gold. I don't want to return it but I might have to.
                                        </div>
                                        <div class="ct-recommendation ct-u-paddingBoth20">
                                            <div class="ct-u-paddingBottom20 ct-u-marginBottom20 ct-u-borderBottomDarkGrey"><span class="ct-fw-600">Sizing Feedback:</span> <span class="ct-fs-i">It’s much smaller than expected..</span></div>
                                            <span class="ct-fw-600">Would you recommend this product as a gift?</span><br>
                                            <span>No</span><br>
                                            <span class="ct-fw-600">Who would this be a perfect gift for?</span><br>
                                            <span>Me!</span><br>
                                            <div class="ct-recommendationReport ct-u-paddingBoth25">Was this review helpful to you? <a href="#">Yes</a><a href="#">No</a><span><i class="fa fa-fw fa-long-arrow-right"></i> <a href="#"> Report Inappropriate Review</a></span></div>
                                            <div>
                                                <span>Share this review:</span>
                                                <ul class="ct-socials ct-socials--small ct-socials--black list-inline list-unstyled">
                                                      <li><a href="https://www.facebook.com/createITpl"><i class="fa fa-facebook fa-fw"></i></a></li>
                                                    <li><a href="https://twitter.com/createitpl"><i class="fa fa-twitter fa-fw"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ct-feedback ct-u-paddingTop25">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h4 class="ct-fw-600 ct-u-paddingBottom20 ct-u-marginBottom0">Help others! Write a review</h4>
                                                <div class="ct-u-size16">All fields are mandatory.</div>
                                                <form class="form-horizontal ct-u-paddingTop30">
                                                    <div class="form-group">
                                                        <label for="title" class="col-sm-3 control-label">Review Title:</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="title" required>
                                                            <span>(Maximum 20 words)</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="review" class="col-sm-3 control-label">Your Review:</label>
                                                        <div class="col-sm-9">
                                                            <textarea id="review" class="form-control" rows="6"></textarea>
                                                            <span>Please do not include: HTML, references to other retailers, pricing, personal informations, any profane, inflammatory or copyrighted comments, or any copied content.</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name" class="col-sm-3 control-label">Your Rating:</label>
                                                        <div class="col-sm-9">
                                                            <div class="lead">
                                                                <div id="stars-existing" class="starrr" data-rating='4'></div>
                                                            </div>
                                                            <span>(Click to rate on scale of 1-5)</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name" class="col-sm-3 control-label">Name:</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="name" required>
                                                            <span>(First and last name)</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <div class="ct-range ct-u-paddingTop25" data-snap-ignore="true">
                                                                <div>Sizing Snapshot</div>
                                                                <div>Fit Snug</div>
                                                                <div class="ct-rangeSlider">
                                                                    <div class="ct-js-noUiSlider ct-noUiSlider"></div>
                                                                </div>
                                                                <div>Runs Large</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ct-u-paddingTop30">
                                                        <button type="submit" class="btn btn-default">
                                                          Submit   <i class="fa fa-long-arrow-right fa-fw"></i>
                                                        </button>
                                                    </div>
                                                </form>
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
                <h4 class="ct-headerBox text-left ct-u-borderBottom3 ct-u-paddingBottom15 ct-u-paddingTop55">Recommendations Based On Your Browsing History</h4>
                <div class="ct-u-paddingBottom50 ct-u-paddingTop35">
                    <div class="ct-js-owl owl-carousel ct-productCarousel ct-productCarousel--arrowsTopRight" data-single="false" data-pagination="false" data-navigation="true" data-items="4" data-snap-ignore="true">
                        <div class="item">
                            <div class="ct-productShop ct-productShop--zoom">
                                <div class="ct-productShop-category">
                                    <span class="ct-productShop-h5">Rings</span>
                                    <div class="clearfix"></div>
                                    <img class="ct-js-zoomImage" src="assets/images/demo-content/featured-item1.jpg" data-zoom-image="assets/images/demo-content/featured-item1-large.jpg" alt="">
                                </div>
                                <div class="ct-productShop-content">
                                    <div class="ct-productShop-content-description">
                                        <a href="single-product.html">
                                            <h3>Aaron basha 18K White Yellows Pink Enamel Flower</h3>
                                            <span><del>450.99</del> $318.00</span>
                                        </a>
                                        <span class="ct-productShop-shopCart">
                                            <a class="btn btn-default" href="my-cart.html" role="button"><i class="fa fa-shopping-cart fa-fw"></i></a>
                                            <a class="btn btn-default btn-hidden" href="single-product.html" role="button"><i class="fa fa-chain fa-fw"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ct-productShop ct-productShop--zoom">
                                <div class="ct-productShop-category">
                                    <span class="ct-productShop-h5">Rings</span>
                                    <div class="clearfix"></div>
                                    <img class="ct-js-zoomImage" src="assets/images/demo-content/featured-item2.jpg" data-zoom-image="assets/images/demo-content/featured-item2-large.jpg" alt="">
                                </div>
                                <div class="ct-productShop-content">
                                    <div class="ct-productShop-content-description">
                                        <a href="single-product.html">
                                            <h3>Charleso Krypell Sterlingoinum & 14K Yellow Gold</h3>
                                            <span>$290.99</span>
                                        </a>
                                        <span class="ct-productShop-shopCart">
                                            <a class="btn btn-default" href="my-cart.html" role="button"><i class="fa fa-shopping-cart fa-fw"></i></a>
                                            <a class="btn btn-default btn-hidden" href="single-product.html" role="button"><i class="fa fa-chain fa-fw"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ct-productShop ct-productShop--zoom">
                                <div class="ct-productShop-category">
                                    <span class="ct-productShop-h5">Rings</span>
                                    <div class="clearfix"></div>
                                    <img class="ct-js-zoomImage" src="assets/images/demo-content/featured-item3.jpg" data-zoom-image="assets/images/demo-content/featured-item3-large.jpg" alt="">
                                </div>
                                <div class="ct-productShop-content">
                                    <div class="ct-productShop-content-description">
                                        <a href="single-product.html">
                                            <h3>Lagos Sterling Silver & 18K Gold Yellow Four Flower</h3>
                                            <span><del>169.99</del> $150.00</span>
                                        </a>
                                        <span class="ct-productShop-shopCart">
                                            <a class="btn btn-default" href="my-cart.html" role="button"><i class="fa fa-shopping-cart fa-fw"></i></a>
                                            <a class="btn btn-default btn-hidden" href="single-product.html" role="button"><i class="fa fa-chain fa-fw"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ct-productShop ct-productShop--zoom">
                                <div class="ct-productShop-category">
                                    <span class="ct-productShop-h5">Wedding Rings</span>
                                    <div class="clearfix"></div>
                                    <img class="ct-js-zoomImage" src="assets/images/demo-content/featured-item4.jpg" data-zoom-image="assets/images/demo-content/featured-item4-large.jpg" alt="">
                                </div>
                                <div class="ct-productShop-content">
                                    <div class="ct-productShop-content-description">
                                        <a href="single-product.html">
                                            <h3>Charles Krypell Sterlingoi Silver Cobblestone Textured </h3>
                                            <span>$189.99</span>
                                        </a>
                                        <span class="ct-productShop-shopCart">
                                            <a class="btn btn-default" href="my-cart.html" role="button"><i class="fa fa-shopping-cart fa-fw"></i></a>
                                            <a class="btn btn-default btn-hidden" href="single-product.html" role="button"><i class="fa fa-chain fa-fw"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ct-productShop ct-productShop--zoom">
                                <div class="ct-productShop-category">
                                    <span class="ct-productShop-h5">Rings</span>
                                    <div class="clearfix"></div>
                                    <img class="ct-js-zoomImage" src="assets/images/demo-content/featured-item1.jpg" data-zoom-image="assets/images/demo-content/featured-item1-large.jpg" alt="">
                                </div>
                                <div class="ct-productShop-content">
                                    <div class="ct-productShop-content-description">
                                        <a href="single-product.html">
                                            <h3>Aaron basha 18K White Yellows Pink Enamel Flower</h3>
                                            <span><del>450.99</del> $318.00</span>
                                        </a>
                                        <span class="ct-productShop-shopCart">
                                            <a class="btn btn-default" href="my-cart.html" role="button"><i class="fa fa-shopping-cart fa-fw"></i></a>
                                            <a class="btn btn-default btn-hidden" href="single-product.html" role="button"><i class="fa fa-chain fa-fw"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ct-productShop ct-productShop--zoom">
                                <div class="ct-productShop-category">
                                    <span class="ct-productShop-h5">Rings</span>
                                    <div class="clearfix"></div>
                                    <img class="ct-js-zoomImage" src="assets/images/demo-content/featured-item2.jpg" data-zoom-image="assets/images/demo-content/featured-item2-large.jpg" alt="">
                                </div>
                                <div class="ct-productShop-content">
                                    <div class="ct-productShop-content-description">
                                        <a href="single-product.html">
                                            <h3>Charleso Krypell Sterlingoinum & 14K Yellow Gold</h3>
                                            <span>$290.99</span>
                                        </a>
                                        <span class="ct-productShop-shopCart">
                                            <a class="btn btn-default" href="my-cart.html" role="button"><i class="fa fa-shopping-cart fa-fw"></i></a>
                                            <a class="btn btn-default btn-hidden" href="single-product.html" role="button"><i class="fa fa-chain fa-fw"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ct-productShop ct-productShop--zoom">
                                <div class="ct-productShop-category">
                                    <span class="ct-productShop-h5">Rings</span>
                                    <div class="clearfix"></div>
                                    <img class="ct-js-zoomImage" src="assets/images/demo-content/featured-item3.jpg" data-zoom-image="assets/images/demo-content/featured-item3-large.jpg" alt="">
                                </div>
                                <div class="ct-productShop-content">
                                    <div class="ct-productShop-content-description">
                                        <a href="single-product.html">
                                            <h3>Lagos Sterling Silver & 18K Gold Yellow Four Flower</h3>
                                            <span><del>169.99</del> $150.00</span>
                                        </a>
                                        <span class="ct-productShop-shopCart">
                                            <a class="btn btn-default" href="my-cart.html" role="button"><i class="fa fa-shopping-cart fa-fw"></i></a>
                                            <a class="btn btn-default btn-hidden" href="single-product.html" role="button"><i class="fa fa-chain fa-fw"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ct-productShop ct-productShop--zoom">
                                <div class="ct-productShop-category">
                                    <span class="ct-productShop-h5">Wedding Rings</span>
                                    <div class="clearfix"></div>
                                    <img class="ct-js-zoomImage" src="assets/images/demo-content/featured-item4.jpg" data-zoom-image="assets/images/demo-content/featured-item4-large.jpg" alt="">
                                </div>
                                <div class="ct-productShop-content">
                                    <div class="ct-productShop-content-description">
                                        <a href="single-product.html">
                                            <h3>Charles Krypell Sterlingoi Silver Cobblestone Textured </h3>
                                            <span>$189.99</span>
                                        </a>
                                        <span class="ct-productShop-shopCart">
                                            <a class="btn btn-default" href="my-cart.html" role="button"><i class="fa fa-shopping-cart fa-fw"></i></a>
                                            <a class="btn btn-default btn-hidden" href="single-product.html" role="button"><i class="fa fa-chain fa-fw"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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

@extends('admin.layouts.master')

@section('content')
<style>

.image-slider-wrapper{
    overflow: hidden;
}
#image_slider{
    position: relative;
    height: 280px;
    padding:0;
}
#image_slider li{
    max-width: 100%;
    float:left;
    list-style: none;
}
</style>

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                       @include('admin.layouts.bradcum')     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <form class="form-inline" id="sform" action="{{url('admin/ecommerce-products')}}" method="POST">
                                               @csrf
                                               
                                                <div class="form-group mx-sm-3">
                                                    <label for="status-select" class="mr-2">Sort By</label>
                                                    <select class="custom-select" onchange="$('#sform').submit();" id="status-select" name="sort_product">
                                                        <option selected="">All</option>
                                                        
                                                        <option value="price">Price </option>
                                                        <option value="available">Available</option>
                                                        <option value="created_at">Time Added</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-lg-right mt-3 mt-lg-0">
                                                
                                                <a href="{{url('admin/add_product')}}" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-plus-circle mr-1"></i> Add New</a>
                                            </div>
                                        </div><!-- end col-->
                                    </div> <!-- end row -->
                                </div> <!-- end card-box -->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

                        <div class="row">
                            @if($products)
                                @foreach($products as $product)
                                    <div class="col-md-6 col-xl-3">
                                        <div class="card-box product-box">

                                            <div class="product-action">
                                                <a  href="{{url('admin/product_edit/'.urlencode($product->unique_code))}}" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                                                <a  href="{{url('admin/product_delete/'.urlencode($product->unique_code))}}" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
                                            </div>

                                            <div class=”image-slider-wrapper”>
                                                <ul id=”image_slider”>
                                                    @php
                                                        $images=App\Image::where('id',$product->id)->where('type','App\Product')->get();
                                                    @endphp
                                                    @if($images)
                                                        @foreach($images as $image)
                                                             <li><img src="{{asset('upload/product/'.$image->image)}}" class="img-fluid"></li>
                                                        @endforeach
                                                    @endif
                                                   
                                                
                                                </ul> 
                                            </div>

                                            {{-- <div>
                                                <img src="assets/images/products/product-1.jpg" alt="product-pic" class="img-fluid" />
                                            </div> --}}

                                            <div class="product-info">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <h5 class="font-16 mt-0 sp-line-1"><a href="{{url('admin/productDetails/'.urlencode($product->unique_code))}}" class="text-dark">{{$product->product_name}}</a> </h5>
                                                        <div class="text-warning mb-2 font-13">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <h5 class="m-0"> <span class="text-muted"> Stocks : {{$product->quantity}}</span></h5>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="product-price-tag">
                                                            ${{$product->price}}
                                                        </div>
                                                    </div>
                                                </div> <!-- end row -->
                                            </div> <!-- end product info-->
                                        </div> <!-- end card-box-->
                                    </div> <!-- end col-->
                                @endforeach
                            @endif
                          
                        </div>
                        {{ $products->links() }}
                        
                    </div> <!-- container -->

@endsection
@section('script')
<script>
var ul;
var liItems; 
var imageWidth;
var imageNumber;

function init(){

    ul = document.getElementById(‘image_slider’);
    liItems = ul.children;
    imageNumber = liItems.length;
    imageWidth = liItems[0].children[0].offsetWidth;
    // set ul’s width as the total width of all images in image slider.
    ul.style.width = parseInt(imageWidth * imageNumber) + ‘px’;
    slider(ul);
}
 function slider(ul){ 
    animate({
        delay:17,
        duration: 3000,
        delta:function(p){return Math.max(0, -1 + 2 * p)},
        step:function(delta){
            ul.style.left = ‘-’ + parseInt(currentImage * imageWidth + delta * imageWidth) + ‘px’;
    },
        callback:function(){
            currentImage++;
        // if it doesn’t slied to the last image, keep sliding
            if(currentImage < imageNumber-1){
                slider(ul);
        }
       // if current image it’s the last one, it slides back to the first one
            else{
                var leftPosition = (imageNumber - 1) * imageWidth;
               // after 2 seconds, call the goBack function to slide to the first image 
                setTimeout(function(){goBack(leftPosition)},2000); 
                setTimeout(function(){slider(ul)}, 4000);
            }
        }
    });
}
function goBack(leftPosition){
    currentImage = 0; 
    var id = setInterval(function(){
        if(leftPosition >= 0){
            ul.style.left = ‘-’ + parseInt(leftPosition) + ‘px’;
            leftPosition -= imageWidth / 10;
        }
        else{
            clearInterval(id);
        } 
    }, 17);
}
function animate(opts){
    var start = new Date;
    var id = setInterval(function(){
        var timePassed = new Date - start;
        var progress = timePassed / opts.duration
        if(progress > 1){
            progress = 1;
        }
        var delta = opts.delta(progress);
        opts.step(delta);
        if (progress == 1){
            clearInterval(id);
           opts.callback();
         }
    }, opts.dalay || 17);
}
window.onload = init;

</script>
@endsection
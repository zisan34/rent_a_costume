@extends('admin.layouts.master')
@section('css')
        <link href="{{ URL::asset('backend/assets/libs/dropzone/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('backend/assets/libs/dropify/dropify.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{ URL::asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Plugins css -->

        <link href="{{ URL::asset('backend/assets/libs/jquery-nice-select/jquery-nice-select.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('backend/assets/libs/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('backend/assets/libs/multiselect/multiselect.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('backend/assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('backend/assets/libs/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('backend/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

                    <!-- Start Content-->
<div class="container-fluid">
    
    <!-- start page title -->
    @include('admin.layouts.bradcum')   
    <!-- end page title --> 

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    

                    <div class="row">
                        <div class="col-lg-12">
                            <form method="POST" action="{{url('admin/product_edit')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$product->id}}">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Product Name</label>
                                    <input type="text" value="{{$product->product_name}}" name="name" id="simpleinput" class="form-control" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Product Price</label>
                                    <input type="number" value="{{$product->price}}" name="price" id="simpleinput" class="form-control" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Product Quantity</label>
                                    <input type="number" value="{{$product->quantity}}" name="quantity" id="simpleinput" class="form-control" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Product Highlight</label>
                                    <input type="number" value="{{$product->highlight}}" name="highlight" id="simpleinput" class="form-control" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="example-textarea">Details</label>
                                    <textarea class="form-control" name="description" id="example-textarea" rows="5" required>

                                        {{$product->description}}
                                    </textarea>
                                </div>
                                <div>
                                   
                                    <h6>Current Category: <i>{{$cat->category_name}}</i></h6>
                                </div>
                                 <select class="selectpicker" name="categorypicker" onchange="getbrand(value)" data-style="btn-outline-warning" required>
                                    <option value="other">Select Category</option>
                                    @if($category)
                                        @foreach($category as $cat)
                                                <option value="{{$cat->id}}"  >{{$cat->category_name}}</option>
                                        @endforeach
                                    @endif
                                                
                                                
                                </select>
                                <br>
                                <br>
                                <div id="brand_get">

                                </div>
                                {{-- <select id="brand_get"  class="selectpicker" data-style="btn-outline-primary">
                                                <option >Select a Brand</option>
                                                
                                </select> --}}
                                <br>
                                 <h4>Add Images (3 Max, 1M max)</h4>
                                <br>
                                
                                <div class="col-lg-4 float-left">
                                    <div class="mt-3">
                                        <input type="file" name="image1" class="dropify" @if(sizeof($images)>0) data-default-file="{{asset('upload/product/'.$images[0]->image)}}" @endif  />
                                        <p class="text-muted text-center mt-2 mb-0">Image 1</p>
                                    </div>
                                </div>
                                {{-- <div class="col-lg-4 float-left">
                                    <div class="mt-3">
                                        <input type="file" name="image2" class="dropify" @if(sizeof($images)>1)  data-default-file="{{asset('upload/product/'.$images[1]->image)}}" @endif/>
                                        <p class="text-muted text-center mt-2 mb-0">Image 2</p>
                                    </div>
                                </div> --}}
                                {{-- <div class="col-lg-4 float-left">
                                    <div class="mt-3">
                                        <input type="file" name="image3" class="dropify" @if(sizeof($images)>2) data-default-file="{{asset('upload/product/'.$images[2]->image)}}" @endif />
                                        <p class="text-muted text-center mt-2 mb-0">Image 3</p>
                                    </div>
                                </div> --}}
                                <div class="switchery-demo">
                                    <label for="">Status</label>
                                    <input type="checkbox" checked data-plugin="switchery" name="status" value='true' data-color="#1bb99a"/>
                                </div>
                                <br>
                                <br>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" value="Save">
                                </div>
                            </form>
                        </div> <!-- end col -->

                        
                    </div>
                    <!-- end row-->

                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div>
    <!-- end row -->

    
</div> <!-- container -->

@endsection
@section('script')

        <!-- Plugins js -->
        <script src="{{ URL::asset('backend/assets/libs/dropzone/dropzone.min.js')}}"></script>
        <script src="{{ URL::asset('backend/assets/libs/dropify/dropify.min.js')}}"></script>

        <!-- Init js-->
        <script src="{{ URL::asset('backend/assets/js/pages/form-fileuploads.init.js')}}"></script>
        <script src="{{ URL::asset('backend/assets/libs/jquery-nice-select/jquery-nice-select.min.js')}}"></script>
        <script src="{{ URL::asset('backend/assets/libs/switchery/switchery.min.js')}}"></script>
        <script src="{{ URL::asset('backend/assets/libs/multiselect/multiselect.min.js')}}"></script>
        <script src="{{ URL::asset('backend/assets/libs/select2/select2.min.js')}}"></script>
        {{-- <script src="{{ URL::asset('backend/assets/libs/jquery-mockjax/jquery-mockjax.min.js')}}"></script> --}}
        <script src="{{ URL::asset('backend/assets/libs/autocomplete/autocomplete.min.js')}}"></script>
        <script src="{{ URL::asset('backend/assets/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>
        <script src="{{ URL::asset('backend/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js')}}"></script>
        <script src="{{ URL::asset('backend/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>

        <!-- Init js-->
        <script src="{{ URL::asset('backend/assets/js/pages/form-advanced.init.js')}}"></script>
        
         <script>
        function getbrand(cat_id){
            console.log(cat_id);
            $.ajax({
                type:'get',
                data:{'id':cat_id},
                url:'{{url('admin/getBrand')}}',
                contentType: "text/html",
                 crossDomain:'true',
                success:function(res){
                    console.log(res);
                    $('#brand_get').html(res);
                }
            })
        }
        </script>
        
@endsection
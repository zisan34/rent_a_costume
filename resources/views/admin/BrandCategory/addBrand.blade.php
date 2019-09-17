@extends('admin.layouts.master')

@section('css')

        <!-- Plugins css -->
        <link href="{{ URL::asset('backend/assets/libs/dropzone/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('backend/assets/libs/dropify/dropify.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{ URL::asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                       <h5>Add A Brand</h5>

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->  
                        @php
                            $ses=Session::get('message');
                        @endphp
                        @if($ses!=null)
                            <div class="card">
                                <p class="text-info">{{$ses}}</p>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <form action="{{url('admin/save_brand')}}" method="POST" id="cat-form" enctype="multipart/form-data">
                                            @csrf
                                       
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="mt-3">
                                                        <label for="">Brand Name</label>
                                                        <input type="text" id="cat-name" name="name" class="form-control" />
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mt-3">
                                                        <label for="">Category </label>
                                                        <select name="cat_id" id="" class="form-control">
                                                            @if($category)
                                                                @foreach ($category as $cat)
                                                                <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                                                                    
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>

                                                

                                                <div class="col-lg-4">
                                                    <div class="mt-3">
                                                        <input type="file" name="image" class="dropify" data-max-file-size="1M" />
                                                        <p class="text-muted text-center mt-2 mb-0">Max File size 1M</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="mt-3">
                                                        <input type="submit" class="btn btn-success" >
                                                    </div>
                                                </div>
                                            </div> <!-- end row -->
                                        </form>

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
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

@endsection
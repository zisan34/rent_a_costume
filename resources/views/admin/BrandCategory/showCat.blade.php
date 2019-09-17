@extends('admin.layouts.master')

@section('content')

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                           
                        <!-- end page title --> 
                        @include('admin.layouts.bradcum')
                       <h4 class="page-title">Show Category</h4>
                  
                        <!-- end row -->
        
                        <div class="row">
                            <div class="col-xl-12 col-md-12">
                                <div class="card-box">
                                    <h4 class="header-title mb-4">Categoy with their Brands</h4>
        
                                    <div class="row">
                                        <div class="col-sm-12 col-xl-12 col-md-12">
                                            @if($category)
                                                @foreach($category as $cat)
                                                    <div class="nav nav-pills nav-pills-tab mb-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                        <img src="{{asset('upload/etc/'.$cat->icon)}}" style="display:inline;border-radius:15%;"  width="55px"  alt="">
                                                        <a style="display:inline" class=" active show mb-1 col-md-2 col-sm-3 col-xl-3" id="v-pills-{{$cat->id}}" data-toggle="pill" href="#{{$cat->id}}" role="tab" aria-controls="v-pills-home"
                                                            aria-selected="true">

                                                        {{$cat->category_name}} 
                                                       </a>
                                                       <a  class="btn btn-danger float-left col-md-1 col-sm-2 col-xl-2" href="">
                                                            Delete
                                                       </a>
                                                       <a  class="btn btn-warning float-left col-md-1 col-sm-2 col-xl-2" href="">
                                                            Edit
                                                       </a>
                                                       <a  class="btn btn-success float-left col-md-1 col-sm-2 col-xl-2" data-toggle="modal" data-target="#exampleModa{{$cat->id}}">
                                                            Show Brands Under it 
                                                       </a>
                                                       
                                                        <div class="modal fade" id="exampleModa{{$cat->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Brands Are:</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                   @php
                                                                       $brands=App\Brand::where('product_category_id',$cat->id)->get();
                                                                      // print_r($brands);
                                                                   @endphp
                                                                   @if($brands)
                                                                        
                                                                             @foreach($brands as $brand)
                                                                             <tr>
                                                                                <td>
                                                                                    <img src="{{asset('upload/etc/'.$brand->icon)}}" style="border-radius:15%" width="40px" alt="">
                                                                                </td>
                                                                                <td>
                                                                                    <h5> {{$brand->brand_name}}</h5>
                                                                                </td>
                                                                            </tr>
                                                                            <br>
                                                                            <br>
                                                                            @endforeach

                                                                       
                                                                   
                                                                   @endif
                                                                </div>
                                                                
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                @endforeach
                                            @endif
                                        </div> <!-- end col-->
                                         <!-- end col-->
                                    </div> <!-- end row-->
                                    <div>
                                        <a class="btn btn-info btn-sm" href="{{url('admin/addCategory')}}">Add a Category</a>
                                    </div>
                                </div> <!-- end card-box-->
                            </div> <!-- end col -->
        
                           
                        </div>
                        <!-- end row -->
        
                       
                        <!-- end row -->
        
                      
                        
                    </div> <!-- container -->
@endsection
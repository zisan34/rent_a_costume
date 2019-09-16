@extends('admin.layouts.master')

@section('content')

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        @include('admin.layouts.bradcum')   
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-xl-5">
                                            @php
                                                $i=0;
                                            @endphp
                                            <div class="tab-content pt-0">
                                                @if($images)
                                                
                                                    @foreach($images as $image)
                                                        <div class="tab-pane @if($i==0) active show @endif" id="product-{{$image->id}}-item">
                                                            <img src="{{asset('upload/product/'.$image->image)}}" alt="" class="img-fluid mx-auto d-block rounded">
                                                        </div>
                                                        @php
                                                            $i++;
                                                        @endphp
                                                    @endforeach
                                                @endif
                                               
                                            </div>
                                            @php
                                                $i=0;
                                            @endphp
                                            <ul class="nav nav-pills nav-justified">
                                                @if($images)
                                                
                                                    @foreach($images as $img)
                                                            <li class="nav-item">
                                                                <a href="#product-{{$img->id}}-item" data-toggle="tab" aria-expanded="false" class="nav-link product-thumb @if($i==0)active show @endif">
                                                                    <img src="{{asset('upload/product/'.$img->image)}}" alt="" class="img-fluid mx-auto d-block rounded">
                                                                </a>
                                                            </li>
                                                            @php
                                                                $i++;
                                                            @endphp
                                                    @endforeach
                                                @endif
                                                {{-- <li class="nav-item">
                                                    <a href="#product-2-item" data-toggle="tab" aria-expanded="true" class="nav-link product-thumb">
                                                        <img src="{{asset('backend/assets/images/products/product-10.jpg')}}" alt="" class="img-fluid mx-auto d-block rounded">
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#product-3-item" data-toggle="tab" aria-expanded="false" class="nav-link product-thumb">
                                                        <img src="{{asset('backend/assets/images/products/product-11.jpg')}}" alt="" class="img-fluid mx-auto d-block rounded">
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#product-4-item" data-toggle="tab" aria-expanded="false" class="nav-link product-thumb">
                                                        <img src="{{asset('backend/assets/images/products/product-12.jpg')}}" alt="" class="img-fluid mx-auto d-block rounded">
                                                    </a>
                                                </li> --}}
                                            </ul>
                                        </div> <!-- end col -->
                                        <div class="col-xl-7">
                                            <div class="pl-xl-3 mt-3 mt-xl-0">
                                                <a href="#" class="text-primary">{{$category->category_name}}</a>
                                                <h4 class="mb-3">{{$product->product_name}}</h4>
                                                <p class="text-muted float-left mr-3">
                                                    <span class="mdi mdi-star text-warning"></span>
                                                    <span class="mdi mdi-star text-warning"></span>
                                                    <span class="mdi mdi-star text-warning"></span>
                                                    <span class="mdi mdi-star text-warning"></span>
                                                    <span class="mdi mdi-star"></span>
                                                </p>
                                                <p class="mb-4"><a href="" class="text-muted">( 36 Customer Reviews )</a></p>
                                                
                                                <h4 class="mb-4">Price : <span class="text-muted mr-2">${{$product->price}}</span> </h4>
                                                @if($product->quantity>5)
                                                <h4><span class="badge bg-soft-success text-success mb-4">Instock</span></h4>
                                                @elseif($product->quantity>2 && $product->quantity<5)
                                                 <h4><span class="badge bg-soft-warning text-warning mb-4">Hardstock</span></h4>
                                                @elseif($product->quantity<1)
                                                 <h4><span class="badge bg-soft-danger text-danger mb-4">Outstock</span></h4>
                                                @endif
                                                <p class="text-muted mb-4">{{$product->description}}</p>
                                               
                                               <div class="col-md-6 col-sm-4">
                                                    <button disabled="disabled" class="btn btn-danger">Quantity :{{$product->quantity}}</button>
                                               </div>
                                                <br>
                                                <br>
                                                <hr>
                                                <div>
                                                    <button type="button" class="btn btn-danger mr-2">Delete</button>
                                                    <a type="button" href="{{url('admin/product_edit/'.urlencode($product->unique_code))}}" class="btn btn-success waves-effect waves-light">
                                                        <span class="btn-label"></span>Edit
                                                    </a>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                    </div>
                                    <!-- end row -->


                                    <div class="table-responsive mt-4">
                                        <table class="table table-bordered table-centered mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Rent taker</th>
                                                    <th>Price</th>
                                                    <th>Taken Date</th>
                                                    <th>Given Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>ASOS Ridley Outlet - NYC</td>
                                                    <td>$139.58</td>
                                                    <td>
                                                        <div class="progress-w-percent mb-0">
                                                            <span class="progress-value">478 </span>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar bg-success" role="progressbar" style="width: 56%;" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$1,89,547</td>
                                                </tr>
                                                <tr>
                                                    <td>Marco Outlet - SRT</td>
                                                    <td>$149.99</td>
                                                    <td>
                                                        <div class="progress-w-percent mb-0">
                                                            <span class="progress-value">73 </span>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 16%;" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$87,245</td>
                                                </tr>
                                                <tr>
                                                    <td>Chairtest Outlet - HY</td>
                                                    <td>$135.87</td>
                                                    <td>
                                                        <div class="progress-w-percent mb-0">
                                                            <span class="progress-value">781 </span>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar bg-success" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$5,87,478</td>
                                                </tr>
                                                <tr>
                                                    <td>Nworld Group - India</td>
                                                    <td>$159.89</td>
                                                    <td>
                                                        <div class="progress-w-percent mb-0">
                                                            <span class="progress-value">815 </span>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar bg-success" role="progressbar" style="width: 89%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$55,781</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

@endsection
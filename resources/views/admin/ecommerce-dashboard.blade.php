@extends('admin.layouts.master')

@section('content')

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                       @include('admin.layouts.bradcum')

                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded bg-soft-primary">
                                                <i class="dripicons-wallet font-24 avatar-title text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <h3 class="text-dark mt-1">{{count($total_user)}}</h3>
                                                <p class="text-muted mb-1 text-truncate">Total User</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded bg-soft-success">
                                                <i class="dripicons-basket font-24 avatar-title text-success"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup">{{count($total_order)}}</span></h3>
                                                <p class="text-muted mb-1 text-truncate">Total Order</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded bg-soft-info">
                                                <i class="dripicons-store font-24 avatar-title text-info"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup">{{count($total_product)}}</span></h3>
                                                <p class="text-muted mb-1 text-truncate">Stores Total</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded bg-soft-warning">
                                                <i class="dripicons-user-group font-24 avatar-title text-warning"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <h3 class="text-dark mt-1"><span data-plugin="counterup">${{$total_money}}</span></h3>
                                                <p class="text-muted mb-1 text-truncate">Invoice Total</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->


             
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card-box">
                                    <h4 class="header-title mb-3">Product History</h4>

                                    <div class="table-responsive">
                                        <table class="table table-centered table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="border-top-0">Name</th>
                                                    <th class="border-top-0">Batch</th>
                                                    <th class="border-top-0">Last Rent</th>
                                                    <th class="border-top-0">Price</th>
                                                    <th class="border-top-0"> Rent rate(rent/day)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if($products)
                                                @foreach($products as $pro)
                                                <tr>
                                                    <td>
                                                        {{$pro->product_name}}
                                                    </td>
                                                    <td>
                                                        {{$pro->unique_code}}
                                                    </td>
                                                    <td>{{$pro->last_rent}}</td>
                                                    <td>${{$pro->price}}</td>
                                                    <td>
                                                        @php
                                                            $created=Carbon\Carbon::parse($pro->created_at)->format('Y-m-d');
                                                            $diff=$today->diffInDays($pro->created_at);;
                                                           // echo $diff;
                                                           $order_gain=App\Order::where('product_id',$pro->id)->count();
                                                           $val=$order_gain/$diff;
                                                        @endphp
                                                            {{$val}} %
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @endif
                                              
                                            
                                            </tbody>
                                        </table>
                                        {{ $products->links() }}
                                    </div> <!-- end table-responsive -->

                                </div> <!-- end card-box-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

@endsection

@section('script')

        <!--Morris Chart-->
        <script src="{{ URL::asset('backend/assets/libs/morris-js/morris-js.min.js')}}"></script>
        <script src="{{ URL::asset('backend/assets/libs/raphael/raphael.min.js')}}"></script>

        <!-- Dashboard init js -->
        <script src="{{ URL::asset('backend/assets/js/pages/ecommerce-dashboard.init.js')}}"></script>

@endsection
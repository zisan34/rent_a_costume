@extends('admin.layouts.master')

@section('css')
        <!-- Tablesaw css -->
        <link href="{{ URL::asset('backend/assets/libs/tablesaw/tablesaw.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                         
                        <!-- end page title --> 


                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">

                                    
                                    <table class="tablesaw table mb-0" data-tablesaw-mode="stack">
                                        <thead>
                                        <tr>
                                            <th scope="col"  >Order Batch</th>
                                            <th scope="col" >Product</th>
                                            <th scope="col" >User</th>
                                            <th scope="col" >Price</th>
                                            <th  scope="col">Start Date</th>
                                            <th  scope="col">End Date</th>
                                            <th scope="col"  >At</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @if($orders)
                                                @foreach($orders as $order)
                                                @php
                                                    $product=App\Product::find($order->product_id);
                                                    $user=App\User::find($order->user_id);
                                                @endphp
                                                <tr>
                                                    <td>{{$order->order_batch}}</td>
                                                    <td>{{$product->product_name}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$product->price}}</td>
                                                    <td>{{$order->start_date}}</td>
                                                    <td>{{$order->end_date}}</td>
                                                    <td>{{$order->created_at}}</td>
                                                </tr>
                                                @endforeach
                                           @endif
                                       
                                   
                                        </tbody>
                                        {{ $orders->links() }}
                                    </table>
                                </div> <!-- end card-box-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                     
                        <!-- end row -->


                       
                        <!-- end row -->


                        <!-- end row -->


                      
                        <!-- end row -->


                        <!-- end row -->


                        <!-- end row -->
                        
                    </div> <!-- container -->
@endsection

@section('script')

        <!-- Tablesaw js -->
        <script src="{{ URL::asset('assets/libs/tablesaw/tablesaw.min.js')}}"></script>

        <!-- Init js -->
        <script src="{{ URL::asset('assets/js/pages/tablesaw.init.js')}}"></script>

@endsection
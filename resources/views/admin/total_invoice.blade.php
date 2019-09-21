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
                                            <th scope="col"  >Invoice No</th>
                                            <th scope="col"  >Title</th>
                                            <th scope="col" >Transection ID.</th>
                                            <th scope="col" >Payer Email</th>
                                            <th scope="col" >Payer Name</th>
                                            <th  scope="col">Invoice ID.</th>
                                            <th  scope="col">Price</th>
                                           
                                            <th scope="col"  >At</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @if($invoices)
                                                @foreach($invoices as $invoice)
                                               
                                                <tr>
                                                    <td>{{$invoice->id}}</td>
                                                    <td>{{$invoice->title}}</td>
                                                    <td>{{$invoice->transection_id}}</td>
                                                    <td>{{$invoice->payer_email}}</td>
                                                    <td>{{$invoice->payer_name}}</td>
                                                    <td>{{$invoice->invoice_id}}</td>
                                                    <td>{{$invoice->price}}</td>
                                                    <td>{{$invoice->created_at}}</td>
                                                </tr>
                                                @endforeach
                                           @endif
                                       
                                   
                                        </tbody>
                                        {{ $invoices->links() }}
                                    </table>
                                </div> <!-- end card-box-->
                            </div> <!-- end col -->
                        </div>
                       
                        
                    </div> <!-- container -->
@endsection

@section('script')

        <!-- Tablesaw js -->
        <script src="{{ URL::asset('backend/assets/libs/tablesaw/tablesaw.min.js')}}"></script>

        <!-- Init js -->
        <script src="{{ URL::asset('backend/assets/js/pages/tablesaw.init.js')}}"></script>

@endsection
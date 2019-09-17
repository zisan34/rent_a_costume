@extends('admin.layouts.master')
@section('css')
        <!-- third party css -->
        <link href="{{ URL::asset('backend/assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- third party css end -->
@endsection
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
                    <h4 class="header-title mb-4">Brands</h4>

                    <div class="row">
                        <div class="col-sm-12 col-xl-12 col-md-12">
                            <table id="brand-table">
                                <thead>
                                    <th>Id</th>
                                    <th>Icon</th>
                                    <th>Brand Name</th>
                                    <th>Category</th>
                                    <th>Created at</th>
                                    <th>updated at</th>
                                    <th>Action</th>
                                </thead>

                            </table>
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

@section('script')

        <!-- third party js -->
        <script src="{{ URL::asset('backend/assets/libs/datatables/datatables.min.js')}}"></script>
        <script src="{{ URL::asset('backend/assets/libs/pdfmake/pdfmake.min.js')}}"></script>
        <!-- third party js ends -->

        <!-- Datatables init -->
        <script src="{{ URL::asset('backend/assets/js/pages/datatables.init.js')}}"></script>
         <script>
     $('#brand-table').DataTable({
        processing: true,
        serverSide: true,
       // ajax: '{{url('admin/getBrandajx')}}',
         ajax: '{!! route('get_brand_show') !!}',
        columns: [
            {data: 'id', name: 'id'},
             {data: 'icon', name: 'icon'},
            {data: 'brand_name', name: 'brand_name'},
           
            {data: 'product_category_id', name: 'product_category_id'},
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' },
            {data: 'action', name: 'action'}
        ]
    });
    </script>

@endsection
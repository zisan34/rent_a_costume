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
                            <table class="table">
                                <thead>
                                    <th>Product Code</th>
                                    <th>Product Name</th>
                                    <th>Product Price</th>
                                </thead>
                                <tbody>
                                    @if($products)
                                    @foreach($products as $pro)
                                        <tr>
                                            <td>
                                                {{$pro->unique_code}}
                                            </td>
                                            <td>
                                                {{$pro->product_name}}
                                            </td>
                                            <td>
                                                {{$pro->price}}
                                            </td>
                                        </tr>
                                        @php
                                            $com_pro=DB::table('comments')->where('commentable_id',$pro->id)->get();
                                        @endphp
                                        @if($com_pro)
                                        <table class="table">
                                            <thead>
                                                <th></th>
                                                <th></th>
                                                <th>Commentator</th>
                                                <th>Rating</th>
                                                <th>Comment</th>
                                                <th>Time</th>
                                            </thead>
                                            <tbody>
                                                @foreach($com_pro as $cp)
                                                @php
                                                    $com_user=App\User::find($cp->commented_id);
                                                @endphp
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td>
                                                            {{$com_user->name}}
                                                            <i>{{$com_user->email}}</i>
                                                        </td>
                                                        <td>
                                                            {{$cp->rate}}
                                                        </td>
                                                        <td>
                                                            {{$cp->comment}}
                                                        </td>
                                                        <td>
                                                            {{$cp->created_at}}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <br>
                                        <br>
                                        <hr>
                                           
                                        @endif
                                    @endforeach
                                    @endif
                                </tbody>
                                {{ $products->links() }}
                            </table>
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
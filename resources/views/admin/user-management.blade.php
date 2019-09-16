@extends('admin.layouts.master')

@section('css')
        <!-- Custom box css -->
        <link href="{{ URL::asset('backend/assets/libs/custombox/custombox.min.css')}}" rel="stylesheet">
@endsection

@section('content')

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                                            <li class="breadcrumb-item active">Contacts</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Contacts</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 


                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">                
                                        <div class="table-responsive">
                                            <table class="table table-centered table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Phone</th>
                                                        <th>Email</th>
                                                        <th>Country</th>
                                                        <th>City</th>
                                                        <th>Gender</th>
                                                        <th>Status</th>
                                                        <th>IP</th>
                                                        <th>URL</th>
                                                        <th style="width: 82px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($users as $user)
                                                    <tr>
                                                        <td class="table-user">
                                                            <img src="{{ asset('$user->image') }}" alt="table-user" class="mr-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">{{$user->name}}</a>
                                                        </td>
                                                        <td>
                                                            {{$user->phone}}
                                                        </td>
                                                        <td>
                                                            {{$user->email}}
                                                        </td>
                                                        <td>
                                                            {{$user->country->country}}
                                                        </td>
                                                        <td>
                                                            {{$user->city->city}}
                                                        </td>
                                                        <td>
                                                            {{$user->gender}}
                                                        </td>
                                                        <td>
                                                            @if($user->status)
                                                            Active
                                                            @else
                                                            Disabled
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @isset($user->userTraffic)
                                                            {{$user->userTraffic->user_ip}}
                                                            @endisset
                                                        </td>
                                                        <td>
                                                            @isset($user->userTraffic) 
                                                            {{$user->userTraffic->url}}
                                                            @endisset
                                                        </td>
                                                        <td>                                                        
                                                            @if($user->status)
                                                            <a href="{{ route('user.disable',['id'=>encrypt($user->id)]) }}" class="btn btn-sm btn-danger">Disable</a>
                                                            @else
                                                            <a href="{{ route('user.enable',['id'=>encrypt($user->id)]) }}" class="btn btn-sm btn-success">Enable</a>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    
                                                </tbody>
                                            </table>
                                        </div>

                                        {{-- <ul class="pagination pagination-rounded justify-content-end mb-0 mt-2">
                                            <li class="page-item">
                                                <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                                    <span aria-hidden="true">«</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                                    <span aria-hidden="true">»</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul> --}}

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->




@endsection

@section('script')

        <!-- Modal-Effect -->
        <script src="{{ URL::asset('backend/assets/libs/custombox/custombox.min.js')}}"></script>

@endsection
@extends('admin.layouts.master')

@section('css')
        <!-- Summernote css -->
        <link href="{{ URL::asset('backend/assets/libs/summernote/summernote.min.css')}}" rel="stylesheet" />
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Email</a></li>
                                            <li class="breadcrumb-item active">Compose</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Email Compose</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <!-- Right Sidebar -->
                        <div class="row">
                            <div class="col-lg-12">
                                {{-- <div class="card-box"> --}}
                                    <!-- Left sidebar -->
                                    {{-- <div class="inbox-leftbar">

                                        <a href="email-inbox" class="btn btn-danger btn-block waves-effect waves-light">Inbox</a>

                                        <div class="mail-list mt-4">
                                            <a href="#" class="list-group-item border-0 text-danger font-weight-bold"><i class="mdi mdi-inbox font-18 align-middle mr-2"></i>Inbox<span class="badge badge-danger float-right ml-2 mt-1">8</span></a>
                                            <a href="#" class="list-group-item border-0"><i class="mdi mdi-star font-18 align-middle mr-2"></i>Starred</a>
                                            <a href="#" class="list-group-item border-0"><i class="mdi mdi-file-document-box font-18 align-middle mr-2"></i>Draft<span class="badge badge-info float-right ml-2 mt-1">32</span></a>
                                            <a href="#" class="list-group-item border-0"><i class="mdi mdi-send font-18 align-middle mr-2"></i>Sent Mail</a>
                                            <a href="#" class="list-group-item border-0"><i class="mdi mdi-delete font-18 align-middle mr-2"></i>Trash</a>
                                        </div>

                                        <h6 class="mt-4">Labels</h6>

                                        <div class="list-group b-0 mail-list">
                                            <a href="#" class="list-group-item border-0"><span class="mdi mdi-circle text-info mr-2"></span>Web App</a>
                                            <a href="#" class="list-group-item border-0"><span class="mdi mdi-circle text-warning mr-2"></span>Recharge</a>
                                            <a href="#" class="list-group-item border-0"><span class="mdi mdi-circle text-dark mr-2"></span>Wallet Balance</a>
                                            <a href="#" class="list-group-item border-0"><span class="mdi mdi-circle text-primary mr-2"></span>Friends</a>
                                            <a href="#" class="list-group-item border-0"><span class="mdi mdi-circle text-success mr-2"></span>Family</a>
                                        </div>

                                    </div> --}}
                                    <!-- End Left sidebar -->

                                    {{-- <div class="inbox-rightbar"> --}}

                                        {{-- <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-light waves-effect"><i class="mdi mdi-archive font-18"></i></button>
                                            <button type="button" class="btn btn-sm btn-light waves-effect"><i class="mdi mdi-alert-octagon font-18"></i></button>
                                            <button type="button" class="btn btn-sm btn-light waves-effect"><i class="mdi mdi-delete-variant font-18"></i></button>
                                        </div> --}}
                                        {{-- <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-light dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-folder font-18"></i>
                                                <i class="mdi mdi-chevron-down"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <span class="dropdown-header">Move to</span>
                                                <a class="dropdown-item" href="javascript: void(0);">Social</a>
                                                <a class="dropdown-item" href="javascript: void(0);">Promotions</a>
                                                <a class="dropdown-item" href="javascript: void(0);">Updates</a>
                                                <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                                            </div>
                                        </div> --}}
                                        {{-- <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-light dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-label font-18"></i>
                                                <i class="mdi mdi-chevron-down"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <span class="dropdown-header">Label as:</span>
                                                <a class="dropdown-item" href="javascript: void(0);">Updates</a>
                                                <a class="dropdown-item" href="javascript: void(0);">Social</a>
                                                <a class="dropdown-item" href="javascript: void(0);">Promotions</a>
                                                <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                                            </div>
                                        </div>

                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-light dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal font-18"></i> More
                                                <i class="mdi mdi-chevron-down"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <span class="dropdown-header">More Option :</span>
                                                <a class="dropdown-item" href="javascript: void(0);">Mark as Unread</a>
                                                <a class="dropdown-item" href="javascript: void(0);">Add to Tasks</a>
                                                <a class="dropdown-item" href="javascript: void(0);">Add Star</a>
                                                <a class="dropdown-item" href="javascript: void(0);">Mute</a>
                                            </div>
                                        </div> --}}

                                        <div class="mt-4">
                                            <form method="post" action="{{ route('email.custom.send') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" placeholder="To" value="@isset($email){{$email}}@endisset">
                                                    <div class="alert-danger">{{$errors->first('email')}}</div>
                                                </div>
        
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="subject" placeholder="Subject" value="">
                                                    <div class="alert-danger">{{$errors->first('subject')}}</div>

                                                </div>
                                                <div class="form-group">

                                                    <textarea class="form-control" id="summernote" name="message"  overlay="auto"></textarea>
                                                    <div class="alert-danger">{{$errors->first('message')}}</div>

                                                </div>
        
                                                <div class="form-group m-b-0">
                                                    <div class="text-right">
                                                        {{-- <button type="button" class="btn btn-success waves-effect waves-light m-r-5"><i class="mdi mdi-content-save-outline"></i></button> --}}
                                                        {{-- <button type="button" class="btn btn-success waves-effect waves-light m-r-5"><i class="mdi mdi-delete"></i></button> --}}
                                                        
                                                        <input type="submit" value="Send" class="btn btn-primary waves-effect waves-light">

                                                    </div>
                                                </div>
        
                                            </form>
                                        </div> <!-- end card-->
            
                                    {{-- </div>  --}}
                                    <!-- end inbox-rightbar-->

                                    <div class="clearfix"></div>
                                </div>

                            {{-- </div>  --}}
                            <!-- end Col -->

                        </div><!-- End row -->
                        
                    </div> <!-- container -->

@endsection

@section('script')

        <!--Summernote js-->
        <script src="{{ URL::asset('backend/assets/libs/summernote/summernote.min.js')}}"></script>

        <script>
            jQuery(document).ready(function(){
                $('#summernote').summernote({
                    placeholder: 'Write your message here.',
                    height: 230,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false ,                // set focus to editable area after initializing summernote
                      toolbar: [
                          ['style', ['style']],
                          ['font', ['bold', 'underline', 'clear']],
                          ['fontname', ['fontname']],
                          ['fontsize', ['fontsize']],
                          ['color', ['color']],
                          ['para', ['ul', 'ol', 'paragraph']],
                          ['table', ['table']],
                          ['insert', ['link', 'picture']],
                          ['view', ['fullscreen', 'help']]
                    ]
                });
            });
        </script>

@endsection
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
                                

                                        <div class="mt-4">
                                            <form method="post" action="{{ route('email.multiple.send') }}">
                                                @csrf
                                            

                                            <input type="checkbox" onClick="toggle(this)" /> Select All<br/>
                                                <div class="row">
                                                    @foreach($users as $user)
                                                    <div class="col-lg-2">
                                                        <div class="text-center">
                                                            <div class="pt-2 pb-2">
                                                                <h4 class="mt-3"><a href="extras-profile" class="text-dark">{{$user->name}}</a></h4>
                                                                <p></span><strong>Email:</strong> <span> <a href="#" class="text-pink">{{$user->email}}</a> </span></p>
                                                                <input type="checkbox" name="email[]" value="{{$user->email}}">
                                                            </div> <!-- end .padding -->
                                                        </div> <!-- end card-box-->
                                                    </div> <!-- end col -->

                                                    @endforeach
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
                                                        
                                                        <input type="submit" value="Send" class="btn btn-primary waves-effect waves-light">

                                                    </div>
                                                </div>
        
                                            </form>
                                        </div> <!-- end card-->

                                    <div class="clearfix"></div>
                                </div>
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

        <script>
        function toggle(source) {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i] != source)
                checkboxes[i].checked = source.checked;
        }
        }
        </script>

@endsection
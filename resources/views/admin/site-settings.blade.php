@extends('admin.layouts.master')

@section('css')
        <!-- Plugin css -->
        <link href="{{ URL::asset('backend/assets/libs/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet" type="text/css" />
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
                                    <h4 class="page-title">Site Settings</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        <div class="row">
                            <div class="col-12">
                              @include('inc.errors')
                                <form method="post" action="{{route('siteSettings.update')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                      <div class="col-md-12"></div>
                                      <div class="form-group col-md-12">
                                        <label><strong>Website Name:</strong></label>
                                        <input type="text" class="form-control" name="w_name" value="@isset($settings->w_name){{$settings->w_name}}@endisset">
                                      </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"></div>
                                        <div class="form-group col-md-12">
                                        <strong>Website Email:</strong>  
                                        <input class="date form-control"  type="text" name="w_email"  value="@isset($settings->w_email){{$settings->w_email}}@endisset">
                                        </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12"></div>
                                      <div class="form-group col-md-12">
                                        <label><strong>Website Address:</strong></label>
                                        <input type="text" class="form-control" name="w_address" value="@isset($settings->w_address){{$settings->w_address}}@endisset">
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12"></div>
                                      <div class="form-group col-md-12">
                                        <label><strong>Website Phone:</strong></label>
                                        <input type="text" class="form-control" name="w_phone" value="@isset($settings->w_phone){{$settings->w_phone}}@endisset">
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12"></div>
                                      <div class="form-group col-md-12">
                                        <label><strong>Facebook Link:</strong></label>
                                        <input type="url" class="form-control" name="w_facebook" value="@isset($settings->w_facebook){{$settings->w_facebook}}@endisset">
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12"></div>
                                      <div class="form-group col-md-12">
                                        <label><strong>Youtube Link:</strong></label>
                                        <input type="url" class="form-control" name="w_youtube" value="@isset($settings->w_youtube){{$settings->w_youtube}}@endisset">
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12"></div>
                                      <div class="form-group col-md-12">
                                        <label><strong>Twitter Link:</strong></label>
                                        <input type="url" class="form-control" name="w_twitter" value="@isset($settings->w_twitter){{$settings->w_twitter}}@endisset">
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12"></div>
                                      <div class="form-group col-md-12">
                                        <label><strong>Website Copyright:</strong></label>
                                        <input type="text" class="form-control" name="copyright" value="@isset($settings->copyright){{$settings->copyright}}@endisset">
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12"></div>
                                      <div class="form-group col-md-12">
                                        <label><strong>Website Logo:</strong></label>
                                        @isset($settings->w_logo)<img src="{{ asset($settings->w_logo) }}" height="20px">@endisset
                                        <input type="file" name="w_logo" placeholder="choose new logo">
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12"></div>
                                      <div class="form-group col-md-12">
                                        <label><strong>Website Image:</strong></label>
                                        @isset($settings->w_image)<img src="{{ asset($settings->w_image) }}" height="20px">@endisset
                                        <input type="file" name="w_image">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                        <label><strong>About Us:</strong></label>
                                        <textarea class="form-control summernote" id="summernote" name="w_about"  overlay="auto">{!!$settings->w_about!!}</textarea>
                                        <div class="alert-danger">{{$errors->first('about')}}</div>

                                    </div>
                                    <div class="form-group">
                                        <label><strong>Our Mission:</strong></label>
                                        <textarea class="form-control summernote" id="summernote" name="w_mission"  overlay="auto">{!!$settings->w_about!!}</textarea>
                                        <div class="alert-danger">{{$errors->first('mission')}}</div>

                                    </div>
                                    <div class="row">
                                      <div class="col-md-12"></div>
                                      <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-success">Update Settings</button>
                                      </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div> <!-- container -->

@endsection

@section('script')

        <!-- plugin js -->
        <script src="{{ URL::asset('backend/assets/libs/moment/moment.min.js')}}"></script>
        <script src="{{ URL::asset('backend/assets/libs/jquery-ui/jquery-ui.min.js')}}"></script>


        <!--Summernote js-->
        <script src="{{ URL::asset('backend/assets/libs/summernote/summernote.min.js')}}"></script>

        <script>
            jQuery(document).ready(function(){
                $('.summernote').summernote({
                    placeholder: 'Write your message here.',
                    height: 200,                 // set editor height
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
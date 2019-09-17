@extends('admin.layouts.master')

@section('css')
        <!-- Plugin css -->
        <link href="{{ URL::asset('backend/assets/libs/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet" type="text/css" />
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


@endsection
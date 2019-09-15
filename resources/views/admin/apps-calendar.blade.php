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
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                            <li class="breadcrumb-item active">Calendar</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Calendar</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        <div class="row">
                            <div class="col-12">
                                <form method="post" action="{{route('event.add')}}">
                                    @csrf
                                    <div class="row">
                                      <div class="col-md-12"></div>
                                      <div class="form-group col-md-12">
                                        <label for="Title"><strong>Title:</strong></label>
                                        <input type="text" class="form-control" name="title">
                                      </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"></div>
                                        <div class="form-group col-md-12">
                                        <strong> Description(optional): </strong>  
                                        <input class="date form-control"  type="text" id="description" name="description">
                                        </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12"></div>
                                      <div class="form-group col-md-12">
                                        <strong> Start Date : </strong>  
                                        <input class="date form-control"  type="date" id="startdate" name="startdate">   
                                     </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12"></div>
                                      <div class="form-group col-md-12">
                                        <strong> End Date : </strong>  
                                        <input class="date form-control"  type="date" id="enddate" name="enddate">   
                                     </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12"></div>
                                      <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-success">Add Event</button>
                                      </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                {!! $calendar->calendar() !!}
                            </div>
                            <!-- end col-12 -->
                        </div> <!-- end row -->
                        
                    </div> <!-- container -->

@endsection

@section('script')

        <!-- plugin js -->
        <script src="{{ URL::asset('backend/assets/libs/moment/moment.min.js')}}"></script>
        <script src="{{ URL::asset('backend/assets/libs/jquery-ui/jquery-ui.min.js')}}"></script>
        <script src="{{ URL::asset('backend/assets/libs/fullcalendar/fullcalendar.min.js')}}"></script>

        <!-- Calendar init -->
        {{-- <script src="{{ URL::asset('backend/assets/js/pages/calendar.init.js')}}"></script> --}}

        {!!$calendar->script()!!}

@endsection
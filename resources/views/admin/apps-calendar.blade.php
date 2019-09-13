@extends('admin.layouts.master')

@section('css')
        <!-- Plugin css -->
        {{-- <link href="{{ URL::asset('backend/assets/libs/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet" type="text/css" /> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

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
        {{-- <script src="{{ URL::asset('backend/assets/libs/fullcalendar/fullcalendar.min.js')}}"></script> --}}

        <!-- Calendar init -->
        {{-- <script src="{{ URL::asset('backend/assets/js/pages/calendar.init.js')}}"></script> --}}

        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>

        {!! $calendar->script() !!}



@endsection
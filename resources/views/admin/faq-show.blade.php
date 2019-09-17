@extends('admin.layouts.master')

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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Extras</a></li>
                                            <li class="breadcrumb-item active">FAQs</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">View FAQ</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->
                        
                        <!-- Right Sidebar -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mt-4">
                                    <form method="post" action="{{ route('faq.add') }}">
                                        @csrf
                                        <input type="hidden" value="{{$faq->id}}" name="faq_id">
                                        <div class="form-group">
                                            <select class="form-control" name="faq_category" placeholder="Subject">
                                                <option disabled>--Select Category--</option>
                                                @foreach($faqCategories as $faqCategory)
                                                <option value="{{$faqCategory->id}}"@if($faqCategory->id==$faq->faq_category_id)selected @endif>{{$faqCategory->title}}</option>
                                                @endforeach
                                            </select>
                                            <div class="alert-danger">{{$errors->first('faq_category')}}</div>

                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="question" placeholder="Question" value="{{$faq->question}}">
                                            <div class="alert-danger">{{$errors->first('question')}}</div>

                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="answer" placeholder="Answer" value="{{$faq->answer}}">
                                            <div class="alert-danger">{{$errors->first('answer')}}</div>

                                        </div>

                                        <div class="form-group m-b-0">
                                                
                                                <input type="submit" value="Update FAQ" class="btn btn-primary waves-effect waves-light">
                                                <a href="{{ route('faq.delete',['id'=>$faq->id]) }}" class="btn btn-danger float-right waves-effect waves-light">Delete Faq</a>

                                        </div>

                                    </form>
                                </div> <!-- end card-->
                            </div>
                        </div><!-- End row -->
                        
                        <!-- end row -->

                        
                    </div> <!-- container -->

@endsection
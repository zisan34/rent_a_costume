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
                                    <h4 class="page-title">FAQs</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->
                        
                        
                        {{-- <div class="row">
                            <div class="col-12">
                                <div class="text-center">
                                    <i class="h1 mdi mdi-comment-multiple-outline text-muted"></i>
                                    <h3 class="mb-3">Frequently Asked Questions</h3>
                                    <p class="text-muted"> Nisi praesentium similique totam odio obcaecati, reprehenderit,
                                        dignissimos rem temporibus ea inventore alias!<br/> Beatae animi nemo ea
                                        tempora, temporibus laborum facilis ut!</p>

                                    <button type="button" class="btn btn-success waves-effect waves-light mt-2 mr-1"><i class="mdi mdi-email-outline mr-1"></i> Email us your question</button>
                                    <button type="button" class="btn btn-primary waves-effect waves-light mt-2"><i class="mdi mdi-twitter mr-1"></i> Send us a tweet</button>

                                </div>
                            </div><!-- end col -->
                        </div> --}}<!-- end row -->

    
                        <!-- end page title --> 

                        <!-- Right Sidebar -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mt-4">
                                    <form method="post" action="{{ route('faq.add') }}">
                                        @csrf

                                        <div class="form-group">
                                            <select class="form-control" name="faq_category" placeholder="Subject">
                                                <option disabled selected>--Select Category--</option>
                                                @foreach($faqCategories as $faqCategory)
                                                <option value="{{$faqCategory->id}}">{{$faqCategory->title}}</option>
                                                @endforeach
                                            </select>
                                            <div class="alert-danger">{{$errors->first('faq_category')}}</div>

                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="question" placeholder="Question">
                                            <div class="alert-danger">{{$errors->first('question')}}</div>

                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="answer" placeholder="Answer">
                                            <div class="alert-danger">{{$errors->first('answer')}}</div>

                                        </div>

                                        <div class="form-group m-b-0">
                                            <div class="text-right">
                                                
                                                <input type="submit" value="Add new FAQ" class="btn btn-primary waves-effect waves-light">

                                            </div>
                                        </div>

                                    </form>
                                </div> <!-- end card-->
                            </div>
                        </div><!-- End row -->
                        


                        <div class="row pt-5">
                            @foreach($faqCategories as $faqCategory)
                            <div class="col-lg-5 offset-lg-1">
                                <!-- Question/Answer -->
                                <h2>Categoty:{{$faqCategory->title}}</h2>
                                @foreach($faqCategory->faqs as $faq)
                                <div>
                                    <div class="faq-question-q-box">Q.</div>
                                    <h4 class="faq-question" data-wow-delay=".1s"><a href="{{ route('faq.show',['id'=>$faq->id]) }}">{{$faq->question}}</a></h4>
                                    <p class="faq-answer mb-4">{{$faq->answer}}</p>
                                </div> 
                                @endforeach       
                            </div>
                            @endforeach
                            <!--/col-md-5 -->
        

                            <!--/col-md-5-->
                        </div>
                        <!-- end row -->

                        
                    </div> <!-- container -->

@endsection
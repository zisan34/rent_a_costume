@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="panel-group ct-u-marginBottom40" id="accordion" role="tablist" aria-multiselectable="true">        
        @php
            $i=0;
        @endphp
        @foreach($faqCategories as $faqCategory)
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$i}}" aria-expanded="@if($i==0)true @else false @endif" aria-controls="collapseOne" class="@if($i!=0) collapsed @endif">
                        <i class="fa fa-circle ct-u-size4 ct-u-verticalMiddle ct-u-paddingRight5"></i> {{$faqCategory->title}}
                    </a>
                </h4>
            </div>
            <div id="collapse{{$i}}" class="panel-collapse collapse @if($i==0) in @endif" role="tabpanel" aria-labelledby="headingOne" aria-expanded="true" style="">
                @foreach($faqCategory->faqs as $faq)
                <div class="panel-body">
                    <ul>
                    <li>
                        <h4>{{$faq->question}}</h4>
                    </li>
                    <p>{{$faq->answer}}</p>
                    </ul>
                    
                </div>
                @endforeach
            </div>
        </div>
        @php
            $i++;
        @endphp
        @endforeach
    </div>
</div>

@endsection

@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop40">{{$query->title}}</h4>
            <div class="ct-blogBox ct-u-paddingTop30">
                @isset($query->image)
                <div class="ct-blogBox-image ct-u-paddingBottom25">
                    <img src="{{ asset($query->image) }}" alt="Picture 1">
                </div>
                @endisset
                <div class="ct-blogDescription ct-u-size15 ct-u-paddingTop15">
                    <div class="pull-left ct-blogDescription-posted">
                        <span><i class="fa fa-pencil fa-fw"></i>  Posted by: <a href="#">{{$query->user->name}}</a></span>
                        <span class="ct-u-paddingLeft15"><i class="fa fa-calendar fa-fw"></i>{{$query->created_at->toDayDateTimeString()}}</span>
                    </div>
                    <div class="pull-right ct-blogDescription-comments">
                        <span><i class="fa fa-comments fa-fw"></i>  <a href="#">{{count($query->replies)}}</a></span>
                    </div>
                    <div class="clearfix"></div>
                    <p class="text-justify ct-u-paddingTop20 ct-u-size16">
                        {{$query->description}}
                    </p>
                </div>
            </div>
            @if(count($query->replies)>0)
            @foreach($query->replies as $reply)
            <div class="ct-blogComment">
                <p class="ct-u-size16 ct-u-paddingBottom15 ct-u-paddingTop30">{{$reply->reply}}</p>
                <hr>
                <div class="@if($reply->user==Auth::user()) pull-right @else pull-left @endif ct-u-paddingBoth10 ct-u-size15">
                    <span><i class="fa fa-pencil fa-fw"></i>  Posted by: <a href="#">{{$reply->user->name}}</a></span>
                    <span class="ct-u-paddingLeft15"><i class="fa fa-calendar fa-fw"></i>  {{$reply->created_at->toDayDateTimeString()}}</span>
                </div>
                <div class="clearfix"></div>
                <hr>
            </div>
            @endforeach
            @endif
            <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop40">Post a New Comment</h4>
            <form action="{{ route('support.comment') }}" method="post">
                @csrf
                <input type="hidden" name="query_id" value="{{encrypt($query->id)}}">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="reply" class=" control-label">Your Comment*:</label>
                            <div class="">
                                <textarea id="reply" name="reply" class="form-control" rows="6" required></textarea>
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group">
                                <div class="">
                                    <button type="submit" class="btn btn-default">
                                        Submit <i class="fa fa-long-arrow-right fa-fw"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop50">Facing problem? <span class="ct-u-colorGrey">Get support right now</span></h4>
            <div class="ct-u-size16 ct-fw-700 ct-u-paddingBottom20 ct-u-paddingTop30">It's Easy...</div>
            <form method="POST" action="{{ route('support.store') }}" class="form-horizontal ct-u-paddingBottom20" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Title: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" name="title">

                        @error('title')
                            <span class="alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                </div>                
                <div class="form-group">
                    <label for="description" class="col-sm-2 control-label">Description: </label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="description" name="description"></textarea> 

                        @error('description')
                            <span class="alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                </div>
                <div class="form-group">
                    <label for="image" class="col-sm-2 control-label">Screenshot(optional):</label>
                    <div class="col-sm-10">
                        <input type="file"  name="image" class="form-control">

                        @error('image')
                            <span class="alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>

    @isset($queries)
    @if(count($queries)>0)
    <div class="row">
        <div class="container">
                <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 ct-u-paddingTop50 text-left">Previously Asked Questions</h4>
                <div class="panel-group ct-u-marginBottom40" role="tablist" aria-multiselectable="true">
                    @foreach($queries as $query)

                    <div class="panel-group ct-u-marginBottom40" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a data-parent="#accordion" href="{{ route('support.show',['id'=>encrypt($query->id)]) }}" aria-expanded="false" aria-controls="collapseOne">
                                        <i class="fa fa-circle ct-u-size4 ct-u-verticalMiddle ct-u-paddingRight5"></i> {{$query->title}}
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
    </div>
    @endif
    @endisset
</div>

@endsection

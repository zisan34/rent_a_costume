@extends('layouts.app')

@section('content')
    
<div class="container">
<div class="ct-contentWrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop50">About Us</h4>
                        {!!$siteSettings->w_about!!}
                    </div>
                </div>



            </div>
        </div>
</div>

@endsection

@extends('layouts.app')
@php
    //  $all_products=App\Product::paginate(10);
    //     $all_brands=App\Brand::paginate(10);
    //     $all_category=App\ProductCategory::paginate(10);
@endphp
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop50">Already a Member? <span class="ct-u-colorGrey">Login</span></h4>
            <div class="ct-u-size16 ct-fw-700 ct-u-paddingBottom20 ct-u-paddingTop30">It's Easy...</div>
            <form method="POST" action="{{ route('login') }}" class="form-horizontal ct-u-paddingBottom20">
                @csrf
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email">

                        @error('email')
                            <span class="alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Password:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password">

                        @error('password')
                            <span class="alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="pull-left ct-rememberPassword">
                            <div class="checkbox">
                                <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">
                                    <span class="ct-rememberPassword-text ct-u-size14 ct-u-colorGrey">Remember my password</span>
                                </label>
                            </div>
                        </div>
                        <div class="pull-right ct-forgotPassword">
                            {{-- <a href="lost-password.html" class="ct-forgotPassword-text">Lost your Password?</a> --}}
                            @if (Route::has('password.request'))
                                <a class="ct-forgotPassword-text" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">
                            Login <i class="fa fa-long-arrow-right fa-fw"></i>
                        </button>
                    </div>
                </div>
            </form>
            <div class="form-group">
                <div for="password" class="col-sm-2"></div>
                <div class="col-sm-10">

                <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop50">Or</h4>
                <a href="{{ route('register') }}" class="btn btn-default"> Create an account</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

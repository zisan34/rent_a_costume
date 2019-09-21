
@extends('layouts.app')

@section('content')
    
<div class="ct-preloader"><div class="ct-preloader-content"></div></div>
 

    <div id="ct-js-wrapper" class="ct-pageWrapper">
       
         <form action="{{url('edit_my_profile')}}" method="POST" enctype="multipart/form-data">
@csrf
            <div class="ct-contentWrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop50">My Account</h4>
                           
                            <div class="card">
                                @if($user_image)
                                <img src="{{asset('upload/user/'.$user_image->image)}}" alt="">
                                <h6>Change Image</h6>
                                    <input type="file" name="image" class="form-control">
                                @else 
                                <img src="{{asset('upload/user/default.png')}}" alt="">
                                <h6>Change Image</h6>
                                    <input type="file" name="image" class="form-control">
                                @endif
                            </div>
                            <div class="ct-u-size16 ct-u-paddingBottom20 ct-u-paddingTop30">Hello
                                <input type="text" class="form-control" name="name" value="{{$me->name}}"> 

                                <input type="text" class="form-control" disabled value="{{$me->email}}"> 
                            </div>
                            <div class="ct-u-size16 ct-u-paddingBottom30">
                                <label for="">Address</label>
                                <input type="text" class="form-control" disabled name="ciry" value="{{$city->city}}">
                                <br>
                                <input type="text" class="form-control" disabled name="country" value="{{$country->country}}">
                            </div>

                            <div class="ct-accountBookmark ct-u-paddingBottom30">
                                <h5 class="ct-u-size18 ct-u-colorLightGrey ct-u-paddingBottom10">Status</h5>
                                <div class="ct-u-size16">
                                    @if($me->status==1)
                                      
                                        <i class="badge badge-success">Active</i>
                                    @else 
                                       <i class="badge badge-danger">Inactive</i>
                                    @endif
                                </div>
                            </div>
                            <div class="ct-accountBookmark ct-u-paddingBottom30">
                               
                                <div class="ct-u-size16">Phone</div>
                                <div class="ct-u-paddingTop10">
                                   <input type="number" class="form-control" class="" name="phone" value="{{$me->phone}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success">
                            </div>

                           
                            
                        </div>
                 
                    </div>
                </div>

                <!-- PreFOOTER -->


            <!-- FOOTER -->

        </div>
        </form>
    </div>
@endsection
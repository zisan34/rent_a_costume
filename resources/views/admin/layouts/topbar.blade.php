<!-- Topbar Start -->
<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-right mb-0">

       @php
           $iam=Auth::user();
             if($iam){
                  $i_image=App\Image::where('type','App\User')->where('type_id',$iam->id)->first();
             }
       @endphp
        

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                 @if($i_image)
                            <img src="{{asset('upload/user/'.$i_image->image)}}" width="20px" style="bordar-radius:20%;" alt="">
                            @else 
                             <img src="{{asset('upload/user/default.png')}}" width="20px" style="bordar-radius:20%;" alt="">
                            @endif
                <span class="pro-user-name ml-1">
                    {{$user->name}} <i class="mdi mdi-chevron-down"></i> 
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <!-- item-->
                <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome !</h6>
                </div>

                <!-- item-->
                <a href="{{url('myprofile')}}" class="dropdown-item notify-item">
                    <i class="fe-user"></i>
                    <span>My Account</span>
                </a>
\

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-lock"></i>
                    <span>Lock Screen</span>
                </a>

                <div class="dropdown-divider"></div>

                <!-- item-->
                <a href="{{url('logout')}}" class="dropdown-item notify-item">
                    <i class="fe-log-out"></i>
                    <span>Logout</span>
                </a>

            </div>
        </li>

        <li class="dropdown notification-list">
            <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                <i class="fe-settings noti-icon"></i>
            </a>
        </li>


    </ul>

    <!-- LOGO -->
    <div class="logo-box">
        <a href="{{ route('home') }}" class="logo text-center">
            <span class="logo-lg">
                <img src="{{ asset($siteSettings->w_logo) }}" alt="" height="18">
                <!-- <span class="logo-lg-text-light">UBold</span> -->
            </span>
            <span class="logo-sm">
                <!-- <span class="logo-sm-text-dark">U</span> -->
                <img src="{{ asset($siteSettings->w_logo) }}" alt="" height="24">
            </span>
        </a>
    </div>

    
</div>
<!-- end Topbar -->
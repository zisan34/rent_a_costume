    <nav class="ct-menuMobile">
        <ul class="ct-menuMobile-navbar">
            <li class="dropdown">
                <a href="{{ route('home') }}"><i class="fa fa-home fa-fw"></i> Home</a>
                {{-- <ul class="dropdown-menu">
                    <li><a href="index-2.html"><i class="fa fa-angle-right fa-fw"></i> Home v1</a></li>
                    <li><a href="index2.html"><i class="fa fa-angle-right fa-fw"></i> Home v2</a></li>
                </ul> --}}
            </li>
            <li class="dropdown">
                <a href="#"><i class="fa fa-building-o fa-fw"></i> Pages</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('about') }}"><i class="fa fa-angle-right fa-fw"></i> About Us</a></li>
                    
                   
                    <li><a href="{{url('/contactus')}}"><i class="fa fa-angle-right fa-fw"></i> Contact Us</a></li>
                   
                    <li><a href="{{route('faqs')}}"><i class="fa fa-angle-right fa-fw"></i> FAQ</a></li>
                </ul>
            </li>
            <li class="dropdown">
               
            </li>
   
          
            <li><a href="{{url('/support')}}"><i class="fa fa-phone-square fa-fw"></i> Customer Center</a></li>
        </ul>
    </nav>
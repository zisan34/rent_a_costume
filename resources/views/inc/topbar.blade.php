        <!-- TOPBAR -->
        @php
          
            $myCartCollection =0;
            $myCartSubtotal =0;
            $mycartTotalQuantity =0;
            $myTotal =0;
            if(!Cart::isEmpty()){
                $myCartCollection = Cart::getContent()->toArray();
                $myCartSubtotal = Cart::getSubTotal();;
                $mycartTotalQuantity = Cart::getTotalQuantity();
                $myTotal = Cart::getTotal();
            }
             $ma=0;
             $iam=Auth::user();
             if($iam){
                  $i_image=App\Image::where('type','App\User')->where('type_id',$iam->id)->first();
             }
            
        @endphp
        <div class="ct-topBar">
            <div class="container">
                <div class="ct-topBar-navigation pull-left">
                    <ul class="list-unstyled">
                        <li><i class="fa fa-fw fa-phone"></i> Call us: {{$siteSettings->w_phone}}</li>
                        @guest
                        <li><a href="{{ route('login') }}"><i class="fa fa-fw fa-user"></i> Login</a></li>
                        <li><a href="{{ route('register') }}"><i class="fa fa-fw fa-pencil"></i> Create an account</a></li>
                        @else
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-fw fa-user"></i> Logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <li><a href="{{url('myprofile')}}">
                            @if($i_image)
                            <img src="{{asset('upload/user/'.$i_image->image)}}" width="20px" style="bordar-radius:20%;" alt="">
                            @else 
                             <img src="{{asset('upload/user/default.png')}}" width="20px" style="bordar-radius:20%;" alt="">
                            @endif
                            My Profile</a>
                        </li>

                            @auth
                            @if(auth()->user()->is_super_admin)
                            {{-- <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-fw fa-pencil"></i> Admin Panel</a></li> --}}
                            @endif
                            @endauth
                        @endguest


                    </ul>
                </div>

                {{-- cart --}}
                <div class="pull-right">
                     
                    <div class="ct-topBar-basket">
                        <a href="#"><span class="ct-topBar-basket-cart"><i class="fa fa-fw fa-shopping-cart"></i> Cart: </span><span class="ct-topBar-basket-quantity">{{$mycartTotalQuantity}} item(s)</span><span class="ct-topBar-basket-price"> - ${{$myTotal}}</span></a>
                        <div class="ct-topBar-basket-info">
                            @if(is_array($myCartCollection))
                                @foreach($myCartCollection as $myCartCollection)
                                @php
                            // print_r($myCartCollection['id']);
                            //  exit();
                                $cart_product=App\Product::find($myCartCollection['id']);
                                $cart_img=$cart_product->img($cart_product->id);
                               
                                @endphp
                                    <div class="ct-cartItem">
                                        <a  href="{{url('single_product/'.urlencode($cart_product->id))}}">
                                            <div class="ct-cartItem-image pull-left">
                                                @if($cart_product->img_count($cart_product->id)>0)
                                                <img src="{{ asset('upload/product/'.$cart_img[0]->image) }}" alt="">
                                                @endif
                                            </div>
                                            <div class="ct-cartItem-title" style="height:60px;width:70px;overflow:hidden">
                                                {{$cart_product->description}}
                                            </div>
                                            <div class="ct-cartItem-price">
                                                ${{$cart_product->price}}
                                            </div>
                                            <div class="clearfix"></div>
                                        </a>
                                    </div>
                                   @php
                                       $ma++;
                                      
                                       if($ma>1){break;}
                                   @endphp

                                @endforeach
                            @endif
                           @if($mycartTotalQuantity>2)
                           <div>
                               <h5>More.............</h5>
                           </div>
                           @endif
                            <div class="clearfix"></div>
                            <div class="ct-cartSubtotal">
                                <div class="pull-left ct-fw-600">Subtotal: ${{$myCartSubtotal}}</div>
                             
                                <div class="clearfix"></div>
                            </div>
                            <div class="ct-cartGoNext text-uppercase ct-u-paddingBoth20">
                                <a class="btn btn-default ct-u-width-49pc" href="{{url('mycart')}}" role="button">View Cart <i class="fa fa-angle-double-right fa-fw"></i></a>
                                
                            </div>
                        </div>
                    </div>
                   
                   
                </div>
            </div>
        </div>
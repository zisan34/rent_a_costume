@extends('layouts.app')

@section('content')


<div class="ct-preloader"><div class="ct-preloader-content"></div></div>
    <div id="ct-js-wrapper" class="ct-pageWrapper">
        <div class="ct-contentWrapper">
            <div class="container">
                <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop50">My Cart</h4>
               
                    <table class="ct-wishList ct-js-wishList ct-js-cartShop ct-u-marginBoth30">
                        <thead>
                            <tr>
                                <th class="ct-wishList-image">Image</th>
                                <th class="ct-wishList-description">Product name</th>
                                <th class="ct-wishList-price">Unit Price</th>
                                <th class="ct-wishList-quantity">Quantity</th>
                                <th class="ct-wishList-quantity">Start Date</th>
                                <th class="ct-wishList-quantity">End Date</th>
                                <th class="ct-wishList-total">Total</th>
                                <th class="ct-wishList-button"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($cart_items)
                            @foreach($cart_items as $item)
                            @php
                                $cart_list_pro=App\Product::find($item['id']);
                                $cart_image=$cart_list_pro->img($cart_list_pro->id);
                                $t=$item['quantity'] * $cart_list_pro->price;
                                
                            @endphp
                                
                                    <tr>
                                    <form action="{{url('checkout')}}" id="cartfrm{{$cart_list_pro->id}}" method="POST">
                                     @csrf
                                     <input type="hidden" value="{{$cart_list_pro->id}}" name="pro_id">
                                        <td class="ct-wishList-image">
                                            @if($cart_list_pro->img_count($cart_list_pro->id)>0)
                                            <img src="{{asset('upload/product/'.$cart_image->image)}}" alt="Wishlist Product 1">
                                            @endif
                                        </td>
                                        <td class="ct-wishList-description">
                                            <a class="ct-wishList-itemLink" href="#">{{$cart_list_pro->product_name}}</a>
                                        </td>
                                        <td class="ct-wishList-price col-md-2">
                                            <input class="form-control col-md-2" type="number" name="price" disabled value="{{$cart_list_pro->price}}">
                                        </td>
                                        <td class="ct-wishList-quantity col-md-2">
                                            <input class="form-control col-md-2" type="number" name="quantity" disabled value="{{$item['quantity']}}">
                                        </td>
                                        <td class="ct-wishList-total"><input class="form-control col-md-2" type="text" disabled value="{{$today}}" name="start_date"></td>
                                        <td class="ct-wishList-quantity"> <input type="date" id="end_datel{{$cart_list_pro->id}}" onchange="get_total_val('{{$cart_list_pro->id}}')" class="form-control col-md-2" value="{{ \Carbon\Carbon::today()->addDays(30)->format('Y-m-d') }}"  name="end_date"></td>
                                        <td class="ct-wishList-total">
                                            <input class="form-control col-md-3" type="number " disabled value="{{$t}}">
                                        </td>
                                        <td class="ct-wishList-button">
                                            <input type="submit" value="Ok" class="btn  col-md-3">
                                            <a class="btn btn-default btn-md " href="{{url('removecart/'.$cart_list_pro->id)}}">X</a>
                                        </td>
                                        </form>
                                    </tr>
                                
                            @endforeach
                            @endif
                           
                        </tbody>
                    </table>
                
                   <div class="card">
                        <a href="{{url('makethepayment')}}" class="btn btn-info">Make the payment</a>
                    </div>
                    <div class="ct-shopSections">
                        <div class="row">
                            
                            <div class="col-sm-5">
                                <div class="ct-cartRightSection">
                                    
                                    <div class="ct-u-size15">
                                        <div class="ct-u-paddingBottom20">
                                            @php
                                                $subTotal = Cart::getSubTotal();
                                            @endphp
                                            <span class="pull-left">Cart Subtotal</span>
                                            <span class="pull-right">${{$subTotal}}</span>
                                            <div class="clearfix"></div>
                                        </div>
                                        
                                        <hr class="ct-u-paddingBottom30">
                                        <div class="ct-u-paddingBottom30">
                                            <span class="pull-left">Order Total</span>
                                            <span id="" class="pull-right ct-u-size20"><h6 id="put_total"></h6></span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <hr class="ct-u-paddingBottom30">
                                        

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               
            </div>

        </div>
    </div>
<script>
function get_total_val(data){

     var end=$('#end_datel'+data).val();
    
     
    console.log(end);
    $.ajax({
        type:'get',
        data:{'date':end},
        url:'{{url('check_end_date')}}',
        success:function(res){
            console.log(res);
            if(res.status=='over_date'){
                alert('The requested time is too long. Please selecet less amout of time');
            }else{
                $('#put_total').html('$'+res.total+' with tax ');
            }
        }
    })
}

</script>

@endsection
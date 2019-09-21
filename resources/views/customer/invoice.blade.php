@extends('layouts.app')

@section('content')

@php
    $user=Auth::user();
    $invoice_price=array();
    $order_batch=App\Order::where('user_id',$user->id)->select('order_batch')->distinct()->get();
    $price=0;
    if($order_batch){
        foreach($order_batch as $batch){
          
           $myinvoice= App\Invoice::where('invoice_id',$batch->order_batch)->first();
           $invoice_count=App\Invoice::where('invoice_id',$batch->order_batch)->get()->toArray();
           
            if(sizeof($invoice_count)==0){
                array_push($invoice_price,$batch->order_batch);
                  // 
                   $all=App\Order::where('order_batch',$batch->order_batch)->get();
                 // print_r($all);
                  if($all){
                       foreach($all as $all){
                         $price=$price+$all->total_amount;
                        }
                   }
               
              // print_r($batch->order_batch);
            }
           
         
          
          
        }
    }
    $total_price= $price;
   
    $myammount=DB::table('user_cards')->where('user_id',$user->id)->first();
    if($myammount){
        $myammount_money=$myammount->total_amount;
    }
    // print_r($invoice_price);
   json_encode($invoice_price);
   Session::put('array',$invoice_price);
   
  
  // ;exit();
@endphp
<div class="ct-preloader"><div class="ct-preloader-content"></div></div>
    <div id="ct-js-wrapper" class="ct-pageWrapper">
        <div class="ct-contentWrapper">
            <div class="container">
                <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop50">My Invoice</h4>
                 <div class="row">
                            
                           <form action="{{url('makethepaymenttrue')}}" method="POST">
                               @csrf
                               
                               <div class="card form-group">
                                   <h4>Dear {{$user->name}}</h4>
                                   you have total bill : <b>${{$total_price}}</b>
                               </div>
                               <div class="form-group">
                                    <h6>You Have in Card: 
                                        @if($myammount)
                                        {{$myammount_money}}
                                        @endif
                                    </h6>
                               </div>
                               <div class="form-group">
                                    <h6>After the payment you will have :
                                         @if($myammount) 
                                         {{$myammount_money-$total_price}}
                                        <div>
                                                <input type="submit" class="btn btn-info" value="Pay">
                                        </div>
                                        @endif
                                    </h6>
                               </div>
                               
                           </form>
                        </div>
                    <table class="ct-wishList ct-js-wishList ct-js-cartShop ct-u-marginBoth30">
                
                    </table>
                
                   
                    <div class="ct-shopSections ct-wishList ct-js-wishList ct-js-cartShop ct-u-marginBoth30">
                      
                    </div>
               
            </div>

        </div>
    </div>


@endsection
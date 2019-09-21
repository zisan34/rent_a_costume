<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Product;
use Cart;
use Exception;
use DB;
use Actuallymab\LaravelComment\Contracts\Commentable;
use Carbon\Carbon;
use App\Order;

class CartController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->site_setting = DB::table('site_settings')->first();
    }
    public function add(Request $request){
      $id=$request->id;
   // $id = urldecode($id);
  // Cart::clear();
       try{
       
            $product = Product::find($id);
            if (Cart::isEmpty()) {

                Cart::add(array(
                    'id' => $product->id,
                   
                    'name' => $product->product_name,
                    'price' => $product->price,
                    'quantity' => 1,

                ));
               
            } 
            else {

                if (Cart::get($id)) {
                   // return 'hi';
                    Cart::update($id, array(
                        'quantity' => 1, // so if the current product has a quantity of 4, another 2 will be added so this will result to 6
                    ));
                }else{
                    Cart::add(array(
                        'id' => $product->id,

                        'name' => $product->product_name,
                        'price' => $product->price,
                        'quantity' => 1,

                    ));
                }
            }
            $content = Cart::getContent();
           // return $content;
            return 'success';
       }catch(Exception $e){
        return $e;
       }
       
    }
    public function show_cart(){
        $this->cart_items = Cart::getContent()->toArray();
        $t= Carbon::today();
        $this->today=$t->format('Y-m-d');
        return view('customer.mycart',$this->data);
    }
    public function check_end_date(Request $request){
        $d= DB::table('orders_settings')->first();
        $p=$d->date_range;
        $next=Carbon::today()->addDays(90)->format('Y-m-d');
        if($next<$request->date){
           return ['status' => 'over_date',
                   'total'=>'null'];
        }
        $subTotal = Cart::getSubTotal();
        $total = $subTotal + (($subTotal * $d->tax_comission) / 100);
        return ['status' => 'okay','total' =>$total];
    }
    public function checkout(Request $request){
       
        $product=Product::find($request->pro_id);
        $subTotal = Cart::getSubTotal();
        $d = DB::table('orders_settings')->first();
        $batch=rand(1,10000);
        $batch=time().$batch;
        $t = Carbon::today();
        $t = $t->format('Y-m-d');
        $content = Cart::get($product->id)->toArray();
     //  return $content['price'];
        $total = $subTotal + (($subTotal * $d->tax_comission) / 100);
       
        $order = new Order;
        $order->user_id = Auth::user()->id;
        $order->product_id=$product->id;
        $order->order_batch=$batch;
        $order->quantity=$content['quantity'];
        $order->total_amount=($content['price']+(($content['price'] * $d->tax_comission)/100));
        $order->start_date=$t;
        $order->end_date=$request->end_date;
        $order->tax=$d->tax_comission;
        $order->save();
        Cart::remove($product->id);
        return redirect()->back();
        
        
    }
    public function remove($id){
        Cart::remove($id);
        return redirect()->back();
    }
    public function submit_rating(Request $request){
        $user=Auth::user();
        $product=Product::find($request->pro_id);
        $user->comment($product, $request->comment, $request->rating);
        return redirect()->back();
    }
}

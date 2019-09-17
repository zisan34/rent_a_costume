<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Product;
use Cart;
use Exception;

class CartController extends Controller
{
    public function __construct()
    {
       
    }
    public function add(Request $request){
      $id=$request->id;
       try{
            $user = Auth::user();
            \Cart::session($user->id);
            $id = urldecode($id);
            $product = Product::find($id);
            if (Cart::isEmpty()) {
                Cart::add(array(
                    'id' => $user->id,
                    'name' => $product->product_name,
                    'price' => $product->price,
                    'quantity' => 1,

                ));
            } else {
                Cart::update($user->id, array(
                    'quantity' => 1, // so if the current product has a quantity of 4, another 2 will be added so this will result to 6
                ));
            }
            return 'success';
       }catch(Exception $e){
        return 'error';
       }
       
    }
}

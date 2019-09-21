<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;
class CustomerProductController extends Controller
{
    public function __construct()
    {
        //  $this->middleware('auth')->except('index');
        parent::__construct();
        $this->site_setting = DB::table('site_settings')->first();
    }
    public function showall(Request $request){
        if($request->sort_option){
            if($request->sort_option== 'price'){
                $this->all_products=Product::orderBy('price','desc')->paginate(10);
            }
            elseif($request->sort_option== 'date'){
                $this->all_products = Product::orderBy('created_at', 'desc')->paginate(10);
            }elseif($request->sort_option== 'highlight'){
                $this->all_products = Product::orderBy('highlight', 'desc')->paginate(10);
            }
        }
        $this->special_product=Product::orderBy('price','desc')->first();
        return view('customer.all_product',$this->data);
    }
    public function singleshow($id){
        $id=urldecode($id);
        $this->product=Product::find($id);
        $this->brand=$this->product->brand;
        $this->category=$this->product->category;
        $this->image=$this->product->img($this->product->id);
        $this->image_count = $this->product->img_count($this->product->id);
        $min=$this->product->price-50;
        $max=$this->product->price+50;
        $this->related_products=Product::where('price','>',$min)->where('price','<',$max)
                                        ->where('brand_id',$this->product->brand_id)->paginate(5);
        return view('customer.single_product',$this->data);
    }
}

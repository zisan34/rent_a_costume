<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductCategory;
use App\Image;
use Session;

class ProductController extends AdminBaseController
{
    public function __construct()
    {
        $this->site_title='Product Control';
    }
    public function ecommerceproducts(Request $request)
    {
        if($request->sort_product=='price'){
            $this->all_products = Product::orderBy('price', 'desc')->paginate(10);
        }
        if($request->sort_product=='created_at'){
            $this->all_products = Product::orderBy('created_at', 'desc')->paginate(10);
        }
        if($request->sort_product=='available'){
            $this->products = Product::orderBy('availability', 'desc')->paginate(12);
        }else{
            $this->products = Product::paginate(12);
        }
       
        return view('admin.product.index',$this->data);
    }
    public function showProductForm(){
        $this->category=ProductCategory::all();
        return view('admin.product.showform',$this->data);
    }
    
    public function ecommerceprductdetail($code)
    {   $code=urldecode($code);
        $this->product=Product::where('unique_code',$code)->first();
        $this->site_title='Product Details';
        $this->images=Image::where('type','App\Product')->where('type_id',$this->product->id)->get();
        $this->category=$this->product->category;
      //  return $this->category;
        return view('admin.product.details',$this->data);
        
    }
    public function ecommerceproductedit($code)
    {
        $code=urldecode($code);
        $this->product = Product::where('unique_code', $code)->first();
        $this->category=ProductCategory::all();
        $this->cat = $this->product->category;
        $this->images = Image::where('type', 'App\Product')->where('type_id', $this->product->id)->get();
        return view('admin.product.edit',$this->data);
      //  return view('admin.ecommerce-product-edit',$this->data);
    }
    public function product_save(Request $request){
        //return $request;
        $this->validate($request,[
            'name'=>'required',
            'categorypicker'=>'required',
           
        ]);
        $response=Product::store($request);
        if($response=='success'){
            Session::flash('message','Product Save');
            return redirect()->back();
        }else{
            Session::flash('message','Some thing went wrong');
            return redirect()->back()->withInput();
        }
    }
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'categorypicker' => 'required',
           
        ]);
      //  return $request;
        if(($request->categorypicker)== 'other'){
            Session::flash('message', 'Select Category');
            return redirect()->back()->withInput();
        }
        $response=Product::edit($request);
        if ($response == 'success') {
            Session::flash('message', 'Product Save');
            return redirect()->back();
        } else {
            Session::flash('message', 'Some thing went wrong');
            return redirect()->back()->withInput();
        }
    }
    public function delete($id){
        $code = urldecode($id);
        Product::where('unique_code', $code)->delete();
        Session::flash('message','Deleted');
        return redirect()->back();
    }
    public function showcomment(){
        $this->products=Product::paginate(10);
        return view('admin.product.showcomment',$this->data);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Auth;
use App\Image;
use Exception;

class Product extends Model
{
    public function category(){
        return $this->belongsTo('App\ProductCategory','category_id');
    }
    public function brand(){
        return $this->belongsTo('App\Brand','brand_id');
    }
    public function img($id){
        $img=Image::where('type','App\Product')->where('type_id',$id)->get();
        return $img;
    }
    public function img_count($id){
        $img = Image::where('type', 'App\Product')->where('type_id', $id)->count();
        return $img;
    }
    public static function store($data){
        try{
            $product = new Product;
            $product->product_name = $data->name;
            $product->description = $data->description;
            $code = \rand(0, 1000000);
            $code = '#' . $code;
            $product->unique_code = $code;
            $product->quantity=$data->quantity;
            $product->added_by = Auth::user()->id;
            $product->price = $data->price;
            if ($data->status == 'true') {
                $product->status = 1;
            } else {
                $product->status = 0;
            }
            $product->category_id = $data->categorypicker;
            $product->brand_id = $data->brand_id;
            $product->save();
            if ($data->hasFile('image1')) {
                $image = $data->File('image1');
                Product::save_image($image, $product->id);
            }
            if ($data->hasFile('image2')) {
                $image = $data->File('image2');
                Product::save_image($image, $product->id);
            }
            if ($data->hasFile('image3')) {
                $image = $data->File('image3');
                Product::save_image($image, $product->id);
            }
            return 'success';
        }catch(Exception $e){
            return 'error';
        }
       
    }
    public static function save_image($avatar,$id){
        $filename = time() . '.' . $avatar->getClientOriginalExtension();
        $avatar->move('upload/product/', $filename);
        $img= new Image;
        $img->image=$filename;
        $img->type='App\Product';
        $img->type_id=$id;
        $img->save();
    }
    public static function edit($data){
        $product=Product::find($data->id);
        $product->product_name = $data->name;
        $product->description = $data->description;
        $product->quantity = $data->quantity;
        $product->price = $data->price;
        if ($data->status == 'true') {
            $product->status = 1;
        } else {
            $product->status = 0;
        }
        $product->category_id = $data->categorypicker;
        $product->brand_id = $data->brand_id;
        $product->save();
       
        $deletedRows = Image::where('type_id', $data->id)->where('type','App\Product')->delete();
        if ($data->hasFile('image1')) {
            $imag = $data->File('image1');
            Product::save_image($imag, $product->id);
        }
        if ($data->hasFile('image2')) {
            $image = $data->File('image2');
            Product::save_image($image, $product->id);
        }
        if ($data->hasFile('image3')) {
            $img = $data->File('image3');
            Product::save_image($img, $product->id);
        }
        return 'success';
    }
}

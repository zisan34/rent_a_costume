<?php

namespace App;

use Exception;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function category(){
        return $this->belongsTo('App\ProductCategory','product_category_id');
    }
    public static function store($data){
        try{
            $brand= new Brand;
            $brand->brand_name=$data->name;
            $brand->product_category_id=$data->cat_id;
            if($data->hasFile('image')){
                $avatar = $data->file('image');
                $filename = time() . '.' . $avatar->getClientOriginalExtension();
                $avatar->move('upload/etc/', $filename);
                $brand->icon = $filename;
            }
            $brand->save();
            return 'success';
        }
        catch(Exception $c){

            return 'error';
        }
    }
}

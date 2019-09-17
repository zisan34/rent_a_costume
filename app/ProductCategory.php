<?php

namespace App;

use Exception;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    public function brand(){
        return $this->hasMany('App\Brand', 'product_category_id');
    }
    public function product(){
        return $this->hasOne('App\Product','category_id');
    }
    public static function store($data){
        $cat=new ProductCategory;
        try{
            $cat->category_name = $data->name;
            if ($data->hasFile('image')) {
                $avatar = $data->file('image');
                $filename = time() . '.' . $avatar->getClientOriginalExtension();
                $avatar->move('upload/etc/', $filename);
                $cat->icon = $filename;
            }
          
            $cat->save();
            return 'success';
        }catch(Exception $ch){
            return 'error';
        }
        
    }
}

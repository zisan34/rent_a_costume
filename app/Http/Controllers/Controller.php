<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Product;
use App\ProductCategory;
use App\Brand;
use Cart;
use Auth;
use Session;
use DB;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public $data = [];
   
    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }
    public function __get($name)
    {
        return $this->data[$name];
    }
    public function __construct()
    {
        $this->all_products=Product::paginate(10);
        $this->all_brands=Brand::paginate(10);
        $this->all_category=ProductCategory::paginate(10);
        $this->site_data = DB::table('site_settings')->first();
        
       
    }
}

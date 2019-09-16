<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCategory;
use App\Brand;
use Illuminate\Support\Facades\Session;
use Yajra\Datatables\Datatables;

class CategoryBrandController extends AdminBaseController
{
    public function __construct()
    {
        $this->site_title='Category & Brand Controll';
    }
    public function addCategory(){
        return view('admin.BrandCategory.addCategory',$this->data);
    }
    public function save_category(Request $request){
        $this->validate($request,[
            'name'=>'required',
        ]);
        $res= ProductCategory::store($request);
        if($res=='success'){
            Session::flash('message', 'Category Added');
        }else{
            Session::flash('message', 'Some thing went wrong');
        }
       
        return redirect()->back();

    }
    public function getBrandOptions(Request $request){
        $brand=Brand::where('product_category_id',$request->id)->get();
        $output='';
        foreach($brand as $b){
            $output.='<option value='.$b->id.'>'.$b->brand_name.'</option>';
        }
        $output='<div>'. '<select  class="form-control" name="brand_id" data-style="btn-outline-primary">'.$output. ' </select>'.'</div>';
        return $output;
    }
    public function addBrand(){
        $this->category=ProductCategory::all();
        return view('admin.BrandCategory.addBrand',$this->data);
    }
    public function save_brand(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'cat_id'=>'required',
        ]);
        $res=Brand::store($request);
        if ($res == 'success') {
            Session::flash('message', 'Brand Added');
        } else {
            Session::flash('message', 'Some thing went wrong');
        }

        return redirect()->back();
    }
    public function editCategory(){

    }
    public function showBrand(){
        $this->brand=Brand::all();
       
        return view('admin.BrandCategory.showBrand', $this->data);
    }
    public function getBrand(Request $request){
        $data=Brand::query();
        return DataTables::of($data)
            ->setRowId('id')
            ->editColumn('product_category_id', function ($val) {
                $cat=$val->category;
                return $cat->category_name;
               
            })
            ->editColumn('icon',function($val){
                $src='upload/etc/'.$val->icon;
                $output='<img src="'.$src.'" width="20px">';
                return $output;
            })
            ->addColumn('action',function($val){
                $output='<a class="btn btn-sm btn-danger">DELETE</a>';
                return $output;
            })
            ->make(true);
    }
    public function showCat(){
        $this->category=ProductCategory::all();
        return view('admin.BrandCategory.showCat',$this->data);
    }
}

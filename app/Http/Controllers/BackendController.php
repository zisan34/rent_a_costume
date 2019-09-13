<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class BackendController extends AdminBaseController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index($id)
    {
        return view('admin.'.$id,$this->data);
    }
    public function calendar(){
        $this->user=Auth::user();
        return view('admin.apps-calendar');
    }
   
    public function appscontacts(){
        $this->user=Auth::user();
        return $this->data;
       // return view('admin.apps-contacts');
    }
    public function appstickets(){
        $this->user=Auth::user();
        return view('admin.apps-tickets');
    }
    public function appscompanies(){
        $this->user=Auth::user();
        return view('admin.apps-companies');
    }
    public function ecommerceproducts(){
        $this->user=Auth::user();
        return view('admin.ecommerce-products');
    }
    public function ecommerceprductdetail(){
        return view('admin.ecommerce-prduct-detail');
    }
    public function ecommerceproductedit(){
        return view('admin.ecommerce-product-edit');
    }
    public function ecommerceorders(){
        return view('admin.ecommerce-orders');
    }
    public function ecommercesellers(){
        return view('admin.ecommerce-sellers');
    }
    public function create()
    {
        //
    }
    public function dashboard(){
        $this->user=Auth::user();
       // return $this->data;
        return view('admin.ecommerce-dashboard',$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
 
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/','HomeController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin/', 'middleware'=>'auth'], function() {
	Route::get('adminDashboard','BackEndController@dashboard')->name('admin.dashboard');
	Route::any('apps-calendar','BackEndController@calendar');
	Route::get('{any}','BackendController@index')->name('dashboard');
	
	Route::get('apps-contacts', 'BackEndController@appscontacts');
	Route::get('apps-tickets', 'BackEndController@appstickets');
	Route::get('apps-companies', 'BackEndController@appscompanies');
	Route::get('ecommerce-products', 'BackEndController@ecommerceproducts');
	Route::get('ecommerce-prduct-detail', 'BackEndController@ecommerceprductdetail');
	Route::get('ecommerce-product-edit', 'BackEndController@ecommerceproductedit');
	Route::get('ecommerce-orders', 'BackEndController@ecommerceorders');
	Route::get('ecommerce-sellers', 'BackEndController@ecommercesellers');

});


Auth::routes();






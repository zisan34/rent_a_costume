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

Route::any('logout','HomeController@logout');
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin/', 'middleware'=>'auth'], function() {
	Route::get('adminDashboard', 'BackEndController@dashboard')->name('admin.dashboard');
	Route::any('apps-calendar', 'BackEndController@calendar');


	Route::get('apps-contacts', 'BackEndController@appscontacts');
	Route::get('apps-tickets', 'BackEndController@appstickets');
	Route::get('apps-companies', 'BackEndController@appscompanies');
	Route::get('ecommerce-products', 'ProductController@ecommerceproducts');
	Route::get('add_product', 'ProductController@showProductForm');
	Route::get('productDetails/{id}', 'ProductController@ecommerceprductdetail');
	Route::get('product_edit/{id}', 'ProductController@ecommerceproductedit');
	Route::post('product_save', 'ProductController@product_save');
	Route::post('product_edit', 'ProductController@store');

	Route::get('ecommerce-orders', 'BackEndController@ecommerceorders');
	Route::get('ecommerce-sellers', 'BackEndController@ecommercesellers');
	Route::get('addCategory', 'CategoryBrandController@addCategory');
	Route::get('addBrand', 'CategoryBrandController@addBrand');
	Route::post('save_category', 'CategoryBrandController@save_category');
	Route::post('save_brand', 'CategoryBrandController@save_brand');
	Route::get('editCategory', 'CategoryBrandController@editCategory');
	Route::get('showCat', 'CategoryBrandController@showCat');
	Route::get('showBrand', 'CategoryBrandController@showBrand');
	Route::get('getBrandajx', 'CategoryBrandController@getBrand')->name('get_brand_show');
	Route::get('getBrand', 'CategoryBrandController@getBrandOptions');
	


	Route::post('event/add','EventsController@store')->name('event.add');
	Route::post('event/update','EventsController@update')->name('event.update');
	Route::get('event/show/{id}','EventsController@show')->name('event.show');
	Route::get('event/delete/{id}','EventsController@delete')->name('event.delete');

});
Route::get('showlast_product', 'CustomerProductController@showlast');
Route::get('showfeatured_product', 'CustomerProductController@showfeatured');
Route::get('showtop_product', 'CustomerProductController@showtop');
Route::any('showall_product', 'CustomerProductController@showall');
Route::any('single_product/{id}', 'CustomerProductController@singleshow');
Route::group(['middleware' => 'auth'], function () {
	Route::get('addto_card', 'CartController@add');
});


Auth::routes();






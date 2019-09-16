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

Route::group(['prefix' => 'admin/', 'middleware'=>'admin'], function() {
	Route::get('adminDashboard','BackEndController@dashboard')->name('admin.dashboard');
	Route::any('apps-calendar','BackEndController@calendar');
	Route::any('apps-calendar','BackEndController@calendar')->name('app.calendar');

	
	Route::get('apps-contacts', 'BackEndController@appscontacts');
	Route::get('apps-tickets', 'BackEndController@appstickets');
	Route::get('apps-companies', 'BackEndController@appscompanies');
	Route::get('ecommerce-products', 'BackEndController@ecommerceproducts');
	Route::get('ecommerce-prduct-detail', 'BackEndController@ecommerceprductdetail');
	Route::get('ecommerce-product-edit', 'BackEndController@ecommerceproductedit');
	Route::get('ecommerce-orders', 'BackEndController@ecommerceorders');
	Route::get('ecommerce-sellers', 'BackEndController@ecommercesellers');



	Route::post('event/add','EventsController@store')->name('event.add');
	Route::post('event/update','EventsController@update')->name('event.update');
	Route::get('event/show/{id}','EventsController@show')->name('event.show');
	Route::get('event/delete/{id}','EventsController@delete')->name('event.delete');


	Route::get('email/compose/{email}','EmailsController@customMail')->name('email.custom');

	Route::get('email/multiple','EmailsController@multipleEmail')->name('email.multiple');

	Route::post('email/custom/send','EmailsController@sendCustomMail')->name('email.custom.send');

	Route::post('email/multiple/send','EmailsController@sendMultipleMail')->name('email.multiple.send');




	Route::get('{any}','BackendController@index')->name('dashboard');
	

});


Auth::routes();






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

/*Route::get('/', function () {
    return view('welcome');
});*/
//Route::get('/', 'pagescontroller@index')->name('home');
Route::get('/', 'pagescontroller@product')->name('products');
Route::get('/product/{slug}', 'pagescontroller@show')->name('product.show');

Route::get('/search', 'pagescontroller@search')->name('product.search');


//admin section

Route::group(['prefix'=>'admin'], function () {

	 Route::get('/', 'adminpagescontroller@index')->name('admin.index');

///product section
	Route::group(['prefix'=>'product'], function () {
	    Route::get('/create', 'adminpagescontroller@product_create')->name('admin.product.create');
	    Route::get('/manage', 'adminpagescontroller@product_manage')->name('admin.product.manage');

	    Route::get('/edit/{id}', 'adminpagescontroller@product_edit')->name('admin.product.edit');
	    Route::post('/delete/{id}', 'adminpagescontroller@productDestroy')->name('admin.product.delete');

	    Route::post('/edit/{id}', 'adminpagescontroller@product_update')->name('admin.product.update');
	    Route::post('/create', 'adminpagescontroller@product_store')->name('admin.product.store');
	}); 


	//catagory section

	Route::group(['prefix'=>'category'], function () {
	    Route::get('/create', 'CatagoryController@category_create')->name('admin.category.create');
	    Route::get('/manage', 'CatagoryController@category_manage')->name('admin.category.manage');

	    Route::get('/edit/{id}', 'CatagoryController@category_edit')->name('admin.category.edit');

	    Route::post('/edit/{id}', 'CatagoryController@category_update')->name('admin.category.update');
	    
	    Route::post('/create', 'CatagoryController@category_store')->name('admin.category.store');
	}); 
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');

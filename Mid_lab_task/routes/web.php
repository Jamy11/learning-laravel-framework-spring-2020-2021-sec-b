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

//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@view');

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify')->name('login.verify');

Route::get('/logout', 'LogoutController@index');

Route::get('/registration','AllController@registration');
Route::post('/registration','AllController@registrationVerify');

Route::group(['middleware'=>'sess'],function(){

    Route::get('/home', 'HomeController@index')->middleware('sess');

    Route::get('/system/sales/physical_store', 'Physical_store_channelController@physicalStoreView');
    Route::get('/system/sales/social_media', 'Physical_store_channelController@socialMediaView');
    Route::get('/system/sales/ecommerce', 'Physical_store_channelController@ecommerceView');

    Route::get('system/product_management/existing_products', 'productController@existingProductsView');
    Route::get('system/product_management/upcoming_products', 'productController@upcomingProductsView');
    Route::get('system/product_management/add_product', 'productController@addProductView');

});


// Route::group(['middleware'=>'sess'],function(){

//     Route::group(['middleware'=>'admin'],function(){


//     });
//     //Route::get('/home', ['uses'=>'HomeController@index']);

//     Route::get('/home/create', 'HomeController@create')->name('home.create');
//     Route::post('/home/create', 'HomeController@store');


//     Route::get('/user/edit/{id}', 'HomeController@edit')->name('home.edit');
//     Route::post('/home/edit/{id}', 'HomeController@update');

//     Route::get('/home/delete/{id}', 'HomeController@delete');
//     Route::post('/home/delete/{id}', 'HomeController@destroy');

//     Route::get('/home', 'HomeController@index')->middleware('sess');
 

//     Route::get('/user/userlist', 'HomeController@userlist')->name('home.userlist');

//     Route::get('/home/details/{id}', 'HomeController@show');


//     Route::resource('/product','ProductController');
   
// });





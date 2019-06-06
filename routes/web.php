<?php

/*
|----------------- ---------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 
Auth::routes(); 
 Route::post('pay','paymentpaypall@payWithPaypal')->name('pay');

 Route::get('/ok' , 'paymentpaypall@paypalOk')->name("paypalOk") ;
Route::get('/cancel' , 'paymentpaypall@paypalCancel')->name("paypalCancel") ;

Route::get('/reservation/{id}','HomeController@make_reservation')->name('reservation');
Route::get('/search','HomeController@search')->name('search');
Route::get('registerorder/{id}','mealcontroller@show')->name('register_order');
Route::get('/', 'HomeController@show_website')->name('show_website');
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'Menus'],function(){ 

Route::get('create','menuController@create')->name('show');
Route::post('store','menuController@store')->name('store');
Route::delete('delet/{id}','menuController@delete')->name('delete');
Route::get('edit/{id}','menuController@edit');
Route::put('update/{id}','menuController@update')->name('update');
});
Route::get('admin/show','menuController@show')->name('showadmin');
//factory(App\Meal::class,20)->create();
Route::get('/lang/{lang}','langcontrol@changelang');

Route::resource('Items','ItemsController');
Route::resource('Meals','mealcontroller');
Route::resource('Order','makeorder');
Route::resource('Comment', 'commentcontroller');
Route::resource('Shoping','shopingcontroller');










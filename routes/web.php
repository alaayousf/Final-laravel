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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('test', function () {
//     return view('testView');
// });


Route::get('Login/View','DashBorde\LoginController@LoginView');
Route::get('Login/Aute','DashBorde\LoginController@Aute');


//ratings
Route::get('ratings','DashBorde\StoresCotroller\Store@ratings');




//Category views
Route::get('categuty/View','DashBorde\Category@category_View');

Route::get('categuty/create/View','DashBorde\Category@category_creat_View');

Route::post('categuty/update/View','DashBorde\Category@category_update_View');



	//Category action
Route::post('categuty/creat','DashBorde\Category@creat');
Route::get('categuty/index','DashBorde\Category@index');
Route::post('categuty/update','DashBorde\Category@update');
Route::get('categuty/delete/{id}','DashBorde\Category@delete');




//store views 
Route::get('store/View','DashBorde\StoresCotroller\Store@store_view');
Route::get('store/create/View','DashBorde\StoresCotroller\Store@cerate_view');
Route::get('store/update/View/{id}','DashBorde\StoresCotroller\Store@update_view');



//store action
Route::post('store/creat','DashBorde\StoresCotroller\Store@creat');
Route::post('store/update','DashBorde\StoresCotroller\Store@update');
Route::get('store/delete/{id}','DashBorde\StoresCotroller\Store@delete');





//log as a gest 

Route::get('Login/asGuest','GuestBorde\GuestController@Guest_view');
Route::get('ratings/Detalse/{id}','GuestBorde\GuestController@getStoreData');
Route::post('ratings/addRatings','GuestBorde\GuestController@addRatings');





























Route::get('listcategury','DashBorde\FirstContreoller@create');



Route::post('listcategury/store','DashBorde\FirstContreoller@store');








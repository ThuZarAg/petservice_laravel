<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//CRUD(Backend)
Route::middleware('role:admin')->group(function () {
	Route::resource('category','CategoryController');
	Route::resource('subcategory','SubcategoryController');
	Route::resource('item','ItemController');
	Route::resource('servicetype','ServicetypeController');
	Route::resource('package','PackageController');
});


//Frontend

Route::get('/', 'FrontendController@home')->name('mainpage');

Route::get('service', 'FrontendController@service')->name('servicepage');

Route::get('servicedetail/{id}', 'FrontendController@package')->name('package');

Route::get('book', 'FrontendController@book')->name('book');

Route::post('filter', 'FrontendController@filterService')->name('filterService');

Route::resource('booking', 'BookingController');


Route::get('shop', 'FrontendController@shop')->name('shoppage');

Route::get('itemsbysubcategory/{id}', 'FrontendController@itemsbysubcategory')->name('itemsbysubcategory');

Route::get('itemdetail/{id}', 'FrontendController@itemdetail')->name('itemdetail');

Route::get('cart', 'FrontendController@cart')->name('cartpage');

Route::get('contact', 'FrontendController@contact')->name('contactpage');

Route::get('about', 'FrontendController@about')->name('aboutpage');

Route::resource('order', 'OrderController');
Route::post('confirm/{id}', 'OrderController@confirm')->name('order.confirm');

Route::get('signin', 'FrontendController@signin')->name('signinpage');
Route::get('signup', 'FrontendController@signup')->name('signuppage');

Route::resource('user', 'UserController');

Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');


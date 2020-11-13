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
Route::resource('category','CategoryController');
Route::resource('item','ItemController');


//Frontend
Route::get('/', 'FrontendController@home')->name('mainpage');

Route::get('service', 'FrontendController@service')->name('servicepage');

Route::get('shop', 'FrontendController@shop')->name('shoppage');

Route::get('contact', 'FrontendController@contact')->name('contactpage');

Route::get('about', 'FrontendController@about')->name('aboutpage');


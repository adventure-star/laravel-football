<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', 'CommonController@index')->name('index');
Route::get('/about', 'CommonController@about')->name('about');
Route::get('/blog', 'CommonController@blog')->name('blog');
Route::get('/blog-details', 'CommonController@blogdetails')->name('blogdetails');
Route::get('/cart', 'CommonController@cart')->name('cart');
Route::get('/checkout', 'CommonController@checkout')->name('checkout');

Route::get('/point-table', 'CommonController@pointtable')->name('pointtable');
Route::get('/product-details', 'CommonController@productdetails')->name('productdetails');
Route::get('/shop', 'CommonController@shop')->name('shop');
Route::get('/team', 'CommonController@team')->name('team');
Route::get('/wishlist', 'CommonController@wishlist')->name('wishlist');
Route::get('/contact', 'CommonController@contact')->name('contact');
Route::get('/submit', 'CommonController@submit')->name('submit')->middleware('auth');

Route::post('/submit-data', 'CommonController@submitdata')->name('submitdata');
Route::post('/submit-save', 'CommonController@submitsave')->name('submitsave');

// Admin Urls

Route::get('/fixture', 'AdminController@fixture')->name('fixture');
Route::get('/teams', 'AdminController@teams')->name('teams');
Route::get('/rounds', 'AdminController@rounds')->name('rounds');
Route::get('/rounds/edit/{id}', 'AdminController@roundedit')->name('rounds.edit');
Route::post('/rounds/edit/save', 'AdminController@roundeditsave')->name('rounds.edit.save');

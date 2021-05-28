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

Route::get('/teams', 'AdminController@teams')->name('teams');

Route::get('/rounds', 'AdminController@rounds')->name('rounds');
Route::get('/rounds/edit/{id}', 'AdminController@roundedit')->name('rounds.edit');
Route::post('/rounds/edit/save', 'AdminController@roundupdate')->name('rounds.update');
Route::get('/rounds/new', 'AdminController@roundnew')->name('rounds.new');
Route::post('/rounds/new/save', 'AdminController@roundnewsave')->name('rounds.new.save');

Route::get('/players', 'AdminController@players')->name('players');
Route::get('/players/edit/{id}', 'AdminController@playeredit')->name('players.edit');
Route::post('/players/edit/save', 'AdminController@playerupdate')->name('players.update');
Route::get('/players/new', 'AdminController@playernew')->name('players.new');
Route::post('/players/new/save', 'AdminController@playernewsave')->name('players.new.save');

Route::get('/users', 'AdminController@users')->name('users');

Route::get('/fixtures', 'AdminController@fixture')->name('fixtures');
Route::get('/fixtures/edit/{id}', 'AdminController@fixtureedit')->name('fixtures.edit');
Route::post('/fixtures/update', 'AdminController@fixtureupdate')->name('fixtures.update');
Route::get('/fixtures/new', 'AdminController@fixturenew')->name('fixtures.new');
Route::post('/fixtures/new/save', 'AdminController@fixturenewsave')->name('fixtures.new.save');

Route::get('/questions', 'AdminController@question')->name('questions');
Route::get('/questions/edit/{id}', 'AdminController@questionedit')->name('questions.edit');
Route::post('/questions/update', 'AdminController@questionupdate')->name('questions.update');
Route::get('/questions/answers/{id}', 'AdminController@questionanswers')->name('questions.answers');
Route::get('/questions/round/edit/{id}', 'AdminController@questionroundedit')->name('questions.round.edit');
Route::post('/questions/delete', 'AdminController@questiondelete')->name('questions.delete');
Route::get('/questions/new/{id}', 'AdminController@questionnew')->name('questions.new');
Route::post('/questions/new/save', 'AdminController@questionnewsave')->name('questions.new.save');




Route::post('/qinputs/delete', 'AdminController@qinputdelete')->name('qinputs.delete');
Route::get('/qinputs/edit/{id}', 'AdminController@qinputedit')->name('qinputs.edit');
Route::post('/qinputs/update', 'AdminController@qinputupdate')->name('qinputs.update');
Route::get('/qinputs/new/{id}', 'AdminController@qinputnew')->name('qinputs.new');
Route::post('/qinputs/new/save', 'AdminController@qinputnewsave')->name('qinputs.new.save');

















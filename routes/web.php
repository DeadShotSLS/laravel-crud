<?php

use App\Http\Controllers\Member\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

// Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/','HomeController@Products')->name('products');
Route::get('/view/{id}','HomeController@view')->name('view_product');

Route::get('/home', 'Member\ProductController@Products')->name('home_products');
Route::get('/ProductDelete/{id}', 'Member\ProductController@ProductDelete')->name('home_products_delete');
Route::get('/ProductUpdate/{id}', 'Member\ProductController@ProductUpdate')->name('home_products_update');

Route::get('/member/home', 'Member\HomeController@home')->name('member_home');
Route::get('/member/add', 'Member\HomeController@add')->name('product_add');
Route::get('/member/add_category', 'Member\HomeController@add_category')->name('category_add');

Route::get('/CategoryDelete/{id}','Member\CategoryController@Category_Delete')->name('category_delete');
Route::get('/CategoryUpdate/{id}','Member\CategoryController@Category_Update')->name('category_update');

Route::post('/CategoryAdd','Member\CategoryController@Category_Add')->name('add_category');
Route::post('/CategoryUpdates','Member\CategoryController@Category_Updates')->name('update_category');

Route::post('/productadd','Member\ProductController@ProductAdd')->name('add_produt');
Route::post('/ProductUpdates','Member\ProductController@ProductUpdates')->name('update_produt');

// Ajax Route

Route::get('/changeStatus','Member\ProductController@StatusUpdate')->name('change_product_status');

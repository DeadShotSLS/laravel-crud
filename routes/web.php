<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/','HomeController@Products')->name('products');

Route::get('/home', 'Member\ProductController@Products')->name('home_products');
Route::get('/member/home', 'Member\HomeController@home')->name('member_home');

Route::post('/productadd','Member\ProductController@ProductAdd')->name('add_produt');

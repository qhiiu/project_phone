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
Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {

    Route::get('a', 'Admin\Products@index');

    Route::get('bills', 'Admin\Bills@index');
    Route::get('colors', 'Admin\Colors@index');
    Route::get('images', 'Admin\Images@index');
    Route::get('news', 'Admin\News@index');
    Route::get('products', 'Admin\Products@index');
    Route::get('product_colors', 'Admin\Product_colors@index');
    Route::get('product_images', 'Admin\Product_images@index');
    Route::get('users', 'Admin\Users@index');
});

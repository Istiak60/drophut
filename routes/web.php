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
Route::get('home','Frontend\HomeController@index');

Route::get('product-details','Frontend\ProductdetailsController@index');


Route::get('404','Frontend\ErrorController@index');
Route::get('about','Frontend\AboutController@index');
Route::get('blog-details','Frontend\BlogDetailController@index');
Route::get('blog','Frontend\BlogController@index');
Route::get('cart','Frontend\CartController@index');
Route::get('checkout','Frontend\CheckoutController@index');
Route::get('contact','Frontend\ContactController@index');
Route::get('faq','Frontend\FAQController@index');
Route::get('forget-password','Frontend\ForgetPasswordController@index');
Route::get('login','Frontend\LoginController@index');




Route::get('tracking','Frontend\TrackingController@index');
Route::get('privacy-policy','Frontend\PrivacypolicyController@index');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('/', 'Backend\DashboardController@index')->name('dashboard');
    Route::resource('categories','Backend\CategoryController');
    Route::resource('products','Backend\ProductController');
    Route::resource('sliders','Backend\SliderController');
    Route::get('categories/trash/{id}', 'Backend\CategoryController@trash')->name('categories.trash');
    Route::get('categories/restore/{id}', 'Backend\CategoryController@restore')->name('categories.restore');
    Route::get('products/trash/{id}', 'Backend\ProductController@trash')->name('products.trash');
    Route::get('products/restore/{id}', 'Backend\ProductController@restore')->name('products.restore');

    Route::get('categories/trash','Backend\CategoryController@trash_index')->name('categories.trash.index');
    Route::get('products/trash','Backend\ProductController@trash_index')->name('products.trash.index');
    Route::get('sliders/trash/{id}', 'Backend\SliderController@trash')->name('sliders.trash');
    Route::get('sliders/restore/{id}', 'Backend\SliderController@restore')->name('sliders.restore');
});

Route::get('categories/trash','Backend\CategoryController@trash_index')->name('categories.trash.index');
Route::get('products/trash','Backend\CategoryController@trash_index')->name('products.trash.index');
Route::get('slider/trash','Backend\SliderController@trash_index')->name('sliders.trash.index');


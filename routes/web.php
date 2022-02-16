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


Route::get('/','Frontend\HomeController@index')->name('home');
Route::get('product-details/{id}','Frontend\ProductdetailsController@show')->name('product.details');
Route::get('404','Frontend\ErrorController@index')->name('404');
Route::get('about','Frontend\AboutController@index')->name('about');
Route::get('blog-details/{id}','Frontend\BlogDetailController@index')->name('blog-details');
Route::get('blog','Frontend\BlogController@index')->name('blog');
Route::get('cart','Frontend\CartController@index')->name('cart');
Route::get('checkout','Frontend\CheckoutController@index')->name('checkout');
Route::get('contact','Frontend\ContactController@index')->name('contact');
Route::post('contact/store','Frontend\ContactController@store')->name('contact.store');
Route::get('faq','Frontend\FAQController@index')->name('faq');
Route::get('tracking','Frontend\TrackingController@index')->name('tracking');
Route::get('privacy-policy','Frontend\PrivacypolicyController@index')->name('privacy-policy');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function(){
    Route::get('/', 'Backend\DashboardController@index')->name('dashboard');
    Route::resource('categories','Backend\CategoryController');
    Route::resource('products','Backend\ProductController');
    Route::resource('sliders','Backend\SliderController');
    Route::resource('blogs','Backend\BlogController');
    Route::resource('feedbacks','Backend\FeedbacksController');
    Route::get('feedbacks/trash/{id}', 'Backend\FeedbacksController@trash')->name('feedbacks.trash');
    Route::get('feedbacks/restore/{id}', 'Backend\FeedbacksController@restore')->name('feedbacks.restore');
    Route::get('categories/trash/{id}', 'Backend\CategoryController@trash')->name('categories.trash');
    Route::get('categories/restore/{id}', 'Backend\CategoryController@restore')->name('categories.restore');
    Route::get('products/trash/{id}', 'Backend\ProductController@trash')->name('products.trash');
    Route::get('products/restore/{id}', 'Backend\ProductController@restore')->name('products.restore');
    Route::get('categories/trash','Backend\CategoryController@trash_index')->name('categories.trash.index');
    Route::get('products/trash','Backend\ProductController@trash_index')->name('products.trash.index');
    Route::get('sliders/trash/{id}', 'Backend\SliderController@trash')->name('sliders.trash');
    Route::get('sliders/restore/{id}', 'Backend\SliderController@restore')->name('sliders.restore');
    Route::get('blogs/trash/{id}', 'Backend\BlogController@trash')->name('blogs.trash');
    Route::get('blogs/restore/{id}', 'Backend\BlogController@restore')->name('blogs.restore');
    Route::get('blogs/trash','Backend\BlogController@trash_index')->name('blogs.trash.index');
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('categories/trash','Backend\CategoryController@trash_index')->name('categories.trash.index');
    Route::get('products/trash','Backend\ProductController@trash_index')->name('products.trash.index');
    Route::get('sliders/trash','Backend\SliderController@trash_index')->name('sliders.trash.index');
    Route::get('blogs/trash','Backend\BlogController@trash_index')->name('blogs.trash.index');
    Route::get('feedbacks/trash','Backend\FeedbacksController@trash_index')->name('feedbacks.trash.index');
    Route::get('logout','Backend\LogoutController@perform')->name('admin.logout');
});


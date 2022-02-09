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

Route::get('tracking','Frontend\TrackingController@index');
Route::get('privacy-policy','Frontend\PrivacypolicyController@index');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('/', 'Backend\DashboardController@index')->name('dashboard');
    Route::resource('categories','Backend\CategoryController');
});

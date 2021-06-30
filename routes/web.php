<?php

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

Route::get('/customer', function () {
    return view('customer');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::resource('brands', 'BrandController');

Route::resource('bookings', 'BookingController');

Route::resource('cars', 'CarController');

Route::resource('categoris', 'CategoriController');

Route::resource('customers', 'CustomerController');

Route::resource('testimonis', 'TestimoniController');

Route::resource('users', 'UserController');

Route::resource('posts', 'PostController');

Route::resource('categories', 'CategoriesController');
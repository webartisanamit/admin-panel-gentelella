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

Route::namespace('App\Http\Controllers')->group(function() {
    Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function() {

        Route::get('/', function () {
            return redirect(route('admin.dashboard'));
        })->name('home');

        Route::get('login', 'AuthController@loginform')->name('loginForm');
        Route::post('login', 'AuthController@login')->name('login');
        Route::get('forget-password','AuthController@forgetForm')->name('forgetForm');
        Route::get('logout', 'AuthController@logout')->name('logout');
        Route::get('dashboard','DashboardController@dashboard')->name('dashboard');
        Route::get('profile','AuthController@profile')->name('profile');
        Route::get('change-password', 'AuthController@changePasswordForm')->name('changePassword');

        Route::resource('admins', 'AdminController');
        Route::resource('users', 'UsersController');
        Route::resource('drivers', 'DriverController');
        Route::resource('categories', 'CategoryController');
        Route::resource('brands', 'BrandController');
        Route::resource('products', 'ProductController');
        Route::resource('pages', 'PageController');
        Route::resource('faqs', 'FaqsController');
    });
});

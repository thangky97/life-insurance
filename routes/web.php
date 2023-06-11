<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/products', function () {
    return view('product');
});

Route::get('/news', function () {
    return view('product');
});

Route::get('/introduce', function () {
    return view('introduce');
});

Route::get('/recruitment', function () {
    return view('recruitment');
});

Route::prefix('admin')->group(function () {

    Route::get('/dashboard', 'Admin\DashboardController@index')->name('route_BackEnd_Dashboard');

    // Route::prefix('/profile')->group(function () {
    //     Route::get('/edit/{id}', 'Admin\ProfileController@edit')->name('route_BackEnd_Profile_Edit');
    //     Route::post('/update/{id}', 'Admin\ProfileController@update')->name('route_BackEnd_Profile_Update');
    //     Route::post('/updatePassword/{id}', 'Admin\ProfileController@update_password')->name('route_BackEnd_Admin_Update_Password');
    // });

    Route::prefix('/users')->group(function () {
        Route::get('/', 'Admin\UserController@index')->name('route_BackEnd_Users_List');
        Route::match(['get', 'post'], '/create', 'Admin\UserController@create')->name('route_BackEnd_Users_Create');
        Route::get('/edit/{id}', 'Admin\UserController@edit')->name('route_BackEnd_Users_Edit');
        Route::post('/update/{id}', 'Admin\UserController@update')->name('route_BackEnd_Users_Update');
        Route::get('/remove/{id}', 'Admin\UserController@remove')->name('route_BackEnd_Users_Remove');
    });

    Route::prefix('/customer')->group(function () {
        Route::get('/', 'Admin\CustomerController@index')->name('route_BackEnd_Customers_List');
        Route::match(['get', 'post'], '/create', 'Admin\CustomerController@create')->name('route_BackEnd_Customers_Create');
        Route::get('/edit/{id}', 'Admin\CustomerController@edit')->name('route_BackEnd_Customers_Edit');
        Route::post('/update/{id}', 'Admin\CustomerController@update')->name('route_BackEnd_Customers_Update');
        Route::get('/remove/{id}', 'Admin\CustomerController@remove')->name('route_BackEnd_Customers_Remove');
    });

    Route::prefix('/services')->group(function () {
        Route::get('/', 'Admin\ServiceController@index')->name('route_BackEnd_Services_List');
        Route::match(['get', 'post'], '/create', 'Admin\ServiceController@create')->name('route_BackEnd_Services_Create');
        Route::get('/edit/{id}', 'Admin\ServiceController@edit')->name('route_BackEnd_Services_Edit');
        Route::post('/update/{id}', 'Admin\ServiceController@update')->name('route_BackEnd_Services_Update');
        Route::get('/remove/{id}', 'Admin\ServiceController@remove')->name('route_BackEnd_Services_Remove');
    });

});
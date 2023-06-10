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
        Route::match(['get', 'post'], '/add', 'Admin\UserController@add')->name('route_BackEnd_Users_Add');
        Route::get('/edit/{id}', 'Admin\UserController@edit')->name('route_BackEnd_Users_Edit');
        Route::post('/update/{id}', 'Admin\UserController@update')->name('route_BackEnd_Users_Update');
        Route::get('/remove/{id}', 'Admin\UserController@remove')->name('route_BackEnd_Users_Remove');
    });

});
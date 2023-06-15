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

Route::get('/', 'Client\HomeController@index')->name('route_FrontEnd_Home');

Route::get('/services', 'Client\ServiceController@index')->name('route_FrontEnd_Service');
Route::get('/services/detail/{id}', 'Client\ServiceController@detail')->name('route_FrontEnd_Service_Detail');

Route::get('/news', 'Client\NewController@index')->name('route_FrontEnd_News');
Route::get('/news/detail/{id}', 'Client\NewController@detail')->name('route_FrontEnd_News_Detail');

Route::get('/contact', 'Client\ContactController@index')->name('route_FrontEnd_Contact');

Route::get('/introduce', 'Client\IntroduceController@index')->name('route_FrontEnd_Introduce');

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

    Route::prefix('/setting_home')->group(function () {
        Route::get('/', 'Admin\SettingHomeController@index')->name('route_BackEnd_Setting_Home_List');
        Route::get('/edit/{id}', 'Admin\SettingHomeController@edit')->name('route_BackEnd_Setting_Home_Edit');
        Route::post('/update/{id}', 'Admin\SettingHomeController@update')->name('route_BackEnd_Setting_Home_Update');
    });

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

    Route::prefix('/insurance_services')->group(function () {
        Route::get('/', 'Admin\InsuranceServicesController@index')->name('route_BackEnd_Insurance_Services_List');
        Route::match(['get', 'post'], '/create', 'Admin\InsuranceServicesController@create')->name('route_BackEnd_Insurance_Services_Create');
        Route::get('/edit/{id}', 'Admin\InsuranceServicesController@edit')->name('route_BackEnd_Insurance_Services_Edit');
        Route::post('/update/{id}', 'Admin\InsuranceServicesController@update')->name('route_BackEnd_Insurance_Services_Update');
        Route::get('/remove/{id}', 'Admin\InsuranceServicesController@remove')->name('route_BackEnd_Insurance_Services_Remove');
    });

    Route::prefix('/banner')->group(function () {
        Route::get('/', 'Admin\BannerController@index')->name('route_BackEnd_Banner_List');
        Route::match(['get', 'post'], '/create', 'Admin\BannerController@create')->name('route_BackEnd_Banner_Create');
        Route::get('/edit/{id}', 'Admin\BannerController@edit')->name('route_BackEnd_Banner_Edit');
        Route::post('/update/{id}', 'Admin\BannerController@update')->name('route_BackEnd_Banner_Update');
        Route::get('/remove/{id}', 'Admin\BannerController@remove')->name('route_BackEnd_Banner_Remove');
    });

    Route::prefix('/news')->group(function () {
        Route::get('/', 'Admin\NewController@index')->name('route_BackEnd_News_List');
        Route::match(['get', 'post'], '/create', 'Admin\NewController@create')->name('route_BackEnd_News_Create');
        Route::get('/edit/{id}', 'Admin\NewController@edit')->name('route_BackEnd_News_Edit');
        Route::post('/update/{id}', 'Admin\NewController@update')->name('route_BackEnd_News_Update');
        Route::get('/remove/{id}', 'Admin\NewController@remove')->name('route_BackEnd_News_Remove');
    });

    Route::prefix('/customers_use')->group(function () {
        Route::get('/', 'Admin\CustomerUseController@index')->name('route_BackEnd_Customers_Use_List');
        Route::match(['get', 'post'], '/create', 'Admin\CustomerUseController@create')->name('route_BackEnd_Customers_Use_Create');
        Route::get('/edit/{id}', 'Admin\CustomerUseController@edit')->name('route_BackEnd_Customers_Use_Edit');
        Route::post('/update/{id}', 'Admin\CustomerUseController@update')->name('route_BackEnd_Customers_Use_Update');
        Route::get('/remove/{id}', 'Admin\CustomerUseController@remove')->name('route_BackEnd_Customers_Use_Remove');
    });

    Route::prefix('/ask_question')->group(function () {
        Route::get('/', 'Admin\AskQuestionController@index')->name('route_BackEnd_Ask_Question_List');
        Route::match(['get', 'post'], '/create', 'Admin\AskQuestionController@create')->name('route_BackEnd_Ask_Question_Create');
        Route::get('/edit/{id}', 'Admin\AskQuestionController@edit')->name('route_BackEnd_Ask_Question_Edit');
        Route::post('/update/{id}', 'Admin\AskQuestionController@update')->name('route_BackEnd_Ask_Question_Update');
        Route::get('/remove/{id}', 'Admin\AskQuestionController@remove')->name('route_BackEnd_Ask_Question_Remove');
    });

});
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

Route::group(['middleware'=>'admin'], function() {
    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::resource('/admin/charts', 'ChartsController');
    Route::resource('/admin/users', 'UserController');
    Route::resource('/admin/roles', 'RolesController');
    Route::resource('/admin/weeks', 'WeeksController');
    Route::resource('/admin/categories', 'CategoriesController');
    Route::resource('/admin/status', 'StatusController');
    Route::resource('/admin/inquiry', 'InquiriesController');
    Route::resource('/admin/inquirytype', 'InquiryTypeController');
    Route::resource('/admin/monthlychart', 'MonthlyChartsController');
    Route::resource('/admin/monthly', 'MonthsController');
    Route::get('/admin/weeklyReports', 'ReportsController@weeklyReports')->name('weekly_report');
    Route::get('/admin/monthlyReports', 'ReportsController@monthlyReports')->name('monthly_report');
    Route::get('/admin/test', 'InquiryTypeController@getAllInquiriesAllWeeks');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

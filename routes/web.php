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
    return view('auth.login');
});
Route::group(['middleware'=>'admin'], function() {
    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::resource('/admin/users', 'UserController');
    Route::resource('/admin/roles', 'RolesController');
    Route::resource('/admin/weeks', 'WeeksController');
    Route::resource('/admin/categories', 'CategoriesController');
    Route::resource('/admin/status', 'StatusController');
    Route::resource('/admin/inquiry', 'InquiriesController');
    Route::get('/admin/filter', 'InquiriesController@filter')->name('filter');
    Route::get('/admin/filterCat', 'InquiriesController@filterCat')->name('filterCat');
    Route::get('/admin/dateRange', 'InquiriesController@dateRange')->name('dateRange');
    Route::get('/admin/export', 'InquiriesController@export')->name('export');
    Route::get('/admin/exportByStatus', 'InquiriesController@exportByStatus')->name('exportByStatus');
    Route::resource('/admin/inquirytype', 'InquiryTypeController');
    Route::resource('/admin/monthly', 'MonthsController');
    Route::get('/admin/weeklyReports', 'ReportsController@weeklyReports')->name('weekly_report');
    Route::get('/admin/seller', 'ReportsController@seller')->name('seller');
    Route::get('/admin/monthlyReports', 'ReportsController@monthlyReports')->name('monthly_report');
    Route::get('admin/audits', 'AuditController@index')->name('audit');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

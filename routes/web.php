<?php

use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\Admin\DashboardController;

//include('web_builder.php');

//dd('ddd');
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
// require __DIR__.'/auth.php';
// Auth::routes();

//Route::get('/', function () {
 //   return view('welcome');
//});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

//require __DIR__.'/auth.php';

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
//dd('ddd');

Route::middleware('auth:web')->group(function () {
    //Route::get('/', 'Admin\DashboardController@dashboard');
    Route::get('/', 'App\Http\Controllers\Admin\DashboardController@dashboard')->name('dashboard');
    Route::get('/dashboard', 'App\Http\Controllers\Admin\DashboardController@dashboard')->name('dashboard');

    Route::get('/customer/list', 'App\Http\Controllers\Admin\CustomerController@index')->name('customer-list');
    Route::post('/customer/data', 'App\Http\Controllers\Admin\CustomerController@data')->name('customer-data');
    Route::get('/customer/create', 'App\Http\Controllers\Admin\CustomerController@create')->name('customer-create');
    Route::post('/customer/store', 'App\Http\Controllers\Admin\CustomerController@store')->name('customer-store');
    Route::get('/customer/{id}/edit', 'App\Http\Controllers\Admin\CustomerController@edit')->name('customer-edit');
    Route::post('/customer/{id}/update', 'App\Http\Controllers\Admin\CustomerController@update')->name('customer-update');

    Route::get('/report/growth_rate_monitoring_report', 'App\Http\Controllers\Admin\GrowthRateMonitoringReportController@index')->name('report-growth-rate-monitoring-report');
    


});
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

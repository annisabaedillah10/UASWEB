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

Route::resource('/', 'HomeController');
Route::resource('/about', 'AboutPageController');
Route::resource('/winningontheissues', 'WinningontheissuesPageController');
Route::resource('/buildingfower', 'BuildingfowerPageController');
Route::resource('/newsletters', 'NewslettersPageController');



Route::prefix('admin')
    ->namespace('Admin')
    ->group(function() {
    Route::resource('/', 'DashboardController');
    Route::resource('/about', 'AboutController');
    Route::resource('/winningontheissues', 'WinningontheissuesController');
    Route::resource('/buildingfower', 'BuildingfowerController');
    Route::resource('/newsletters', 'NewslettersController');
   
   


    });

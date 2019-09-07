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
    return view('sheet.create');
});

Route::get('/sheet/create', 'GongthamSheetInfoController@create');
Auth::routes();
   // ** admin group
   Route::group([
    // 'prefix' => 'admin',
    'middleware' => 'auth'
    ], function() {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/sheet', 'GongthamSheetInfoController@index');
        Route::get('/sheet/view/{id}', 'GongthamSheetInfoController@show');

    });


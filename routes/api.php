<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/snr/all', 'SnrController@getAll');
Route::post('/sheet', 'GongthamSheetInfoController@store');

Route::post('/generatepdf', 'InfoschoolController@generatepdf');
Route::get('/ss/fitter/{snr_id}', 'SsController@getid');

Route::get('sheet/data', 'GongthamSheetInfoController@sheetdata');

Route::get('sheet/show/{id}', 'GongthamSheetInfoController@sheetshow');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();


});
Route::group([
    // 'prefix' => 'admin',
    'middleware' => 'auth:api'
    ], function() {

          });

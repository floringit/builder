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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'api'], function () {
    Route::group(['prefix' => 'v1'], function () {
    });
});

Route::resource('page', 'Api\v1\PageController');
Route::get('page/{column}/{value}', ['uses' => 'Api\v1\PageController@show'])->where([
    'column' => '[a-zA-Z]+',
    'value' => '[a-zA-Z0-9]+',
]);

Route::resource('website', 'Api\v1\WebsiteController');
Route::get('website/{column}/{value}', ['uses' => 'Api\v1\WebsiteController@show'])->where([
    'column' => '[a-zA-Z]+',
    'value' => '[a-zA-Z0-9]+',
]);

Route::resource('content', 'Api\v1\ContentController');
Route::get('content/{column}/{value}', ['uses' => 'Api\v1\ContentController@show'])->where([
    'column' => '[a-zA-Z]+',
    'value' => '[a-zA-Z0-9]+',
]);

Route::resource('content-setting', 'Api\v1\ContentSettingController');
Route::get('content-setting/{column}/{value}', ['uses' => 'Api\v1\ContentSettingController@show'])->where([
    'column' => '[a-zA-Z]+',
    'value' => '[a-zA-Z0-9]+',
]);
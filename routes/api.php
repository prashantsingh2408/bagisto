<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api;
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

Route::group(
    ['prefix' => 'api'],
    function ($router) {

        Route::post('customer/registerMobile', 'CustomerController@createMobile');
        Route::get('slidersget', 'ResourceController@sliderget');
    }
);
Route::get('/api/sliderget','ResourceController@sliderget');

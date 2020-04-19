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
    return [
        'Project' => 'GoKada API',
        'version' => '1.0'
    ];
});

Route::group(['middleware' => 'web'], function () {
    Route::get('/api/v1/authenticate', 'AuthenticationController@authenticate');
    Route::post('/api/v1/register', 'AuthenticationController@register');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::post('/api/v1/request-order', 'OrderController@requestOrder');
    Route::post('/api/v1/request-delivery', 'OrderController@requestDelivery');
    Route::post('/api/v1/driver-arrived', 'WayPointController@driverArrived');
    Route::post('/api/v1/pickedup-parcel', 'WayPointController@pickedupParcel');
    Route::post('/api/v1/dropoffed-parcel', 'WayPointController@dropoffedParcel');
    Route::post('/api/v1/submit-rating', 'DriverRatingController@create');
});
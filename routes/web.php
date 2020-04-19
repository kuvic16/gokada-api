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
Route::get('/api/v1/storm_reports', 'ApiController@stormReports');
Route::get('/api/v1/tornado_warning', 'ApiController@tornadoWarning');

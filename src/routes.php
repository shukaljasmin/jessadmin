<?php

use shukaljasmin\jessadmin\Middleware\AdminCheck;

Route::get('/get_path',function()
{
    return JAM::getCreds();
});

Route::group(['middleware' => ['web']], function () 
{
    Route::prefix('admin')->group(function () {

        Route::group(['namespace' => 'Shukaljasmin\jessadmin\Controllers'], function()
        {
            Route::get('/','JessadminController@index');
            Route::post('/jesslogin','JessadminController@admin_login')->name('jesslogin');
            Route::get('/jess_sesstion','JessAdminSessionController@show');
            Route::get('/jess_home','JessadminController@home')->middleware('AdminCheck');
        });
    });
});

<?php
// Route::get('/jessadmin',function()
// {
//     return "test jess admin ";
// });
use shukaljasmin\jessadmin\Middleware\AdminCheck;

Route::get('/get_path',function()
{
    return JAM::getCreds();
});

Route::group(['middleware' => ['web']], function () 
{
    Route::prefix('admin')->group(function () {
        Route::get('/','shukaljasmin\jessadmin\Controllers\JessadminController@index');
        Route::post('/jesslogin','shukaljasmin\jessadmin\Controllers\JessadminController@admin_login')->name('jesslogin');

        Route::get('/jess_sesstion','shukaljasmin\jessadmin\Controllers\JessAdminSessionController@show');
        
        Route::get('/jess_home','shukaljasmin\jessadmin\Controllers\JessadminController@home')->middleware('AdminCheck');
    });
});

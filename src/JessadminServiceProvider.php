<?php

namespace shukaljasmin\jessadmin;

use Illuminate\Support\ServiceProvider;
// use shukaljasmin\jessadmin\Facades\jessadmin;
use shukaljasmin\jessadmin\Library\jessadmin;
use shukaljasmin\jessadmin\Middleware\AdminCheck;


class JessadminServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //+
        $this->app->bind('Jam',function($app)
        {
            return new jessadmin(config('jessadmin.path'));
        });
        $router = $this->app['router'];

       
        // $router->pushMiddlewareToGroup('web', jessadmin\Middleware\AdminCheck::class);
        
        define('JESS_ADMIN_LOGIN_ACTION',"jesslogin");

        // $this->app->bind('fbm',function($app)
        // {
        //     return new Facebook(config('facebook.fb'));
        // });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // $this->app->bind('jam',function($app)
        // {

        // });

        $this->loadRoutesFrom(__DIR__."/routes.php");

        $this->publishes([
            __DIR__.'/Config/jessadmin.php' => config_path('jessadmin.php')
        ], 'config');


        $this->loadViewsFrom(__DIR__.'/views','Jam');

        $this->loadMigrationsFrom(__DIR__.'/migrations','Jam');

    }
}

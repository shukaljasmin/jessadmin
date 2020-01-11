<?php
namespace shukaljasmin\jessadmin\Facades;

use Illuminate\Support\Facades\Facade;

class jessadmin extends Facade
{
    public static function getFacadeAccessor()
    {
        return "Jam";
    }

}
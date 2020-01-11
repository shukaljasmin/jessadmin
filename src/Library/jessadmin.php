<?php
namespace shukaljasmin\jessadmin\Library;

class jessadmin
{
    private $login_url;
    // private $fbsecrete;
    // private $fburl;

    public function __construct($jessadmin)
    {
        $this->login =$jessadmin['login'];
        $this->test_login =$jessadmin['test_login'];
    }

    public function getCreds(){
        return [
            'fb_login' => $this->login,
            'fb_test_login' => $this->test_login,
        ];
    }
}
<?php

namespace App\Controllers;

class CheckEnv extends BaseController
{
    public function index()
    {
        echo "CI_ENVIRONMENT: " . ($_ENV['CI_ENVIRONMENT'] ?? 'NOT SET') . "<br>";
        echo "ENVIRONMENT: " . ENVIRONMENT . "<br>";
        echo "display_errors: " . ini_get('display_errors') . "<br>";
        echo "error_reporting: " . error_reporting() . "<br>";
        
        // ทดสอบ error
        // trigger_error("This is a test error", E_USER_NOTICE);
    }
}
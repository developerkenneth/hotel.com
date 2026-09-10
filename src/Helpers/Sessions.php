<?php

namespace App\Helpers;

class Sessions
{


    public static function start()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function CheckCsrf($token)
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        if (!isset($_SESSION['csrf_token'])) {
            return false;
        }

        if ($token !== $_SESSION['csrf_token']) {
            return false;
        }

        return true;
    }
}

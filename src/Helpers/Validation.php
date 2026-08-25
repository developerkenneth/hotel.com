<?php

namespace App\Helpers;


class Validation
{
    public static function isEmail($string)
    {
        return filter_var($string, FILTER_VALIDATE_EMAIL);
    }

    public static function isPassword($password_string)
    {
        return (strlen($password_string) >= 6) ? true : false;
    }
}

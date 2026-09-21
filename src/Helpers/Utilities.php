<?php

namespace App\Helpers;

class Utilities
{

    public static function hashPassword($passwordString)
    {

        // salt
        $salt = "7b1d1185b835814de783483f686e9825";
        $salted = "$salt+$passwordString";
        return password_hash($salted, PASSWORD_BCRYPT);
    }

    public static function verifyHashpassword($passwordString, $hashPassword)
    {
        $salt = "7b1d1185b835814de783483f686e9825";
        $salted = "$salt+$passwordString";
        return password_verify($salted, $hashPassword);
    }

    public static function sanitize($input)
    {
        return htmlspecialchars(htmlentities(trim($input)));
    }


    // generates random characters
    public static function CSRF_token()
    {
        return bin2hex(random_bytes(32));
    }

    public static function is_blank($value)
    {
        return !isset($value) || trim($value) === "";
    }

    public static function secondsToDays($seconds)
    {
        // Get total days as a float/decimal
        $days = $seconds / 86400;

        // If you want a whole number, use floor() or round()
        $days = floor($days); // Output: 3
        return $days;
    }

    public static function isLessThanToday($timeStamp)
    {
        $difference = time() - $timeStamp;
        $days =  self::secondsToDays($difference);
        if ($days >= 1) {
            return true;
        }
        return false;
    }
}

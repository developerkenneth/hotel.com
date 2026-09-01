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
}

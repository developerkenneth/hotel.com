<?php

namespace App\Middleware;

use App\Helpers\Utilities;
use App\Models\Model;

class Authentication
{



    public static function processLogin($email, $password)
    {
        $user = Model::find(['email' => $email], 'users');

        if (!empty($user)) {
            $userHashedPassword = $user['password'];
            if (Utilities::verifyHashpassword($password, $userHashedPassword)) {
                // verified user logins 
                //set login session
                session_start();
                $_SESSION['user'] = $user;
                $_SESSION['user_id'] = $user['id'];
                return true;
            }

            return false;
        }

        return false;
    }
}

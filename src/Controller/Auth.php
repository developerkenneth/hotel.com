<?php

namespace App\Controller;

use App\Controller\Controller;
use App\Helpers\Response;
use App\Helpers\Validation;
use App\Helpers\View;
use App\Middleware\Authentication;

class Auth extends Controller
{
    public function showLogin()
    {
        // show login form
        View::handleView("login.php");
        return;
    }


    public function login()
    {
        $rawData = file_get_contents("php://input");
        $data = json_decode($rawData, true);

        $errors = [];

        if (empty($data)) {
            $errors[] = "password and email is required";
        }
        if (isset($data['email']) && empty(trim($data['email']))) {
            $errors[] = "email is required";
        }

        if (isset($data['password']) && empty(trim($data['password']))) {
            $errors[] = "password is required";
        }


        if (!empty($errors)) {
            Response::json([
                'message' => 'failed validation',
                'errors' => $errors
            ], 422);
            exit;
        }


        $email = $data['email'];
        $password = $data['password'];

        if (!Validation::isEmail($email)) {
            $errors[] = 'invalid email, please check email and try again';
        }


        if (!empty($errors)) {
            Response::json([
                'message' => 'failed validation',
                'errors' => $errors
            ], 422);
            exit;
        }


        if (Authentication::processLogin($email, $password)) {
            Response::json([
                'message' => 'validation has been concluded succefully',
                'success' => true
            ], 200);
            exit;
        } else {
            Response::json([
                'message' => 'invalid credentials',
                'errors' => $errors
            ], 422);
            exit;
        }
    }
}

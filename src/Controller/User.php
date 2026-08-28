<?php

namespace App\Controller;

use App\Controller\Controller;
use App\Helpers\Response;
use App\Helpers\Utilities;
use App\Helpers\Validation;
use App\Helpers\View;
use App\Models\Model;

class User extends Controller
{

    // show registration form
    public function show()
    {
        View::handleView("register.php");
    }


    // handle post request and stores the data in the database
    public function store()
    {

        $errors = [];

        $rawData = file_get_contents("php://input");
        $datas = json_decode($rawData, true);
        $required_fields = ['email', 'first_name', 'last_name', 'password', 'confirm_password'];

        // validation for required fields
        foreach ($required_fields as $field) {
            if (!isset($datas[$field])) {
                array_push($errors, "$field is required");
            }
        }

        if (!empty($errors)) {
            Response::json([
                'message' => 'failed validation',
                'errors' => $errors,
                'success' => false
            ]);
            exit;
        }

        // validation for empty fields
        foreach ($datas as $field => $value) {
            if (empty(trim($value)) && in_array($field, $required_fields)) {
                array_push($errors, "$field cannot be empty");
            }
        }

        if (!empty($errors)) {
            Response::json([
                'message' => 'failed validation',
                'errors' => $errors,
                'success' => false
            ]);
            exit;
        }


        // validate email
        if (!Validation::isEmail($datas['email'])) {
            $errors[] = "invalid email {$datas['email']}";
        }

        // validate email
        if (!Validation::isPassword($datas['password'])) {
            $errors[] = "invalid password. password should be at least 6 characters long";
        }

        if ($datas['password'] !== $datas['confirm_password']) {
            $errors[] = "password does not match";
        }

        // EMAIL ALREADY EXIST
        $result =  Model::find(['email' => $datas['email']], 'users');
        if (count($result) >= 1) {
            $errors[] = "email already exist. please try another email ";
        }

        if (!empty($errors)) {
            Response::json([
                'message' => 'failed validation',
                'errors' => $errors,
                'success' => false
            ]);
            exit;
        }


        // create new user
        // clean users input
        array_walk($datas, function ($string) {
            Utilities::sanitize($string);
        });

        $datas['password'] = Utilities::hashPassword($datas['password']);
        // unsetting confirm be creating user
        unset($datas['confirm_password']);

        try {


            $result =  Model::create($datas);
            if ($result) {
                Response::json([
                    'message' => 'validation successful',
                    'user' => $datas,
                    'success' => true
                ], 201);
                exit;
            }

            Response::json([
                'message' => 'ooops! something went wrong please try again',
                'user' => null,
                'success' => false
            ], 500);
            exit;
        } catch (\PDOException $error) {
            Response::json([
                'message' => $error->getMessage(),
                'user' => null,
                'success' => false
            ], 500);
            exit;
        }
    }
}

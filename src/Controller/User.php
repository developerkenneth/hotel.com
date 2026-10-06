<?php

namespace App\Controller;

use App\Controller\Controller;
use App\Helpers\Response;
use App\Helpers\Sessions;
use App\Helpers\Utilities;
use App\Helpers\Validation;
use App\Helpers\View;
use App\Middleware\Authentication;
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
            ], 400);
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
            ], 400);
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


            $result =  Model::create($datas, 'users');

            if ($result) {
                Response::json([
                    'message' => 'created successful',
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


    // create a show settings controller shows the view of the update form - Chisom & Chibuike
    public function showUpdateProfileForm()
    {
        View::handleView('user-views/settings.php');
    }

    // update api function - Chisom & Chibuike
    public function updateUser()
    {
        $rawData = file_get_contents("php://input");
        $datas = json_decode($rawData, true);
        $errors = [];

        $required_fields = ['first_name', 'last_name', 'email'];

        foreach ($required_fields as $field) {
            if (!isset($datas[$field]) || empty(trim($datas[$field]))) {
                $errors[] = "$field is required and cannot be empty";
            }
        }

        if (isset($datas['email']) && !empty(trim($datas['email']))) {
            if (!Validation::isEmail($datas['email'])) {
                $errors[] = "Invalid email format";
            }
        }

        if (!empty($errors)) {
            Response::json([
                'message' => 'Failed validation',
                'errors' => $errors,
                'success' => false
            ], 400);
            exit;
        }


        // checking if the newly updated email belongs to the user

        $userWithEmail = Model::find([
            'email' => $datas['email']
        ], 'users');

        Sessions::start();
        $user = (new Authentication)->user();


        if (!empty($userWithEmail)) {
            if ($userWithEmail['id'] !== $user['id']) {
                $errors[] = "email is already taken. please try another email";
            }
        }

        Response::json([
            'message' => 'Validation passed successfully',
            'data' => Model::update("users", $datas, $user['id']),
            'success' => true
        ], 200);
    }


    public function dashboard()
    {
        $model = new Model();
        $pendingBookings = $model->getAll('bookings', ['status' => 'confirmed']);
        $activeBookings = $model->getAll('bookings', ['status' => 'check_in']);
        $completed = $model->getAll('bookings', ['status' => 'check_out']);
        $latestBookings = $model->getAll('bookings', null, 3);

        View::handleView('user-views/dashboard.php', [
            'pending_bookings' => $pendingBookings,
            'active_bookings' => $activeBookings,
            'completed_stay' => $completed,
            'latest' => $latestBookings
        ]);
    }

    // show bookings
    public function bookingHistory()
    {
        $model = new Model();
        // first 10
        $bookings = $model->getAll('bookings', null, 10);

        View::handleView('user-views/bookings.php', ['bookings' => $bookings]);
    }

    public function showSettings()
    {
        View::handleView('user-views/settings.php');
    }


    // updatePassword

    public static function passwordUpdate()
    {

        $errors = [];
        $rawData = file_get_contents("php://input");
        $datas = json_decode($rawData, true);

        // validate if password or confirm_password is empty before updating password --- chidera
        // also validate that the current password matches the users current password
        // password (new password) === confirm_password

        Sessions::start();
        $user = (new Authentication)->user();

        $currentPassword = $datas['current_password'];
        $newPassword = $datas['new_password'];
        $confirmPassword = $datas['confirm_password'];

        // validate if password fields are empty
        if (empty($currentPassword) || empty($newPassword) || empty($confirmPassword)) {
            $errors[] = "password fields cannot be empty";
        }

        // validate if current password matches user's current password
        if (!empty($currentPassword) && !empty($user['password'])) {
            if (!Utilities::verifyHashpassword($currentPassword, $user['password'])) {
                $errors[] = "current password is incorrect";
            }
        }

        // validate if new password matches confirm password
        if ($newPassword !== $confirmPassword) {
            $errors[] = "password failed confirmation. please ensure that the password matches the confirm password";
        }





        // update the password

        // $newPassword = $datas['new_password'];
        // $confirmPassword = $datas['confirm_password'];

        // if ($newPassword !== $confirmPassword) {
        //     $errors[] = "password failed confirmation. please ensure that the password matches the confirm password";
        // }

        if (!empty($errors)) {
            Response::json([
                'message' => 'failed validation',
                'errors' => $errors,
                'success' => false
            ], 400);
            exit;
        }

        // hash the password
        $passworHashed = Utilities::hashPassword($newPassword);
        $currentUser = Authentication::user();
        try {
            if (Model::update("users", ['password' => $passworHashed], $currentUser['id'])) {
                Response::json([
                    'message' => 'password has been updated successfully',
                    'success' => true
                ], 201);
            }
        } catch (\PDOException $error) {
            Response::json([
                'message' => 'failed to update password',
                'errors' => [$error->getMessage()],
                'success' => true
            ], 500);
        }
    }
}

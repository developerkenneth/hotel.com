<?php

namespace App\Controller;

use App\Controller\Controller;
use App\Helpers\Helper;
use App\Helpers\Response;
use App\Helpers\Sessions;
use App\Helpers\Utilities;
use App\Helpers\Validation;
use App\Helpers\View;
use App\Middleware\Authentication;
use App\Models\Model;

use Mailtrap\Helper\ResponseHelper;
use Mailtrap\MailtrapClient;
use Mailtrap\Mime\MailtrapEmail;
use Symfony\Component\Mime\Address;

class Auth extends Controller
{
    public function showLogin()
    {
        // show login form
        View::handleView("login.php");
        return;
    }

    public function showRecover()
    {
        // show login form
        View::handleView("recover.php");
        return;
    }

    public function login()
    {

        $rawData = file_get_contents("php://input");
        $data = json_decode($rawData, true);


        // handles the errors that we get
        $errors = [];


        if (!isset($data['csrf_token'])) {
            $errors[] = "unauthorized request";

            Response::json([
                'message' => 'unauthorized request',
                'success' => false,
                'errors' => $errors
            ], 401);
            exit;
        }

        if (!Sessions::CheckCsrf($data['csrf_token'])) {

            $errors[] = "unauthorized request";
            Response::json([
                'message' => 'unauthorized request',
                'success' => false,
                'errors' => $errors
            ], 401);
            exit;
        }

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




        if (Authentication::processLogin($email, $password) === true) {
            Response::json([
                'message' => 'User has been logged in successfully',
                'success' => true
            ], 200);
            exit;
        } else if (Authentication::processLogin($email, $password) === false) {

            $errors[] = 'invalid credentials';

            Response::json([
                'message' => 'invalid credentials',
                'errors' => $errors
            ], 422);
            exit;
        } else if (Authentication::processLogin($email, $password) === 'suspended') {

            $errors[] = 'iyour account has been suspend, please contact admin to rectify';

            Response::json([
                'message' => 'your account has been suspend, please contact admin to rectify',
                'errors' => $errors
            ], 422);
            exit;
        }
    }

    public function adminRequest()
    {
        Sessions::start();

        if (!Authentication::isLoggedIn() || Authentication::isAdmin() === false) {
            http_response_code(401);
            View::handleView('unauthorize.php');
            exit();
        } else {
            return;
        }
    }


    public function unauthorizeRequest()
    {
        Sessions::start();

        if (!Authentication::isLoggedIn()) {
            http_response_code(401);

            View::handleView('unauthorize.php');
            exit();
        }

        if (Authentication::isBlocked()) {
            echo " blocked";
            exit();
        }


        return;
    }


    public function logout()
    {
        Sessions::start();
        // destroy all sessions
        session_destroy();
        header('location:/hotel.com/auth/login');
        exit;
    }


    // password recovery
    public function recover()
    {
        $rawData = file_get_contents('php://input');
        $data = json_decode($rawData, true);
        // validate email for backend  (onyeka)


        // get user from email
        $user = Model::find(['email' => $data['email']], 'users');

        if (empty($user)) {
            // UPDATE IN DATABASE
            Response::json(
                [
                    'message' => 'if this email exist you will receive an email with your new password',
                    'success' => true
                ],
                201
            );

            exit;
        }

        $currentTime = time();
        // generate new password
        $encoded = md5($currentTime);

        $new_password = substr($encoded, 0, 7);
        // hash new password    

        $hashed = Utilities::hashPassword($new_password);



        // UPDATE IN DATABASE

        Model::update('users', ['password' => $hashed], $user['id']);
        // send user an email with new password


        $apiKey = '62e20e911c514a9fa1e14fb97fa15926';
        $mailtrap = MailtrapClient::initSendingEmails(
            apiKey: $apiKey,
        );

        $email = (new MailtrapEmail())
            ->from(new Address('hello@demomailtrap.co', 'Mailtrap Test'))
            ->to(new Address("{$data['email']}"))
            ->subject('Password recovery')
            ->text("here is ur new password : {$new_password}")
            ->category('Integration Test');

        $response = $mailtrap->send($email);


        Response::json(
            [
                'message' => 'if this email exist you will receive an email with your new password',
                'success' => $response
            ],
            201
        );

        exit;
    }
}

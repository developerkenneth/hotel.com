<?php

namespace App\Controller;

use App\Controller\Controller;
use App\Helpers\Response;
use App\Helpers\View;
use App\Models\Model;

class AdminController extends Controller
{

    public function dashboard()
    {
        View::handleView('admin/dashboard.php');
    }
    public function rooms()
    {
        $model = new Model();
        $rooms = $model->getAll('rooms');
        View::handleView('admin/rooms.php', ['rooms' => $rooms]);
    }
    public function management()
    {
        $model = new Model();
        $users = $model->getAll('users');
        View::handleView('admin/management.php', ['users' => $users]);
    }


    public function suspendUser()
    {

        $errors = [];
        // get json data 
        $rawData = file_get_contents('php://input');
        $data = json_decode($rawData, true);
        if (empty($data)) {

            $errors[] = 'data cannot be empty';
            Response::json([
                'message' => 'failed to process data',
                'errors' =>  $errors
            ], 400);

            exit;
        }

        if (!isset($data['user_id']) || empty($data['user_id'])) {
            $errors[] = 'user id is required ';
            Response::json([
                'message' => 'failed to process data',
                'errors' =>  $errors
            ], 400);
            exit;
        }

        if (!isset($data['type']) || empty($data['type'])) {
            $errors[] = 'type is required ';
            Response::json([
                'message' => 'failed to process data',
                'errors' =>  $errors
            ], 400);
            exit;
        }

        if ($data['type'] === 'suspend') {
            Model::update('users', ['account_status' => 'suspended'], $data['user_id']);
            Response::json([
                'message' => 'suspended user successfully',
                'success' =>  true
            ], 201);
            exit;
        }


        Model::update('users', ['account_status' => null], $data['user_id']);
        Response::json([
            'message' => 'unsuspend user successfully',
            'success' =>  true
        ], 201);
        exit;
    }
}

<?php

namespace App\Controller;

use App\Helpers\Response;
use App\Helpers\View;
use App\Models\Model;

class RoomsController
{

    //shows all the rooms available as a view
    public function index()
    {

        View::handleView('guests/rooms.php');
        return;
    }

    // api route for getting all rooms
    public function apiIndex()
    {
        $rooms = (new Model())->getAll('rooms');
        Response::json([
            'message' => 'fetched rooms successfully',
            'rooms' => $rooms,
            'count' => count($rooms)
        ]);
        return;
    }


    // handles the creating or inserting of rooms
    public function create()
    {
        $rawData = file_get_contents('php://input');
        $data = json_decode($rawData, true);
        $errors = [];
        $requiredFields = ['room_number', 'room_type', 'floor', 'price', 'capacity', 'description', 'amenities', 'status'];


        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $errors[] = "{$field} field is required";
            }
        }

        if (!empty($errors)) {
            Response::json([
                'message' => 'inproper request',
                'errors' => $errors,
                'success' => false
            ], 400);
            exit;
        }

        foreach ($data as $key => $value) {
            if (in_array($key, $requiredFields) && empty($value)) {
                $errors[] = "$key cannot be empty";
            }
        }

        if (!empty($errors)) {
            Response::json([
                'message' => 'inproper request',
                'errors' => $errors,
                'success' => false
            ], 400);
            exit;
        }

        try {
            $data['amenities'] = json_encode($data['amenities']);
            Model::create($data, 'rooms');
            Response::json([
                'message' => 'rooms has been created successfully',
                'success' => true
            ], 201);
            exit;
        } catch (\PDOException $error) {

            $errors[] = $error->getMessage();
            Response::json([
                'message' => 'oops something went wrong on our server',
                'errors' => $errors,
                'success' => false
            ], 500);
            exit;
        }
    }
}

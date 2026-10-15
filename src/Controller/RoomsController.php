<?php

namespace App\Controller;

use App\Helpers\Response;
use App\Helpers\View;
use App\Middleware\Authentication;
use App\Models\Model;

class RoomsController extends Controller
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
    public function store()
    {
        $rawData = file_get_contents('php://input');
        $data = json_decode($rawData, true);
        $errors = [];
        $requiredFields = ['room_number', 'room_type', 'floor', 'price', 'capacity', 'description', 'amenities', 'status'];



        // check is if admin

        if (!Authentication::isAdmin()) {
            Response::json([
                'message' => 'unauthorized request',
                'errors' => ['you are not allowed to access this page'],
                'success' => false
            ], 401);
            exit;
        }


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

            // turning amenities from string seperated by coma to array
            $amenities = explode(",", $data['amenities']);
            $amenities = json_encode($amenities);
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

     /**
     * @param integer $id id is the id of the table
     */

    public function deleteRoom($id)
    {

        $result = Model::delete('rooms', $id);
        if ($result) {
            Response::json([
                'message' => "This room has been deleted successfully",
                'success' => true
            ]);
        } else {
            Response::json([
                'message' => "The deletion of the room was unsuccessful",
                'success' => false
            ], 400);
        }
    }
}

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

    // view edit room page
    public function editRoom()
    {
        $id = $_GET['id'] ?? null;
        if (!$id) {
            echo "Room ID is missing.";
            return;
        }
        $rooms = (new Model())->getAll('rooms');
        $room = null;
        foreach ($rooms as $item) {
            if ((int) $item['id'] === (int) $id) {
                $room = $item;
                break;
            }
        }
        if ($room === null) {
            echo "Room not found.";
            return;
        }
        $data = [
            'room' => $room
        ];

        View::handleView('admin/edit-rooms.php', $data);
    }

    //API to edit the room
    public function modify($id)
{
    $rawdata = file_get_contents("php://input");
    $data = json_decode($rawdata, true);
    $requiredFields = [
        'room_number',
        'room_type',
        'floor',
        'price',
        'capacity',
        'description',
        'amenities',
        'status'
    ];
    $errors = [];

    foreach ($requiredFields as $key) {
        if (!array_key_exists($key, $data)) {
            $errors[] = "{$key} is required";
        }
    }
    if (!empty($errors)) {
        Response::json([
            'success' => false,
            'message' => 'Fill in the required fields',
            'errors' => $errors
        ], 400);
        exit;
    }
    $roomRow = Model::find(['id' => $id], 'rooms');
    if (empty($roomRow)) {
        Response::json([
            'success' => false,
            'message' => 'Room not found'
        ], 404);
        exit;
    }
    try {
        Model::update('rooms', [
            'room_number' => $data['room_number'],
            'room_type' => $data['room_type'],
            'floor' => $data['floor'],
            'price' => $data['price'],
            'capacity' => $data['capacity'],
            'description' => $data['description'],
            'amenities' => $data['amenities'],
            'status' => $data['status']
        ], $id);

        Response::json([
            'success' => true,
            'message' => 'Room updated successfully'
        ], 200);
        exit;

    } catch (\PDOException $error) {
        Response::json([
            'success' => false,
            'message' => 'Database update failed',
            'errors' => [$error->getMessage()]
        ], 500);
        exit;
    }
}
}

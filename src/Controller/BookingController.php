<?php

namespace App\Controller;

use App\Helpers\Response;
use App\Helpers\Utilities;
use App\Helpers\View;
use App\Models\Model;

class BookingController extends Controller
{


    // shows us the bookibng form
    public function create($id)
    {
        $room = Model::find(['id' => $id], 'rooms');
        if (!empty($room)) {
            View::handleView('guests/book.php', ['room' => $room]);
            return;
        }
        View::handleView('404.php');
        return;
    }

    // handle store booking request
    public function store()
    {

        $errors = [];
        $rawData = file_get_contents('php://input');
        $data = json_decode($rawData, true);

        $requireds = ['checkin', 'checkout', 'amount', 'guest', 'room_id'];

        // check if the required fields are inside the data sent

        foreach ($requireds as $field) {
            if (!isset($data[$field])) {
                $errors[] = "missing $field, $field is required.";
            }
        }


        if (!empty($errors)) {
            Response::json([
                'message' => 'an error occured',
                'errors' => $errors,
                'success' => false
            ], 400);
            exit;
        }

        // validate empty fields
        foreach ($data as $field => $value) {

            if (in_array($field, $requireds) && Utilities::is_blank($value)) {
                $errors[] = "$field cannot be empty";
            }
        }

        if (!empty($errors)) {
            Response::json([
                'message' => 'an error occured',
                'errors' => $errors,
                'success' => false
            ]);
            exit;
        }


        $roomId = $data['room_id'];
        $checkin = $data['checkin'];
        $checkout = $data['checkout'];
        $amount = $data['amount'];
        $guest = $data['guest'];

        // check if the room does exist in our database 
        $room = Model::find(['id' => $roomId], "rooms");

        if (empty($room)) {
            $errors[] = "this room does not exist";
        }

        if (!empty($errors)) {
            Response::json([
                'message' => 'an error occured',
                'errors' => $errors,
                'success' => false
            ]);
            exit;
        }


        $checkinTimestamp =  strtotime($checkin);
        $checkoutTimestamp = strtotime($checkout);

        if ($checkinTimestamp > $checkoutTimestamp) {
            $errors[] = "checkin date cannot be greater than checkout";
        }

        if (Utilities::isLessThanToday($checkinTimestamp)) {
            $errors[] = "you must check in from today";
        }



        if (!empty($errors)) {
            Response::json([
                'message' => 'an error ocured',
                'errors' => $errors,
                'success' => false
            ]);

            exit;
        }
    }
}

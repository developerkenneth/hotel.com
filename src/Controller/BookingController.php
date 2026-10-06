<?php

namespace App\Controller;

require_once(__DIR__ . "/../../load_env.php");

use App\Helpers\Response;
use App\Helpers\Utilities;
use App\Helpers\Validation;
use App\Helpers\View;
use App\Models\Model;

class BookingController extends Controller
{


    // shows us the booking form
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

        $requireds = ['checkin', 'checkout', 'amount', 'guest', 'room_id', 'email', 'name'];

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
        $additionalNote = isset($data['additional_note']) && !empty($data['additional_note']) ? $data['additional_note'] : 'no additional note';

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

        // validate email
        if (!Validation::isEmail($data['email'])) {
            $errors[] = 'invalid email address';
        }
        if (strlen($data['name']) < 3) {
            $errors['name cannot  be less than 3 letters'];
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

        // $dataToPaystack = [
        //     'email' => 'customer@example.com',
        //     'amount' => 100 * $amount
        // ];


        // // send initialization request to paystack
        // $client = new \GuzzleHttp\Client();
        // $response = $client->post("https://api.paystack.co/transaction/initialize", [
        //     'json' => $dataToPaystack,
        //     'headers' => [
        //         'Authorization' => "Bearer {$_ENV['PAYSTACK_API_KEY']}",
        //         'Content-Type' => "application/json"
        //     ]
        // ]);


        // create new booking 

        $bookingDetails = [
            'checkin' => $checkin,
            'checkout' => $checkout,
            'amount' => $amount,
            'payment' => $amount,
            'guest' => $guest,
            'room_id' => $roomId,
            'additional_note' => $additionalNote,
            'transaction_id' => $data['paystack']['reference'],
            'customers_email' => $data['email'],
            'customers_name' => $data['name'],
            'status' => 'confirmed'

        ];

        Model::create($bookingDetails, 'bookings');
        Response::json([
            'success' => true,
            'message' => 'booking completed'
        ], 201);
    }

    public function showReceipt($transaction)
    {
        $booking = Model::find(['transaction_id' => $transaction], 'bookings');


        if (empty($booking)) {
            View::handleView('404.php');
            return;
        }

        $room = Model::find(['id' => $booking['room_id']], 'rooms');
        View::handleView('guests/receipt.php', $data = ['booking' => $booking, 'room' => $room]);
        return;
    }

    public function indexApi()
    {

        $limit = $_GET['limit'];
        $page = $_GET['page'];
        $offset = ($page - 1) * $limit;


        // get all bookings from data base
        $model = new Model;
        $bookings = $model->getallPagination($limit, $offset, 'bookings');

        Response::json(
            [
                'offset' => $offset,
                'page' => $page,
                'limit' => $limit,
                'data' => $bookings
            ]
        );
        return;
    }
}

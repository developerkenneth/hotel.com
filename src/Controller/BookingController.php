<?php

namespace App\Controller;

use App\Helpers\Response;
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
        $rawData = file_get_contents('php://input');
        $data = json_decode($rawData, true);
        Response::json($data, 200);
    }
}

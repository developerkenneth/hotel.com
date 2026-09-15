<?php

namespace App\Controller;

use App\Helpers\Response;
use App\Helpers\View;

class BookingController extends Controller
{


    // shows us the bookibng form
    public function create()
    {
        View::handleView('guests/book.php');
    }

    // handle store booking request
    public function store()
    {
        $rawData = file_get_contents('php://input');
        $data = json_decode($rawData, true);
        Response::json($data, 200);
    }
}

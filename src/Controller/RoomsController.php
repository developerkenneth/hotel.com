<?php

namespace App\Controller;

use App\Helpers\View;

class RoomsController
{

    //shows all the rooms available
    public function index()
    {
        View::handleView('guests/rooms.php');
        exit;
    }
}

<?php

namespace App\Controller;

use App\Controller\Controller;
use App\Helpers\View;

class User extends Controller
{

    // show registration form
    public function show()
    {
        View::handleView("register.php");
    }


    // handle post request and stores the data in the database
    public function store()
    {

        $rawData = file_get_contents("php://input");
        $data = json_decode($rawData, true);
    }
}

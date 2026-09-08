<?php

namespace App\Controller;

use App\Helpers\View;

class Home
{

    public function showHomePage()
    {
        View::handleView('guests/home.php');
        exit;
    }
}

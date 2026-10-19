<?php

namespace App\Controller;

use App\Controller\Controller;
use App\Helpers\Response;
use App\Helpers\View;
use App\Models\Model;

class AdminController extends Controller
{

    public function dashboard()
    {
        View::handleView('admin/dashboard.php');
    }
    public function rooms()
    {
        $model = new Model();
        $rooms = $model->getAll('rooms');
        View::handleView('admin/rooms.php', ['rooms' => $rooms]);
    }
    public function management(){
        View::handleView('admin/management.php');
    }

}

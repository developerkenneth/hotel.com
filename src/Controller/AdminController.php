<?php

namespace App\Controller;

use App\Controller\Controller;
use App\Helpers\View;

class AdminController extends Controller
{

    public function dashboard()
    {
        View::handleView('admin/dashboard.php');
    }
    public function rooms()
    {
        View::handleView('admin/rooms.php');
    }
}

<?php

namespace App\Helpers;

use App\Helpers\Helper;
use App\Helpers\Sessions;

class View extends Helper
{

    public static function handleView($fileName)
    {

        Sessions::start();
        $csrf_token = "";
        if (isset($_SESSION['csrf_token']) && !empty($_SESSION['csrf_token'])) {
            $csrf_token = $_SESSION['csrf_token'];
        } else {
            $_SESSION['csrf_token'] = Utilities::CSRF_token();
            $csrf_token = $_SESSION['csrf_token'];
        }

        $filePath = (new self)->root_dir . "/src/View/{$fileName}";
        if (file_exists($filePath)) {
            require_once (new self)->root_dir . "/Core/utilities.php";
            include_once("$filePath");
        }
        return;
    }


    public static function handleComponents($fileName)
    {

        $filePath = (new self)->root_dir . "/src/View/components/$fileName";
        if (file_exists($filePath)) {
            require_once (new self)->root_dir . "/Core/utilities.php";
            include_once("$filePath");
        }
        return;
    }
}

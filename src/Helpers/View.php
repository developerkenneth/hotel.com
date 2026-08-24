<?php

namespace App\Helpers;

use App\Helpers\Helper;

class View extends Helper
{

    public static function handleView($fileName)
    {

        $filePath = (new self)->root_dir . "/src/View/{$fileName}";
        if (file_exists($filePath)) {
            require_once (new self)->root_dir . "/Core/utilities.php";
            include_once("$filePath");
        }
        return;
    }
}

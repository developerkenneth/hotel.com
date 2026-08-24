<?php

namespace App\Helpers;
// getting the core file
require_once(dirname(dirname(__DIR__)) . "/Core/config.php");


abstract class Helper
{
    protected $root_dir = \ROOT_DIR;
}

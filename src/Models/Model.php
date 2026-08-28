<?php

namespace App\Models;

use App\Helpers\Utilities;
use App\Models\Db;

class Model extends Db
{

    /**
     * @param array $parameters : should just be a single element
     */

    public static function find($parameters, $table)
    {

        // array_walk($parameters, function ($value) {
        //     Helper::sanitize($value);
        // });

        $col = "";


        foreach ($parameters as $key => $val) {
            $col = $key;
        }

        $sql = "SELECT * FROM `{$table}` WHERE $col = :$col LIMIT 1";

        $stmt = self::connect()->prepare($sql);
        $stmt->execute($parameters);
        $result = $stmt->fetch();
        if ($result) {
            return $result;
        }
        return [];
    }


    public static  function create($datas)
    {

        $cols = "";
        $placeholders = "";

        foreach ($datas as $key => $value) {
            $cols .= "$key,";
            $placeholders .= ":$key,";
        }

        $cols =   substr($cols, 0, strlen($cols) - 1);
        $placeholders =   substr($placeholders, 0, strlen($placeholders) - 1);

        $sql = "INSERT INTO `users` ($cols) VALUES ($placeholders)";

        // run prepare
        $stmt = self::connect()->prepare($sql);
        return $stmt->execute($datas);
    }


    // public function __destruct()
    // {

    //     // close connection after using db
    // }
}

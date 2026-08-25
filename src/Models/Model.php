<?php

namespace App\Models;

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

        // $col = "";


        foreach ($parameters as $key => $val) {
            $col = $key;
        }

        $sql = "SELECT * FROM `{$table}` WHERE $col = :$col LIMIT 1";
        return $sql;
        $stmt = self::connect()->prepare();
        $stmt->execute($data);
        $result = $stmt->fetch();
        if ($result) {
            return $result;
        }
        return (object)[];
    }



    // public function __destruct()
    // {

    //     // close connection after using db
    // }
}

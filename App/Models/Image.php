<?php

namespace App\Models;

use PDO;

class Image extends \Core\Model
{
    #Get all the listings as an associative array
    public static function getAll(){

        try{
            $db = static::getDB();
            $stmt = $db->query('SELECT * from License');
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch(PDOException $e){
            echo $e->getMessage();
        }


    }

}
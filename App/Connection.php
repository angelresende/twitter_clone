<?php

namespace App;

class Connection{
    public static function getDb(){
        try{
            $conn = new \PDO(
                "mysql:host=localhost:3360;dbname=twitter_clone;",
                "root",
                "oracle"
            );
            return $conn;

        } catch(PDOException $e){
            

        }
    }
}
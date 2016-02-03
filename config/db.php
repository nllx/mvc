<?php

class Db
{
    public static function connect()
    {
        try{
            return new PDO("mysql:dbname=cms;charset=UTF8;host=localhost", 'root', '');
        }catch(PDOException $e){
            die("Ошибка соединения с БД!");
        }

    }
}
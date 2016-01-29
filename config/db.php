<?php

class Db
{
  public static function getConnection()
  {

    define("DB_HOST","localhost");
    define("DB_NAME","mvc_site");
    define("DB_USER","test123");
    define("DB_PASS","");

    return new PDO("mysql:host=localhost;dbname=mvc_site;charset=utf8", DB_USER, DB_PASS);
  }
}

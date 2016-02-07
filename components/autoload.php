<?php

require_once "../config/config.php";
require_once "../app.php";

spl_autoload_register(function($class){

    $class .= ".php";

    switch(true){
        case preg_match("/Router/", $class):
            require_once $class;
            break;
        case preg_match("/Controller/", $class):
            require_once HOME_DIR . "/controllers/" . $class;
            break;
        case preg_match("/Model/", $class):
            require_once HOME_DIR . "/models/" . $class;
            break;
        case preg_match("/View/", $class):
            require_once HOME_DIR . "/views/" . $class;
            break;
        case preg_match("/Db/", $class):
            require_once HOME_DIR . "/config/" . $class;
            break;
        default:
            require_once $class;
            break;
    }
});
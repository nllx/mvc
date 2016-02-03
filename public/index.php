<?php

require_once "../config.php";

spl_autoload_register(function($class){

    $class .= ".php";

    switch(true){
       case preg_match("/Router/", $class):
           require_once HOME_DIR . "/components/" . $class;
           break;
       case preg_match("/Controller/", $class):
           require_once CONTROLLERS_DIR  . $class;
           break;
       case preg_match("/Model/", $class):
           require_once MODELS_DIR  . $class;
           break;
       case preg_match("/View/", $class):
           require_once VIEWS_DIR  . $class;
           break;
        case preg_match("/Db/", $class):
            require_once HOME_DIR  . "/config/" . $class;
            break;
       default:
           require_once HOME_DIR . "/components/" . $class;
            break;
   }
});

$app = new Router();
$app->run();
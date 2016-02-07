<?php

define("HOME_DIR", dirname(__FILE__));
require_once "components/autoload.php";

class App {

    private $router;

    function __construct(){

        $this->router = new Router();

    }

    public function run(){

        $this->router->run();

    }
}
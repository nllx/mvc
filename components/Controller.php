<?php

namespace Controller;

use \View\View;

class Controller
{
    public static $render;

    public function __construct()
    {
        self::$render = new View();
    }

    public function actionTest()
    {
        echo "<h1>" . __METHOD__ . "</h1>";
    }
}
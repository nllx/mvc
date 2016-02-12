<?php

use \Controller\Controller;

class SiteController extends Controller
{
    public function actionIndex()
    {
        self::$render->render("index");
    }
}

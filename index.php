<?php

// FRONT CONTROLLER

// 1. Общие настройки
ini_set("display_erors", 1);
error_reporting(E_ALL);
// 2. Подключение файлов системы
define("HOME_DIR", dirname(__FILE__));
require_once(HOME_DIR . "/config/db.php");
require_once(HOME_DIR . "/components/Router.php");
// 3. Установка соединения с БД

// 4. Вызов Router
$router = new Router();
$router->run();

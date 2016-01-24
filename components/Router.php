<?php

class Router
{
  private $routes;

  public function __construct()
  {
    $routesPath = HOME_DIR . "/config/routes.php";
    $this->routes = include($routesPath);
  }

  private function getUri()
  {
    if (!empty($_SERVER["REQUEST_URI"])) {
      return trim($_SERVER["REQUEST_URI"], "/");
    }
  }

  public function run()
  {
    // Получить строку запроса
    $uri = $this->getUri();
    // Проверить наличие такого запроса в routes.php
    foreach ($this->routes as $uriPattern => $path) {

      if (preg_match("-$uriPattern-", $uri)) {

        $segments = explode("/", $path);

        $controllerName = ucfirst(array_shift($segments))."Controller";
        $actionName = "action" . ucfirst(array_shift($segments));

        // Если есть совпадение, определить какой контроллер и action обрабатывают запрос

        $controllerFile = HOME_DIR . "/controllers/" . $controllerName . ".php";

        if (file_exists($controllerFile)) {
          include_once $controllerFile;
        }

        // Подключить файл класс-контроллер

        // Создать объект, вызвать метод

        $controllerObject = new $controllerName;
        $result = $controllerObject->$actionName();
        if ($result != null) {
          break;
        }
      }
    }
  }
}

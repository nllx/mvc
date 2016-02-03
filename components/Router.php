<?php


class Router
{

    private $routes;
    private $uri;
    private $controller;
    private $actionParams;
    private $controllerFilePath;

    protected function setRoutes()
    {
        $this->routes = require_once HOME_DIR . "/config/routes.php";
    }

    protected function setUri()
    {
        $this->uri = trim($_SERVER["REQUEST_URI"], "/");
    }

    protected function setController(&$methodSegments)
    {
        $this->controller = ucfirst(array_shift($methodSegments)) . "Controller";
    }

    protected function getAction(&$methodSegments)
    {
        return "action" . ucfirst(array_shift($methodSegments));
    }

    protected function setActionParams(&$methodSegments)
    {
        if (!empty($methodSegments)){
            $this->actionParams = $methodSegments;
        } else {
            $this->actionParams = 0;
        }
    }

    protected function setControllerFilePath()
    {
        $this->controllerFilePath = CONTROLLERS_DIR . $this->controller . ".php";
    }

    protected function checkPathController($path){
        return file_exists($path);
    }


    public function run()
    {
        $this->setRoutes();
        $this->setUri();

        foreach ($this->routes as $uriPattern => $route){
            if (preg_match($uriPattern, $this->uri)) {

                $method = preg_replace($uriPattern, $route, $this->uri);
                $methodSegments = explode("/", $method);

                $this->setController($methodSegments);
                $action = $this->getAction($methodSegments);
                $this->setActionParams($methodSegments);
                $this->setControllerFilePath();

                if ($this->checkPathController($this->controllerFilePath)){
                    $controller = new $this->controller;
                    $controller->$action($this->actionParams);
                }
                break;

            }
        }

    }


}
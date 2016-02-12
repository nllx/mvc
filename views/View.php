<?php

namespace View;

class View
{

    public function render($viewName, $data = [])
    {
        require_once HOME_DIR . "/views/" . $viewName . ".php";
    }
}
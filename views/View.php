<?php

class View
{
    public function render($viewName, $data)
    {
        require_once VIEWS_DIR . "/" . $viewName . ".php";
    }
}
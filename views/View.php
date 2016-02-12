<?php

namespace View;

class View
{
    private $data_array = [];

    public function dataFilter($data){

        foreach ($data as $key => $value){

            if (is_array($data[$key])) {
                return $this->dataFilter($data[$key]);
            }
            if (!is_numeric($value)){
                $this->data_array["$key"] = $value;
            }
        }
        return $this->data_array;
    }

    public function render($viewName, $data = [])
    {

        $data = self::dataFilter($data);
        require_once HOME_DIR . "/views/" . $viewName . ".php";
    }
}
<?php


class IndexController
{
    public function actionIndex($params)
    {
        if (empty($params)){
            echo "<h1>" . __METHOD__ . "</h1>";
        } else {
            echo "<h1>" . __METHOD__ . "</h1>";
            echo var_dump($params);
        }

        $pdo = Db::connect();
    }
}
<?php
include_once HOME_DIR . "/models/News.php";

class NewsController
{

  public function actionIndex()
  {
    $newsList = News::getNewsList();
    echo "<pre>";
    print_r($newsList);
    echo "</pre>";
    return true;
  }

  public function actionView($category, $id)
  {
    $news = News::getNewsItemById($id);
    echo "<pre>";
    print_r($news );
    echo "</pre>";
    return true;
  }
}

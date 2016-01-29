<?php

class News
{

  public static function getNewsItemById($id)
  {
    $db = db::getConnection();

    $news = [];
    $result = $db->query("SELECT id, title, date, short_content FROM news WHERE id = $id LIMIT 1");
    $i = 0;
    while($row = $result->fetch()) {
      $news["id"] = $row["id"];
      $news["title"] = $row["title"];
      $news["date"] = $row["date"];
      $news["short_content"] = $row["short_content"];
      $i++;
    }

    return $news;
  }

  public static function getNewsList()
  {

    $db = db::getConnection();
    $newsList = [];
    $result = $db->query("SELECT id, title, date, short_content FROM news ORDER BY date DESC LIMIT 10");
    $i = 0;
    while($row = $result->fetch()) {
      $newsList[$i]["id"] = $row["id"];
      $newsList[$i]["title"] = $row["title"];
      $newsList[$i]["date"] = $row["date"];
      $newsList[$i]["short_content"] = $row["short_content"];
      $i++;
    }

    return $newsList;
  }

}

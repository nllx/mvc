<?php

class ArticleModel
{
    public function getAllArticle()
    {
        $pdo = Db::connect();
        $sql = "SELECT * FROM article";
        $query_result = $pdo->query($sql);
        return $query_result->fetchAll();
    }

    public function getArticleById($id)
    {
        $pdo = Db::connect();
        $sql = "SELECT * FROM article WHERE `article_id` = $id";
        $query_result = $pdo->query($sql);
        return $query_result->fetchAll();
    }

    public function updateArticleById($id, $data)
    {
        $pdo = Db::connect();
        $title = $pdo->quote($data["title"]);
        $description = $pdo->quote($data["description"]);
        $text = $pdo->quote($data["text"]);

        $sql = "UPDATE `article` SET `article_title`=$title,`article_description`=$description,`article_text`=$text WHERE `article_id` = $id";
        $query_result = $pdo->query($sql);
        return $query_result;
    }

    public function deleteArticleById($id)
    {
        $pdo = Db::connect();
        $sql = "DELETE FROM `article` WHERE `article_id` = $id";
        $query_result = $pdo->query($sql);
        return $query_result;
    }
}
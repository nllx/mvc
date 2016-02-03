<?php

class AdminController
{
    public function actionIndex()
    {
        echo __METHOD__;
        $model = new ArticleModel();
        $data = $model->getAllArticle();
        $view = new View();
        $view->render("admin", $data);
    }

    public function actionRoutForm()
    {
        if (!empty($_POST))
        {
            $id = (int)$_POST["id"];
            switch($_POST["action"]){
                case "edit":
                    $this->actionEditArticleById($id);
                    break;
                case "delete":
                    $this->actionDeleteArticleById($id);
                    break;
                case "postEdit":
                    $this->actionUpdateArticleById($id);
                    break;
            }
        }
    }

    private function actionEditArticleById($id)
    {
        echo __METHOD__;
        $model = new ArticleModel();
        $data = $model->getArticleById($id);
        $view = new View();
        $view->render("edit", $data[0]);
    }

    public function actionUpdateArticleById($id)
    {
        $data["title"] = htmlspecialchars($_POST["title"]);
        $data["description"] = htmlspecialchars($_POST["description"]);
        $data["text"] = htmlspecialchars($_POST["text"]);

        //echo var_dump($data);
        $model = new ArticleModel();
        $model->updateArticleById($id, $data);
        header("Location: /blog/admin");
    }


    private function actionDeleteArticleById($id)
    {
        echo __METHOD__;
        $model = new ArticleModel();
        $model->deleteArticleById($id);
        header("Location: /blog/admin");
    }
}
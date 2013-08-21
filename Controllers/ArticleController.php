<?php

class ArticleController
{

    public static function Show($params = NULL)
    {
        if (is_numeric($params['id']))
        {
            require_once ModelsDir . "Articles.php";
            $article = Articles::GetArticleById($params['id']);
            if (!empty($article))
            {
                Template::Assign("article", $article);
                Template::Display();
            }
            else
            {
                Template::Display('Error', "Index");
            }
        }
        else
        {
            Template::Display('Error', "Index");
        }
    }
}

?>

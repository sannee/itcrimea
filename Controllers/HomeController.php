<?php

class HomeController
{

    public function Index($params = NULL)
    {
        require_once ModelsDir . "Articles.php";
        require_once MiscDir . "Pagination.php";

        if (empty($params['page']))
        {
            $currentPage = 1;
        }
        else
        {
            $currentPage = intval($params['page']);
        }
        
        if ($currentPage <= 0)
        {
            Template::Display("Error", "Index");
            return;
        }
        
        $amountArticles = Articles::GetAmountArticles();
        $pagination = new Pagination($currentPage, $amountArticles);
        $pagination->BaseURL = "/Home/Index/page";
        $limit = $pagination->GetLimit();

        if ($limit['offset'] >= $amountArticles)
        {
            Template::Display("Error", "Index");
            return;
        }
        $articles = Articles::GetArticlesList($limit['offset'], $limit['amount']);
        Template::Assign("pagination", $pagination->Paginate());
        Template::Assign("articles", $articles);
        Template::Display();
    }

}

?>

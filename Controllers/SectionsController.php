<?php

class SectionsController
{

    public function Index($params = NULL)
    {
        require_once ModelsDir . "Sections.php";
        $sections = Sections::GetSectionsList();
        Template::Assign("sections", $sections);
        Template::Display();
    }

    public function Show($params = NULL)
    {

        if (!empty($params['section']))
        {
            require_once ModelsDir . "Articles.php";
            require_once ModelsDir . "Sections.php";
            $articles = Articles::GetArticlesOfSection($params['section']);
            if (!empty($articles))
            {
                if (!empty($_SESSION['id']))
                {
                    $valid = Sections::ValidationSectionByName($_SESSION['id'], $params['section']);
                    Template::Assign("SectionOfEditor", $valid);
                }

                require_once ModelsDir . 'Events.php';
                require_once MiscDir . 'Pagination.php';

                if (empty($params['page']))
                {
                    $currentPage = 1;
                }
                else
                {
                    $currentPage = intval($params['page']);
                }

                if ($currentPage > 0)
                {
                    $amountArticles = Articles::GetAmountArticlesOfSection($params['section']);
                    $pagination = new Pagination($currentPage, $amountArticles);
                    $section = $params['section'];
                    $pagination->BaseURL = "/sections/show/section=$section&page";
                    $limit = $pagination->GetLimit();

                    if ($limit['offset'] >= $amountArticles)
                    {
                        Template::Display("Error", "Index");
                        return;
                    }

                    $articles = Articles::GetArticlesOfSectionList($params['section'], $limit['offset'], $limit['amount']);
                    Template::Assign("pagination", $pagination->Paginate());


                    Template::Assign("articles", $articles);
                    Template::Display();
                }
                else
                {
                    Template::Display("Error", "Index");
                }
            }
            else
            {
                Template::Display("Error", "Index");
            }
        }
        else
        {
            Template::Display("Error", "Index");
        }
    }

}

?>

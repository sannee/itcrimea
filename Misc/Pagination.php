<?php

class Pagination
{

    public $BaseURL;
    public $NumOnPage = 5; //количество записей на странице
    public $Start; //начальная страница
    public $End; //конечная страница
    public $CurrentPage; // текущая страница;
    public $Radius = 3; //радиус
    public $Nums; // количество всех записей;
    public $Append;

    public function __construct($currentPage, $nums)
    {
        $this->CurrentPage = $currentPage;
        $this->Nums = $nums;
    }

    public function GetLimit()
    {
        $start = ($this->CurrentPage - 1) * $this->NumOnPage;
        return array('offset' => $start, 'amount' => $this->NumOnPage);
    }

    public function Paginate()
    {
        $amountPages = ceil($this->Nums / $this->NumOnPage);
        $title = "<span class=\"pagerTitle\">Страница $this->CurrentPage из $amountPages </span>";

        //если текущая страница больше 1, то выводим "Предыдущая страница"
        if ($this->CurrentPage > 1)
        {
            $prevPage = $this->CurrentPage - 1;
            $prefix = "<a href=\"$this->BaseURL=$prevPage\" class=\"page-i\"><<</a>";
            $title = $title . $prefix;
        }

        //страница с которой нужно начинать делать вывод
        if ($this->CurrentPage - $this->Radius >= 0)
        {
            $start = $this->CurrentPage - $this->Radius;
        }
        else
        {
            $start = 0;
        }

        if ($this->CurrentPage + $this->Radius <= $amountPages)
        {
            $end = $this->CurrentPage + $this->Radius;
        }
        else
        {
            $end = $amountPages;
        }
        
        
        if ($end > $amountPages)
        {
            $end = $amountPages;
        }

                //    $start = intval($this->CurrentPage / ($this->Radius)) * $this->Radius;       

        
        for ($i = $start; $i < $end; $i++)
        {
            if ($i + 1 == $this->CurrentPage)
            {
                $page = $i + 1;
                $pagination = $pagination . "<span class=\"page-i activPage\">$page</span>";
            }
            else
            {
                $page = $i + 1;
                $pagination = $pagination . "<a href=\"$this->BaseURL=$page\" class=\"page-i\">$page</a>";
            }
        }

        if ($this->CurrentPage + 1 <= $amountPages)
        {
            $nextPage = $this->CurrentPage + 1;
            $post = "<a href=\"$this->BaseURL=$nextPage\" class=\"page-i\">>></a>";
        }
        return $title . $pagination . $post;
    }

}

?>

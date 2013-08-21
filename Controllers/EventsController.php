<?php

class EventsController
{

    public static function Index($params = NULL)
    {
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

        if ($currentPage <= 0)
        {
            Template::Display("Error", "Index");
            return;
        }
        $amountEvents = Events::GetAmountEvents();
        $pagination = new Pagination($currentPage, $amountEvents);
        $pagination->BaseURL = "/events/index/page";
        $limit = $pagination->GetLimit();

        if ($limit['offset'] >= $amountEvents)
        {
            Template::Display("Error", "Index");
            return;
        }

        $events = Events::GetEventsList($limit['offset'], $limit['amount']);
        Template::Assign("pagination", $pagination->Paginate());
        Template::Assign("events", $events);
        Template::Display();
    }

    public static function Show($params = NULL)
    {
        if (is_numeric($params['event']))
        {
            require_once ModelsDir . 'Events.php';
            $event = Events::GetEventById($params['event']);
            if (!empty($event))
            {
                Template::Assign("event", $event);
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

}

?>

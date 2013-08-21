<?php

class Filters
{
    public static function Events()
    {
        require_once ModelsDir . "Events.php";
        $offset = 0;
        $amount = 3;
        $events = Events::GetLastEventsList($offset, $amount);
        Template::Assign("EventsCollumn", $events);
        Template::Assign("permission", $_SESSION['permission']);
    }

    public static function AuthorizeCheck()
    {
        if (isset($_SESSION['permission']))
        {
            if (Routing::$Controller == "admin")
            {
                if ($_SESSION['permission'] != "admin")
                {
                    Template::Display("Error", "Index");
                    die();
                }
            }
            if (Routing::$Controller == "editor")
            {
                if ($_SESSION['permission'] != "editor")
                {
                    Template::Display("Error", "Index");
                    die();
                }
            }
        }
        else
        {
            if (Routing::$Controller == "admin" || Routing::$Controller == "editor")
            {
                if (Routing::$Action != "login")
                {
                    Template::Display("Error", "Index");
                    die();
                }
            }
        }
    }

}

?>

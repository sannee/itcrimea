<?php

class Events
{

    public static function GetLastEventsList($offset, $amount)
    {
        $offset = mysql_escape_string($offset);
        $amount = mysql_escape_string($amount);
        $result = mysql_query("SELECT * FROM events ORDER BY id DESC LIMIT $offset, $amount");

        $i = 0;
        while ($array = mysql_fetch_assoc($result))
        {
            $list[$i] = $array;
            $i++;
        }
        return $list;
    }

    public static function DeleteEvent($id)
    {
        $id = mysql_escape_string($id);
        $result = mysql_query("DELETE FROM events WHERE id='$id'");
        return $result;
    }

    public static function GetAllEventsList()
    {

        $result = mysql_query("SELECT events.id, events.title,
            events.description, events.text,
            events.date, users.name as 
            author FROM events 
            INNER JOIN users 
            ON users.id=events.user_id ORDER BY events.id DESC");
        $i = 0;
        while ($array = mysql_fetch_assoc($result))
        {
            $list[$i] = $array;
            $i++;
        }
        return $list;
    }

    public static function GetAmountEvents()
    {
        $result = mysql_query("SELECT COUNT(*) FROM events");
        $array = mysql_fetch_assoc($result);
        return $array['COUNT(*)'];        
    }

    public static function GetEventsList($offset, $amount)
    {

        $offset = mysql_escape_string($offset);
        $amount = mysql_escape_string($amount);
        $result = mysql_query("SELECT events.id, events.title,
            events.description, events.text,
            events.date, users.name as 
            author FROM events 
            INNER JOIN users 
            ON users.id=events.user_id ORDER BY events.id DESC LIMIT $offset, $amount");
        $i = 0;
        while ($array = mysql_fetch_assoc($result))
        {
            $list[$i] = $array;
            $i++;
        }
        return $list;
    }

    public static function GetUserEventsList($userId)
    {
        $userId = mysql_escape_string($userId);
        $result = mysql_query("SELECT * FROM events WHERE user_id='$userId' ORDER BY id DESC");
        $i = 0;
        while ($array = mysql_fetch_assoc($result))
        {
            $list[$i] = $array;
            $i++;
        }
        return $list;
    }

    public static function GetEventById($id)
    {
        $id = mysql_real_escape_string($id);
        $result = mysql_query("SELECT events.id, events.title,
            events.description, events.text,
            events.date, users.name as 
            author FROM events 
            INNER JOIN users 
            ON users.id=events.user_id WHERE events.id = $id");
        $array = mysql_fetch_assoc($result);
        return $array;
    }

    public static function AddEvent($title, $description, $text, $userId, $date)
    {

        $title = mysql_escape_string($title);
        $description = mysql_escape_string($description);
        $text = mysql_escape_string($text);
        $userId = mysql_escape_string($userId);
        $date = mysql_escape_string($date);

        $result = mysql_query("INSERT INTO 
            events(title, description, text, user_id, date)
            VALUES('$title', '$description', '$text', '$userId', '$date')");
        return $result;
    }

    public static function UpdateEvent($id, $title, $description, $text, $date)
    {
        $id = mysql_escape_string($id);
        $title = mysql_escape_string($title);
        $description = mysql_escape_string($description);
        $text = mysql_escape_string($text);
        $date = mysql_escape_string($date);

        $result = mysql_query("UPDATE events SET 
            title='$title',
            description='$description',
            text='$text',
            date='$date' WHERE id='$id'");

        return $result;
    }

    public static function ValidationUser($eventId, $userId)
    {
        $eventId = mysql_escape_string($eventId);
        $userId = mysql_escape_string($userId);
        $result = mysql_query("SELECT * FROM events WHERE user_id='$userId' AND id='$eventId'");
        $row = mysql_fetch_assoc($result);
        return !empty($row);
    }

}

?>

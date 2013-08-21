<?php

class Files
{

    public static function AddFile($fileName, $userId)
    {
        $fileName = mysql_escape_string($fileName);
        $userId = mysql_escape_string($userId);
        $result = mysql_query("INSERT INTO  files(user_id, name) VALUES('$userId', '$fileName')");
        return $result;
    }

    public static function GetFilesList()
    {
        $result = mysql_query("SELECT users.login, files.name, files.id FROM files INNER JOIN users on users.id=files.user_id");
        $i = 0;
        while ($row = mysql_fetch_assoc($result))
        {
            $array[$i] = $row;
            $i++;
        }
        return $array;
    }

    public static function GetUserFilesList($userId)
    {
        $result = mysql_query("SELECT  files.name, files.id FROM files INNER JOIN users on users.id=files.user_id WHERE users.id='$userId'");
        $i = 0;
        while ($row = mysql_fetch_assoc($result))
        {
            $array[$i] = $row;
            $i++;
        }
        return $array;
    }

    public static function DeleteFile($id)
    {
        $result = mysql_query("DELETE FROM files WHERE id='$id'");
        return $result;
    }

    public static function ValidationUser($userId, $fileId)
    {
        $result = mysql_query("SELECT * FROM files WHERE id='$fileId' AND user_id='$userId'");
        $row = mysql_fetch_assoc($result);
        return !empty($row);
    }

}

?>

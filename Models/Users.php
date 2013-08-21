<?php

class Users
{

    public static function ValidationAdmin($login, $password)
    {
        $login = mysql_escape_string($login);
        $password = mysql_escape_string($password);
        $password = md5($password);
        $result = mysql_query("SELECT * FROM users WHERE login='$login' AND password = '$password' AND role='admin'");
        $row = mysql_fetch_assoc($result);
        return $row;
    }

    public static function ValidationEditor($login, $password)
    {
        $login = mysql_escape_string($login);
        $password = mysql_escape_string($password);
        $password = md5($password);
        $result = mysql_query("SELECT * FROM users WHERE login='$login' AND password = '$password' AND role='editor'");
        $row = mysql_fetch_assoc($result);
        return $row;
    }

    public static function GetAllUsers()
    {
        $result = mysql_query("SELECT 
            users.id, users.login,
            users.name, users.email, sections.title as section, users.role 
            FROM users 
            LEFT JOIN
            users_sections ON users.id = users_sections.user_id 
            LEFT JOIN
            sections ON sections.id = users_sections.section_id");

        $i = 0;
        while ($row = mysql_fetch_assoc($result))
        {
            $array[$i] = $row;
            $i++;
        }
        return $array;
    }

    public static function AdminAdd($login, $password, $email, $name)
    {
        $login = mysql_escape_string($login);
        $password = md5(mysql_escape_string($password));
        $email = mysql_escape_string($email);
        $name = mysql_escape_string($name);
        $result = mysql_query("SELECT * FROM users WHERE login='$login'");
        $array = mysql_fetch_assoc($result);

        if (empty($array['login']))
        {
            return mysql_query("INSERT INTO users(login, password, name, email, role) 
            VALUES ('$login', '$password', '$name', '$email', 'admin')");
        }
        else
        {
            return FALSE;
        }
    }

    public static function EditorAdd($login, $password, $email, $name, $sectionId)
    {
        $login = mysql_escape_string($login);
        $password = md5(mysql_escape_string($password));
        $email = mysql_escape_string($email);
        $name = mysql_escape_string($name);
        $result = mysql_query("SELECT * FROM users WHERE login='$login'");
        $array = mysql_fetch_assoc($result);

        if (empty($array['login']))
        {
            mysql_query("START TRANSACTION");
            $result1 = mysql_query("INSERT INTO  
                users(login, password, name, email, role) 
                VALUES('$login','$password','$name','$email','editor')");

            $result2 = mysql_query("INSERT INTO 
                users_sections(user_id, section_id) 
                VALUES (LAST_INSERT_ID(), '$sectionId')");

            if ($result1 == FALSE || $result2 == FALSE)
            {
                mysql_query("ROLLBACK");
                return FALSE;
            }
            else
            {
                mysql_query("COMMIT");
                return TRUE;
            }
        }
        else
        {
            return FALSE;
        }
    }

}

?>

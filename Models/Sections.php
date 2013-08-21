<?php

class Sections
{

    public static function GetSectionsList()
    {
        $result = mysql_query("SELECT * FROM sections");
        $i = 0;
        while ($row = mysql_fetch_assoc($result))
        {
            $sections[$i] = $row;
            $i++;
        }
        return $sections;
    }

    public static function ValidationSection($userId, $section_id)
    {
        $result = mysql_query("SELECT * FROM users_sections WHERE user_id=$userId AND section_id=$section_id");
        $user_section = mysql_fetch_assoc($result);
        return !empty($user_section);
    }

    public static function ValidationSectionByName($userId, $section)
    {
        $result = mysql_query("SELECT sections.id FROM users_sections INNER JOIN sections
            ON users_sections.section_id=sections.id WHERE users_sections.user_id=$userId AND sections.title='$section'");
        $user_section = mysql_fetch_assoc($result);
        return !empty($user_section);
    }

    public static function GetSectionsUser($userId)
    {
        $result = mysql_query("SELECT
            sections.id as id,
            sections.title as section 
            FROM sections 
            INNER JOIN
            users_sections
            ON sections.id = users_sections.section_id WHERE users_sections.user_id='$userId'");

        $i = 0;
        while ($row = mysql_fetch_assoc($result))
        {
            $array[$i] = $row;
            $i++;
        }
        return $array;
    }

    public static function AddSection($sectionName)
    {
        $sectionName = mysql_escape_string($sectionName);
        $result = mysql_query("INSERT INTO sections(title) VALUES('$sectionName')");
        return $result;
    }

    public static function SetSection($username, $sectionId)
    {
        $username = mysql_escape_string($username);
        $sectionId = mysql_escape_string($sectionId);
        $result1 = mysql_query("SELECT * FROM sections WHERE id='$sectionId'");
        $section = mysql_fetch_assoc($result1);

        if (!empty($section))
        {
            $result2 = mysql_query("SELECT * FROM users WHERE login='$username'");
            $user = mysql_fetch_assoc($result2);
            $userId = $user['id'];
            if (!empty($user['login']))
            {
                $result3 = mysql_query("SELECT * FROM users_sections WHERE user_id='$userId' AND section_id='$sectionId'");
                $user_section = mysql_fetch_assoc($result3);
                if (empty($user_section))
                {
                    $result4 = mysql_query("INSERT INTO users_sections(user_id, section_id)
                    VALUES($userId, $sectionId)");
                    return $result4;
                }
            }
        }
        return FALSE;
    }

    public static function DeleteSection($sectionId)
    {
        $sectionId = mysql_escape_string($sectionId);
        mysql_query("START TRANSACTION");
        $result1 = mysql_query("DELETE FROM articles WHERE section_id='$sectionId'");
        $result2 = mysql_query("DELETE FROM users_sections WHERE section_id='$sectionId'");
        $result3 = mysql_query("DELETE FROM sections WHERE id='$sectionId'");

        if ((!$result1 && !$result2 && !$result3))
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

}

?>

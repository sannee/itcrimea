<?php

class Articles
{

    public static function AddArticle($title, $description, $text, $author, $date, $section_id)
    {

        $title = mysql_escape_string($title);
        $description = mysql_escape_string($description);
        $text = mysql_escape_string($text);
        $author = mysql_escape_string($author);
        $date = mysql_escape_string($date);
        $section_id = mysql_escape_string($section_id);

        $result = mysql_query("INSERT INTO 
            articles(title, description, text, author, date, section_id)
            VALUES('$title', '$description', '$text', '$author', '$date', '$section_id')");
        return $result;
    }

    public static function GetAmountArticles()
    {
        $result = mysql_query("SELECT COUNT(*) FROM articles");
        $array = mysql_fetch_assoc($result);
        return $array['COUNT(*)'];
    }

    public static function GetArticlesList($offset, $amount)
    {
        $offset = mysql_escape_string($offset);
        $amount = mysql_escape_string($amount);
        $result = mysql_query("SELECT * FROM articles ORDER BY id DESC LIMIT $offset, $amount");

        $i = 0;
        while ($array = mysql_fetch_assoc($result))
        {
            $list[$i] = $array;
            $i++;
        }
        return $list;
    }

    public static function GetArticleById($id)
    {
        $id = mysql_escape_string($id);
        $result = mysql_query("SELECT * FROM articles WHERE id=$id");
        $array = mysql_fetch_assoc($result);
        return $array;
    }

    public static function GetAmountArticlesOfSection($section)
    {
        $section = mysql_escape_string($section);

        $result = mysql_query("SELECT COUNT(*)  FROM articles INNER JOIN 
            sections ON articles.section_id = sections.id 
            where sections.title = '$section'");

        $array = mysql_fetch_assoc($result);
        return $array['COUNT(*)'];     
    }

    public static function GetArticlesOfSection($section)
    {
        $section = mysql_escape_string($section);
        $result = mysql_query("SELECT 
            articles.id, articles.title,
            articles.description, 
            articles.author, articles.date 
            FROM articles INNER JOIN 
            sections ON articles.section_id = sections.id 
            where sections.title = '$section' ORDER BY articles.id DESC");
        $i = 0;
        while ($row = mysql_fetch_assoc($result))
        {
            $array[$i] = $row;
            $i++;
        }
        return $array;
    }

    public static function GetArticlesOfSectionList($section, $offset, $amount)
    {
        $section = mysql_escape_string($section);
        $offset = mysql_escape_string($offset);
        $amount = mysql_escape_string($amount);

        $result = mysql_query("SELECT 
            articles.id, articles.title,
            articles.description, 
            articles.author, articles.date 
            FROM articles INNER JOIN 
            sections ON articles.section_id = sections.id 
            where sections.title = '$section' ORDER BY articles.id DESC LIMIT $offset, $amount");
        $i = 0;
        while ($row = mysql_fetch_assoc($result))
        {
            $array[$i] = $row;
            $i++;
        }
        return $array;
    }

    public static function DeleteArticle($id)
    {
        $id = mysql_escape_string($id);
        $result = mysql_query("DELETE FROM articles WHERE id='$id'");
        return $result;
    }

    public static function UpdateArticle($id, $title, $description, $text, $date)
    {
        $id = mysql_escape_string($id);
        $title = mysql_escape_string($title);
        $description = mysql_escape_string($description);
        $text = mysql_escape_string($text);
        $date = mysql_escape_string($date);

        $result = mysql_query("UPDATE articles SET 
            title='$title',
            description='$description',
            text='$text',
            date='$date' WHERE id='$id'");

        return $result;
    }

    public static function ValidationUser($userId, $articleId)
    {
        $userId = mysql_escape_string($userId);
        $articleId = mysql_escape_string($articleId);

        $result = mysql_query("SELECT users.id FROM users
            LEFT JOIN
            users_sections ON users.id = users_sections.user_id 
            LEFT JOIN
            sections ON sections.id = users_sections.section_id
            LEFT JOIN
            articles ON articles.section_id = sections.id WHERE users.id='$userId' AND articles.id='$articleId'");
        $row = mysql_fetch_assoc($result);
        return !empty($row);
    }

}

?>

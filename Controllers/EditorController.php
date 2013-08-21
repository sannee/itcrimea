<?php

class EditorController
{

    public static function Index($params = NULL)
    {
        switch ($params['error'])
        {
            case 1: $error = "Вам не назначено ниодного раздела. Обратитесь к администратору.";
                Template::Assign("error", $error);
                break;
            default: break;
        }
        echo $error;
        Template::Display();
    }

    public static function Login()
    {
        if (isset($_SESSION['login']) && isset($_SESSION['permission']))
        {
            header("Location: /editor");
            return;
        }

        if (isset($_POST['submit']))
        {
            require_once ModelsDir . "Users.php";
            $user = Users::ValidationEditor($_POST['login'], $_POST['password']);
            if ($user != NULL)
            {
                $_SESSION['id'] = $user['id'];
                $_SESSION['login'] = $user['login'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['permission'] = "editor";
                header("Location: /editor");
            }
        }
        Template::Display();
    }

    public static function Articles($params = NULL)
    {
        require ModelsDir . "Sections.php";
        $sections = Sections::GetSectionsUser($_SESSION['id']);

        if (empty($sections))
        {
            header("Location: /editor/index/error=1");
            return;
        }

        switch ($params['error'])
        {
            case 1:
                $error = "Ошибка добавления статьи";
                break;
            default: break;
        }

        Template::Assign("error", $error);
        Template::Assign("sections", $sections);
        Template::Display();
    }

    public static function AddArticle($params = NULL)
    {
        if (isset($_POST['submit']))
        {
            foreach ($_POST as $value)
            {
                if (empty($value))
                {
                    $error = 1;
                    break;
                }
            }
            if ($error == 1)
            {
                header("Location: /editor/article/error=1");
                return;
            }

            require_once ModelsDir . 'Articles.php';
            require_once ModelsDir . 'Sections.php';
            $valid = Sections::ValidationSection($_SESSION['id'], $_POST['section']);
            if ($valid)
            {
                $result = Articles::AddArticle($_POST['title'], $_POST['description'], $_POST['text'], $_SESSION['name'], date("y-m-d"), $_POST['section']);

                if ($result == FALSE)
                {
                    header("Location: /editor/articles/error=1");
                    return;
                }

                header("Location: /editor");
                return;
            }
            else
            {
                header("Location: /editor/articles/error=1");
            }
        }
        else
        {
            Template::Display("Error", "Index");
        }
    }

    public static function Files($params = NULL)
    {
        switch ($params['error'])
        {
            case 1: Template::Assign("error", "Ошибка загрузки файла");
                break;
            case 2: Template::Assign("error", "Файл с таким именем уже существует");
        }
        require_once ModelsDir . 'Files.php';

        Template::Assign("files", Files::GetUserFilesList($_SESSION['id']));
        Template::Display();
    }

    public static function UploadFile()
    {
        if ($_POST['submit'])
        {
            if (!is_dir("uploads"))
                mkdir("uploads");

            if (!empty($_FILES))
            {
                if (is_file("uploads/" . $_FILES['file']['name']))
                {
                    header("Location: /editor/files/error=2");
                    return;
                }

                if (copy($_FILES['file']['tmp_name'], "uploads/" . $_FILES['file']['name']))
                {
                    require_once ModelsDir . 'Files.php';

                    if (Files::AddFile($_FILES['file']['name'], $_SESSION['id']))
                    {
                        header("Location: /editor/files");
                        return;
                    }
                    else
                    {
                        unlink("uploads/" . $_FILES['file']['name']);
                    }
                }
            }
        }
        header("Location: /editor/files/error=1");
        return;
    }

    public static function DeleteFile($params = NULL)
    {
        if (!empty($_POST['files']))
        {
            require_once ModelsDir . 'Files.php';
            foreach ($_POST['files'] as $key => $value)
            {
                if (Files::ValidationUser($_SESSION['id'], $key))
                {
                    if (Files::DeleteFile($key))
                    {
                        @unlink("uploads/" . $value);
                    }
                }
            }
        }
        header("Location: /editor/files");
        return;
    }

    public static function AddEvent($params = NULL)
    {
        if (isset($_POST['submit']))
        {
            foreach ($_POST as $value)
            {
                if (empty($value))
                {
                    $error = 1;
                    break;
                }
            }
            if ($error == 1)
            {
                header("Location: /editor/events/error=1");
                return;
            }

            require_once ModelsDir . 'Events.php';
            $result = Events::AddEvent($_POST['title'], $_POST['description'], $_POST['text'], $_SESSION['id'], date("y-m-d"));

            if ($result == FALSE)
            {
                header("Location: /edior/events/error=1");
                return;
            }

            header("Location: /editor");
            return;
        }
        else
        {
            Template::Display("Error", "Index");
        }
    }

    public static function Events($params = NULL)
    {
        switch ($params['error'])
        {
            case 1:
                $error = "Ошибка добавления события";
                break;
            default: break;
        }

        Template::Assign("error", $error);
        Template::Display();
    }

    public static function MyEvents($params = NULL)
    {
        require_once ModelsDir . 'Events.php';
        $events = Events::GetUserEventsList($_SESSION['id']);
        Template::Assign("events", $events);
        Template::Display();
    }

    public static function EditEvent($params = NULL)
    {
        if (is_numeric($params['id']))
        {
            require_once ModelsDir . 'Events.php';

            if (Events::ValidationUser($params['id'], $_SESSION['id']))
            {
                $event = Events::GetEventById($params['id']);
            }

            if (!empty($event))
            {
                Template::Assign("event", $event);
                if (!empty($_SERVER['HTTP_REFERER']))
                {
                    Template::Assign("referer", $_SERVER['HTTP_REFERER']);
                }
                else
                {
                    Template::Assign("referer", "/");
                }

                Template::Display();
                return;
            }
            else
            {
                Template::Display("Error", "Index");
                return;
            }
        }
        if (!empty($_SERVER['HTTP_REFERER']))
        {
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }
        else
        {
            header("Location: /");
        }
    }

    public static function UpdateEvent()
    {
        if ($_POST['submit'])
        {
            if (is_numeric($_POST['id']))
            {
                require_once ModelsDir . 'Events.php';

                if (Events::ValidationUser($_POST['id'], $_SESSION['id']))
                {
                    Events::UpdateEvent($_POST['id'], $_POST['title'], $_POST['description'], $_POST['text'], date("d-m-y"));
                }
            }
        }

        if (!empty($_POST['referer']))
        {
            header("Location: " . $_POST['referer']);
        }
        else
        {
            header("Location: /");
        }
    }

    public static function DeleteEvent($params = NULL)
    {
        if (is_numeric($params['id']))
        {
            require_once ModelsDir . 'Events.php';
            if (Events::ValidationUser($params['id'], $_SESSION['id']))
            {
                Events::DeleteEvent($params['id']);
            }
        }
        if (!empty($_SERVER['HTTP_REFERER']))
        {
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }
        else
        {
            header("Location: /");
        }
    }

    public static function DeleteArticle($params = NULL)
    {
        if (is_numeric($params['id']))
        {
            require_once ModelsDir . 'Articles.php';
            if (Articles::ValidationUser($_SESSION['id'], $params['id']))
            {
                Articles::DeleteArticle($params['id']);
            }
            else
            {
                Template::Display("Error", "Index");
            }
        }
        if (!empty($_SERVER['HTTP_REFERER']))
        {
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }
        else
        {
            header("Location: /");
        }
    }

    public static function UpdateArticle()
    {
        if ($_POST['submit'])
        {
            if (is_numeric($_POST['id']))
            {
                require_once ModelsDir . 'Articles.php';
                $valid = Articles::ValidationUser($_SESSION['id'], $_POST['id']);
                if ($valid)
                {
                    Articles::UpdateArticle($_POST['id'], $_POST['title'], $_POST['description'], $_POST['text'], date("d-m-y"));
                }
            }
        }

        if (!empty($_POST['referer']))
        {
            header("Location: " . $_POST['referer']);
        }
        else
        {
            header("Location: /");
        }
    }

    public static function EditArticle($params = NULL)
    {
        if (is_numeric($params['id']))
        {
            require_once ModelsDir . 'Articles.php';
            $valid = Articles::ValidationUser($_SESSION['id'], $params['id']);
            if ($valid)
            {
                $article = Articles::GetArticleById($params['id']);
            }
            if (!empty($article))
            {
                Template::Assign("article", $article);
                if (!empty($_SERVER['HTTP_REFERER']))
                {
                    Template::Assign("referer", $_SERVER['HTTP_REFERER']);
                }
                else
                {
                    Template::Assign("referer", "/");
                }

                Template::Display();
                return;
            }
        }
        if (!empty($_SERVER['HTTP_REFERER']))
        {
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }
        else
        {
            header("Location: /");
        }
    }

    public static function MySections($params = NULL)
    {
        require_once ModelsDir . 'Sections.php';
        $sections = Sections::GetSectionsUser($_SESSION['id']);
        Template::Assign("sections", $sections);
        Template::Display();
    }

    public static function Logout($params = NULL)
    {
        session_unset();
        header("Location: /");
    }

}

?>

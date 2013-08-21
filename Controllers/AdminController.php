<?php

class AdminController
{

    public static function Index()
    {
        Template::Display();
    }

        public static function Logout($params = NULL)
    {
        session_unset();
        header("Location: /");
    }
    
    public static function Users($params = NULL)
    {
        switch ($params['error'])
        {
            case 1:
                $error = "Ошибка добавления пользователя";
                break;
            case -1:
                $error = "Пользователь успешно добавлен";
                break;
            default: break;
        }
        require_once ModelsDir . "Sections.php";
        $sections = Sections::GetSectionsList();
        Template::Assign("sections", $sections);
        Template::Assign("error", $error);
        Template::Display();
    }

    public static function AddAdmin()
    {
        if (isset($_POST['submit']))
        {
            require_once ModelsDir . "Users.php";
            if (($_POST['password'] !== $_POST['confirmPassword']))
            {
                $error = 1;
            }

            foreach ($_POST as $value)
            {
                if (empty($value))
                {
                    $error = 1;
                    break;
                }
            }
            $pattern = "|^([a-z0-9_\.\-\]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})|is";
            $result = preg_match($pattern, $_POST['email']);
            if ($result == 0)
            {
                $error = 1;
            }

            if ($error == 1)
            {
                header("Location: /admin/users/error=1");
                return;
            }

            $status = Users::AdminAdd($_POST['login'], $_POST['password'], $_POST['email'], $_POST['name']);
            if ($status != TRUE)
            {
                header("Location: /admin/users/error=1");
                return;
            }
            else
            {
                header("Location: /admin/users/error=-1");
            }
        }
        else
        {
            Template::Display("Error", "Index");
        }
    }

    public static function AddEditor()
    {
        if (isset($_POST['submit']))
        {
            require_once ModelsDir . "Users.php";
            if (($_POST['password'] !== $_POST['confirmPassword']))
            {
                $error = 1;
            }

            foreach ($_POST as $value)
            {
                if (empty($value))
                {
                    $error = 1;
                    break;
                }
            }
            $pattern = "|^([a-z0-9_\.\-\]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})|is";
            $result = preg_match($pattern, $_POST['email']);
            if ($result == 0)
            {
                $error = 1;
            }

            if ($error == 1)
            {
                header("Location: /admin/users/error=1");
                return;
            }

            $status = Users::EditorAdd($_POST['login'], $_POST['password'], $_POST['email'], $_POST['name'], $_POST['section']);
            if ($status != TRUE)
            {
                header("Location: /admin/users/error=1");
                return;
            }
            else
            {
                header("Location: /admin/users/error=-1");
            }
        }
        else
        {
            Template::Display("Error", "Index");
        }
    }

    public static function Articles($params = NULL)
    {
        switch ($params['error'])
        {
            case 1:
                $error = "Ошибка добавления статьи";
                break;
            default: break;
        }

        require ModelsDir . "Sections.php";
        $sections = Sections::GetSectionsList();
        Template::Assign("error", $error);
        Template::Assign("sections", $sections);
        Template::Display();
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

    public static function Sections($params = NULL)
    {
        switch ($params['error'])
        {
            case 1:
                $error = "Ошибка добавления раздела";
                break;
            case 2: $error = "Ошибка удаления раздела";
            case 3: $error = "Ошибка назначения раздела пользователю";
                break;
            default: break;
        }

        require ModelsDir . "Sections.php";
        $sections = Sections::GetSectionsList();
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
                header("Location: /admin/articles/error=1");
                return;
            }

            require_once ModelsDir . 'Articles.php';
            $result = Articles::AddArticle($_POST['title'], $_POST['description'], $_POST['text'], $_SESSION['name'], date("y-m-d"), $_POST['section']);

            if ($result == FALSE)
            {
                header("Location: /admin/articles/error=1");
                return;
            }

            header("Location: /admin");
            return;
        }
        else
        {
            Template::Display("Error", "Index");
        }
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
                header("Location: /admin/events/error=1");
                return;
            }

            require_once ModelsDir . 'Events.php';
            $result = Events::AddEvent($_POST['title'], $_POST['description'], $_POST['text'], $_SESSION['id'], date("y-m-d"));

            if ($result == FALSE)
            {
                header("Location: /admin/events/error=1");
                return;
            }

            header("Location: /admin");
            return;
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
        Template::Assign("files", Files::GetFilesList());
        Template::Display();
    }

    public static function SetSection($params = NULL)
    {
        if (isset($_POST['submit']))
        {
            require_once ModelsDir . "Sections.php";

            $sectionId = $_POST['sections'];
            $username = $_POST['username'];

            if (is_numeric($sectionId))
            {
                if (Sections::SetSection($username, $sectionId))
                {
                    header("Location: /admin/sections");
                    return;
                }
            }
        }
        header("Location: /admin/sections/error=3");
        return;
    }

    public static function DeleteSection($params = NULL)
    {
        if (isset($_POST['submit']))
        {
            if (is_numeric($_POST['sections']))
            {
                require_once ModelsDir . "Sections.php";
                if (Sections::DeleteSection($_POST['sections']))
                {
                    header("Location: /admin/sections");
                    return;
                }
            }
        }
        header("Location: /admin/sections/error=2");
        return;
    }

    public static function AddSection($params = NULL)
    {
        if (isset($_POST['submit']))
        {
            if (!empty($_POST['title']))
            {
                require_once ModelsDir . "Sections.php";
                if (Sections::AddSection($_POST['title']))
                {
                    header("Location: /admin/sections");
                    return;
                }
            }
        }
        header("Location: /admin/sections/error=1");
        return;
    }

    public static function DeleteFile($params = NULL)
    {
        if (!empty($_POST['files']))
        {
            require_once ModelsDir . 'Files.php';
            foreach ($_POST['files'] as $key => $value)
            {
                if (Files::DeleteFile($key))
                {
                    @unlink("uploads/" . $value);
                }
            }
        }
        header("Location: /admin/files");
        return;
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
                    header("Location: /admin/files/error=2");
                    return;
                }

                if (copy($_FILES['file']['tmp_name'], "uploads/" . $_FILES['file']['name']))
                {
                    require_once ModelsDir . 'Files.php';

                    if (Files::AddFile($_FILES['file']['name'], $_SESSION['id']))
                    {
                        header("Location: /admin/files");
                        return;
                    }
                    else
                    {
                        unlink("uploads/" . $_FILES['file']['name']);
                    }
                }
            }
        }
        header("Location: /admin/files/error=1");
        return;
    }

    public static function Login()
    {
        if (isset($_SESSION['login']) && isset($_SESSION['permission']))
        {
            header("Location: /admin");
            return;
        }

        if (isset($_POST['submit']))
        {
            require_once ModelsDir . "Users.php";
            $user = Users::ValidationAdmin($_POST['login'], $_POST['password']);
            if ($user != NULL)
            {
                $_SESSION['id'] = $user['id'];
                $_SESSION['login'] = $user['login'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['permission'] = "admin";
                header("Location: /admin");
            }
        }
        Template::Display();
    }

    public static function DeleteEvent($params = NULL)
    {
        if (is_numeric($params['id']))
        {
            require_once ModelsDir . 'Events.php';
            Events::DeleteEvent($params['id']);
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
            Articles::DeleteArticle($params['id']);
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
                Articles::UpdateArticle($_POST['id'], $_POST['title'], $_POST['description'], $_POST['text'], date("d-m-y"));
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

    public static function UpdateEvent()
    {
        if ($_POST['submit'])
        {
            if (is_numeric($_POST['id']))
            {
                require_once ModelsDir . 'Events.php';
                Events::UpdateEvent($_POST['id'], $_POST['title'], $_POST['description'], $_POST['text'], date("d-m-y"));
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
            $article = Articles::GetArticleById($params['id']);
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

    public static function EditEvent($params = NULL)
    {
        if (is_numeric($params['id']))
        {
            require_once ModelsDir . 'Events.php';
            $event = Events::GetEventById($params['id']);

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

}

?>

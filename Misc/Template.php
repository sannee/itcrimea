<?php

class Template
{

    private static $smarty;

    public static function Assign($var, $value)
    {
        $smarty = static::GetSmarty();
        $smarty->assign($var, $value);
    }

    public static function Display($controller = NULL, $action = NULL)
    {
        if ($controller == NULL && $action == NULL)
        {
            $smarty = static::GetSmarty();
            $view = $smarty->fetch(Routing::$Controller . "/" . Routing::$Action . ".tpl");
            $smarty->assign("view", $view);
            $smarty->display("layout.tpl");
        }

        if ($controller != NULL && $action != NULL)
        {
            $smarty = static::GetSmarty();
            $view = $smarty->fetch($controller . "/" . $action . ".tpl");
            $smarty->assign("view", $view);
            $smarty->display("layout.tpl");
        }
    }

    public static function GetSmarty()
    {
        if (static::$smarty == NULL)
        {
            static::$smarty = new Smarty();
            static::$smarty->template_dir = ViewsDir;
            static::$smarty->compile_dir = SmartyCompilerDir;
        }
        return static::$smarty;
    }

}

?>

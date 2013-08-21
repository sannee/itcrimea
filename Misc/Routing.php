<?php

class Routing
{

    public static $Postfix = "Controller";
    public static $Controller = "Home";
    public static $Action = "Index";
    public static $Params = array();
    public static $ErrorController = "Error";
    public static $ErrorAction = "Index";

    public static function ParseUrl($url)
    {
        $url = str_replace("//", "", $url);
        $route = explode('/', $url);

        if (!empty($route[1]))
        {
            static::$Controller = $route[1];
        }

        if (!empty($route[2]))
        {
            static::$Action = $route[2];
        }

        $array = explode("&", $route[3]);

        foreach ($array as $value)
        {
            $temp = explode("=", $value);
            static::$Params[$temp[0]] = $temp[1];
        }
    }

    private static function MethodExists($class, $method)
    {
        if (class_exists($class))
        {
            return method_exists($class, $method);
        }
        return FALSE;
    }

    public static function Route()
    {
        $basicController = static::$Controller . static::$Postfix;
        $errorController = static::$ErrorController . static::$Postfix;

        $file = ControllersDir . $basicController . ".php";

        if (file_exists($file))
        {
            require_once $file;
        }

        $file = ControllersDir . $errorController . ".php";

        if (file_exists($file))
        {
            require_once $file;
        }

        if (static::MethodExists($basicController, static::$Action))
        {
            $controller = $basicController;
            $action = static::$Action;
            $controller::$action(static::$Params);
        }
        else
        {
            if (static::MethodExists($errorController, static::$ErrorAction))
            {
                $controller = $errorController;
                $action = static::$ErrorAction;
                static::$Action = static::$ErrorAction;
                static::$Controller = static::$ErrorController;
                $controller::$action(static::$Params);
            }
        }
    }

}

?>
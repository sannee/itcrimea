<?php

define("ControllersDir", "../Controllers/");
define("ModelsDir", "../Models/");
define("MiscDir", "../Misc/");
define("LibsDir", "../Libs/");
define("ViewsDir", "../Views");
define("SmartyCompilerDir", "../Cache");


require_once LibsDir . 'smarty/Smarty.class.php';
require_once MiscDir . "Database.php";
require_once MiscDir . 'Routing.php';
require_once MiscDir . 'Template.php';
require_once MiscDir . 'Filters.php';

session_start();
Database::Connection("eu-cdbr-azure-north-a.cloudapp.net", "sannee", "b8883a7975e7aa", "fa755e57");
//Database::Connection("localhost", "crimea", "root", "hillo");
Filters::Events();

Routing::ParseUrl($_SERVER['REQUEST_URI']);
Filters::AuthorizeCheck();
Routing::Route();

?>
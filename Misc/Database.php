<?php

class Database {

    public static $identifier;

    public static function Connection($host, $name, $user, $password) {
        
        static::$identifier = mysql_connect($host, $user, $password) or die("Не удалось подключиться к базе данных");
        @mysql_select_db($name) or die("Базы данных не существует");;
        @mysql_query("SET NAMES uft8");
        @mysql_query("SET CHARACTER SET uft8");
        @mysql_query("SET SESSION collation_connection = utf8");
        @mysql_query("SET SESSION collation_server=utf8_general_ci");
        @mysql_query("SET character_set_client=utf8");
        @mysql_query("SET character_set_connection=utf8");
        @mysql_query("SET character_set_results=utf8");
        @mysql_query("SET character_set_server=utf8;");
    }

    public static  function CloseConnection() {
        @mysql_close(@$this->Identifier);
    }

}
?>
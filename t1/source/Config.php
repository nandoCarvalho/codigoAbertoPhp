<?php

/** SITE INFO
**/

define("SITE", [
    "name" => "Auth em MVC com PHP",
    "desc" => "Aprenda a construir uma aplicação MVC",
    "domain" => "localauth.com",
    "locale" => "pt_BR",
    "root" => "https://localhost/codigoaberto/t1"
]);

/** SITE minify
**/
IF ($_SERVER["SERVER_NAME"] == "localhost") {
    require __DIR__."/Minify.php";
}

/** DATABASE CONNECT
**/

define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "datalayer_example",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

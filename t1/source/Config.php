<?php

/** SITE INFO
**/

define("SITE", [
    "name" => "Auth em MVC com PHP",
    "desc" => "Aprenda a construir uma aplicação MVC",
    "domain" => "localauth.com",
    "locale" => "pt_BR",
    "root" => "https://localhost/codigoabertophp/t1/"
]);

/**
 * SOCIAL CONFIG
 */
 define("SOCIAL", [
     "facebook_page" => "ndocarvalho",
     "facebook_author" => "ndocarvalho",
     "facebook_appId" => "",
     "twitter_creator" => "@ndo_carvalho",
     "twitter_site" => "@ndo_carvalho"
 ]);

 /** SITE minify
 **/
 IF ($_SERVER["SERVER_NAME"] == "localhost") {
     require __DIR__."/Minify.php";
 }

/**
* MAIL CONNECT
*/
define("MAIL", []);

/**
* SOCIAL LOGIN: FACEBOOK
*/
define("FACEBOOK_LOGIN", []);

/**
* SOCIAL LOGIN
*/
define("GOOGLE", []);



/** DATABASE CONNECT
**/

define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "auth",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

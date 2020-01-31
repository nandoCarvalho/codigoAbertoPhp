<?php

ob_start();
session_start();

require __DIR__. "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(site());
$router->namespace("Source\Controllers");

/**
 * WEB
 * @var [type]
 */
$router->group(null);
$router->get("/", "Web:login", "web.login");
$router->get("/cadastrar", "Web:register", "web.register");
$router->get("/recuperar", "Web:forget", "web.forget");
$router->get("/senha/{email}/{forget}", "Web:reset", "web.reset");

/**
 * Auth
 * @var [type]
 */

/**
 * Auth social
 * @var [type]
 */
$router->group(null);
$router->post("/login", "Auth:login", "auth.login");
$router->post("/register", "Auth:register", "auth.register");


/**
 * Profile
 * @var [type]
 */

/**
 * errors
 * @var [type]
 */
$router->group("ops");
$router->get("/{errcode}", "web:error", "web.error");
/**
 * Route process
 * @var [type]
 */

$router->dispatch();

/**
 * Errors process
 * @var [type]
 */
if($router->error()){
    $router->redirect("web.error", ["errcode" => $router->error()]);
}



ob_end_flush();

<?php

ob_start();
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 'on');

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

date_default_timezone_set('America/Sao_Paulo');

$router = new Router(site());
$router->namespace("Source\Controllers");

/* Web */
$router->group("");
$router->get("/", "Web:home", "web.home");
$router->get("/agradecimento", "Web:agradecimento", "web.agradecimento");
$router->get("/obrigado", "Web:agradecimento", "web.agradecimento");

/* Lead */
$router->group("lead");
$router->post("/", "Lead:post", "lead.post");

/* ERRORS */
$router->group("ops")->namespace("Source\Controllers");
$router->get("/{errcode}", "Web:error", "web.error");

$router->dispatch();

ob_end_flush();

<?php
const App_Name = "My_Mvc";
define("BaseUrl", "https://" . $_SERVER['HTTP_HOST']);
define("BaseDir", realpath(__DIR__ . "/../"));
$current_rout = explode('?', $_SERVER['REQUEST_URI'])[0];
$current_rout = substr($current_rout, 1);
define("CURRENT_ROUT", $current_rout);
global $routes;
$routes = [
    'get' => [],
    'post' => [],
    'put' => [],
    'delete' => []
];
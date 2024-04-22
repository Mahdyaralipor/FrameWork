<?php

namespace Core\Router\Api;

class Route
{

    public static function get($route, $context)
    {
        $controller = $context[0];
        $controller = explode("\\", $controller);
        $controller = array_splice($controller, -1)[0];
        $method = $context[1];
        global $routes;
        array_push($routes['get'], array('route' => 'api/' . trim($route, "/ "), 'controller' => $controller, 'method' => $method));
    }

    public static function post($route, $context)
    {
        $controller = $context[0];
        $controller = explode("\\", $controller);
        $controller = array_splice($controller, -1)[0];
        $method = $context[1];
        global $routes;
        array_push($routes['get'], array('route' => 'api/' . trim($route, "/ "), 'controller' => $controller, 'method' => $method));
    }

}
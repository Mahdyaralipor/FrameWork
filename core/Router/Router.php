<?php
namespace Core\Router;
class Router
{
    private $current_route;
    private $method_field;
    private $routes;
    private $params;
    public function __construct()
    {
        $this->current_route = explode('/' , CURRENT_ROUT);
        global $routes;
        $this->method_field = $this->methodField();
        $this->routes = $routes;
    }

    public function methodField()
    {
        $method_field = strtolower($_SERVER['REQUEST_METHOD']);
        if ($method_field == 'post') {
            if ($_POST['method'] == 'put')
                $method_field = 'put';
            if ($_POST['method'] == 'delete')
                $method_field = 'delete';
        }
        return $method_field;
    }
}
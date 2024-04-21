<?php
use Core\Router\Web\Route;
ROUTE::get('/', [\App\Http\Controller\HomeController::class, 'index']);
ROUTE::get('/users', [\App\Http\Controller\UserController::class, 'index']);
ROUTE::get('/create_user', [\App\Http\Controller\UserController::class, 'create']);
ROUTE::post('/store_user', [\App\Http\Controller\UserController::class, 'store']);
ROUTE::get('/edit_user/{id}', [\App\Http\Controller\UserController::class, 'edit']);
ROUTE::put('/update_user/{id}', [\App\Http\Controller\UserController::class, 'update']);
ROUTE::delete('/destroy_user/{id}', [\App\Http\Controller\UserController::class, 'destroy']);
echo COURENTROUT;
echo "<br>";
global $routes;
print_r($routes);
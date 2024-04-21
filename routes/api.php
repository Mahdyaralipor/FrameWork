<?php
use Core\Router\Api\Route;
ROUTE::get('/create_user', [\App\Http\Controller\UserController::class, 'create']);
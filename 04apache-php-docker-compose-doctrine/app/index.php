<?php
session_start();

define('BASE_URL', 'http://localhost:5000');

use FastRoute\RouteCollector;
$container = require __DIR__ . '/config/bootstrap.php';

$dispatcher = FastRoute\simpleDispatcher(function (RouteCollector $r)
{
    $r->addRoute('GET', '/dashboard', ['App\Controllers\DashboardController', 'index']);
    $r->addRoute(['GET', 'POST'], '/login', ['App\Controllers\AuthController', 'login']);
    $r->addRoute(['GET', 'POST'], '/registro', ['App\Controllers\AuthController', 'registro']);
    $r->addRoute('POST', '/logout', ['App\Controllers\DashboardController', 'logout']);
});

$route = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);

switch ($route[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        echo '404 Not Found';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        echo '405 Method Not Allowed';
        break;
    case FastRoute\Dispatcher::FOUND:
        $controller = $route[1];
        $parameters = $route[2];

        //cargamos el controlador y el controlador con sus parámetros
        $container->call($controller, $parameters);
        break;
}

<?php

declare(strict_types=1);

use FastRoute\RouteCollector;
use Yiisoft\Http\Method;

return function (RouteCollector $route) {
    $route->addGroup('/backend', function (RouteCollector $route) {
        $route->addRoute(Method::ALL, '/{controller:[a-zA-Z][\w-]*}/{action:[a-zA-Z][\w-]*}', 'admin/<controller>/<action>');
    });
};

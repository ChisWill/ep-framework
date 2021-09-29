<?php

declare(strict_types=1);

return [
    'debug' => true,
    'secretKey' => env('SECRET_KEY'),
    'di' => require('di.php'),
    'route' => require('route.php'),
    'events' => require('events.php'),
    'params' => require('params.php')
];

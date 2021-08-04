<?php

declare(strict_types=1);

return [
    'rootPath' => dirname(__DIR__),
    'vendorPath' => dirname(__DIR__) . '/vendor',
    'debug' => true,
    'secretKey' => require('secretKey.php'),
    'di' => require('di.php'),
    'route' => require('route.php'),
    'events' => require('events.php'),
    'params' => require('params.php')
];

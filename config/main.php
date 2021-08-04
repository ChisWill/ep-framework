<?php

declare(strict_types=1);

return [
    'rootPath' => dirname(__DIR__),
    'vendorPath' => dirname(__DIR__) . '/vendor',
    'debug' => true,
    'secretKey' => 'AZg9CTMiJjtQurSRespzPwXL3Y4xDI7q',
    'di' => require('di.php'),
    'route' => require('route.php'),
    'events' => require('events.php'),
    'params' => require('params.php')
];

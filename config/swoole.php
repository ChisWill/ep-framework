<?php

declare(strict_types=1);

use Ep\Swoole\ServerFactory;

return [
    'host' => '0.0.0.0',
    'port' => 9501,
    'type' => ServerFactory::WEBSOCKET,
    'settings' => [
        'worker_num' => 1
    ],
    'events' => [],
    'servers' => []
];

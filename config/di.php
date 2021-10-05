<?php

declare(strict_types=1);

use Ep\Base\Config;
use Yiisoft\Aliases\Aliases;
use Yiisoft\Db\Connection\Connection;
use Yiisoft\Db\Mysql\Connection as MysqlConnection;
use Yiisoft\Log\Target;
use Yiisoft\Log\Target\File\FileTarget;

return static fn (Config $config): array => [
    Target::class => static fn (Aliases $aliases): FileTarget => new FileTarget($aliases->get($config->runtimeDir . '/logs/' . date('Y-m-d') . '.log')),
    // Default DB
    Connection::class => [
        'class' => MysqlConnection::class,
        '__construct()' => [env('MYSQL_DSN')],
        'setUsername()' => [env('MYSQL_USERNAME')],
        'setPassword()' => [env('MYSQL_PASSWORD')]
    ],
];

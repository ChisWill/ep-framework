<?php

declare(strict_types=1);

namespace App\Common\Component;

use Ep\Base\Config;
use Yiisoft\Aliases\Aliases;
use Yiisoft\Db\Connection\Connection;
use Yiisoft\Db\Mysql\ConnectionPDO as MysqlConnection;
use Yiisoft\Db\Mysql\PDODriver;
use Yiisoft\Di\ServiceProviderInterface;
use Yiisoft\Log\Target;
use Yiisoft\Log\Target\File\FileTarget;

final class DiProvider implements ServiceProviderInterface
{
    public function __construct(private Config $config)
    {
    }

    public function getDefinitions(): array
    {
        return [
            Target::class => fn (Aliases $aliases): FileTarget => new FileTarget($aliases->get($this->config->runtimeDir . '/logs/' . date('Y-m-d') . '.log')),
            // Default DB
            Connection::class => [
                'class' => MysqlConnection::class,
                '__construct()' => [new PDODriver(env('MYSQL_DSN'), env('MYSQL_USERNAME'), env('MYSQL_PASSWORD'))],
            ],
        ];
    }

    public function getExtensions(): array
    {
        return [];
    }
}

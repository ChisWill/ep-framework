<?php

declare(strict_types=1);

use Ep\Base\Config;
use Yiisoft\Aliases\Aliases;
use Yiisoft\Log\Target;
use Yiisoft\Log\Target\File\FileTarget;

return static fn (Config $config): array => [
    Target::class => static fn (Aliases $aliases): FileTarget => new FileTarget($aliases->get($config->runtimeDir . '/logs/' . date('Y-m-d') . '.log')),
];

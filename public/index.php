<?php

declare(strict_types=1);

use Ep\Web\Application;

require(dirname(__DIR__) . '/vendor/autoload.php');

Ep::create(dirname(__DIR__))
    ->ready(Application::class)
    ->run();

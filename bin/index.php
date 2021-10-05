#!/usr/bin/env php
<?php

declare(strict_types=1);

use Ep\Console\Application;

require(dirname(__DIR__) . '/vendor/autoload.php');

$exitCode = Ep::init(dirname(__DIR__))
    ->get(Application::class)
    ->run();

exit($exitCode);

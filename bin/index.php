#!/usr/bin/env php
<?php

declare(strict_types=1);

use Ep\Console\Application;

require(dirname(__DIR__) . '/vendor/autoload.php');

$exitCode = Ep::create(dirname(__DIR__))
    ->ready(Application::class)
    ->run();

exit($exitCode);

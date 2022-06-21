<?php

declare(strict_types=1);

use App\Common\Component\DiProvider;

return [
    'debug' => env('DEBUG', true),
    'env' => env('ENV', 'test'),
    'secretKey' => env('SECRET_KEY'),
    'diProvider' => DiProvider::class,
    'params' => require('params.php')
];

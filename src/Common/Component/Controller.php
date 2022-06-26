<?php

declare(strict_types=1);

namespace App\Common\Component;

use Ep\Web\Trait\Middleware;
use Ep\Web\Trait\Renderer;
use Psr\Http\Message\ResponseInterface;

class Controller
{
    use Renderer, Middleware;

    protected function success(mixed $body = []): ResponseInterface
    {
        return $this->json([
            'code' => 200,
            'message' => 'OK',
            'body' => $body
        ]);
    }

    protected function error(string $message = 'Failed', int $code = 500, array $body = []): ResponseInterface
    {
        return $this->json([
            'code' => $code,
            'message' => $message,
            'body' => $body
        ]);
    }
}

<?php

declare(strict_types=1);

namespace App\Api\Controller;

use App\Common\Component\Controller;
use Psr\Http\Message\ResponseInterface;

final class IndexController extends Controller
{
    public function index(): ResponseInterface
    {
        return $this->string('OK');
    }
}

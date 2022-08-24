<?php

declare(strict_types=1);

namespace App\Admin\Controller;

use App\Common\Component\Controller;
use Psr\Http\Message\ResponseInterface;

final class PublicController extends Controller
{
    public function login(): ResponseInterface
    {
        return $this->string('OK');
    }
}

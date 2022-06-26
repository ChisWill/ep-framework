<?php

declare(strict_types=1);

namespace App\Api\Controller;

use Ep\Web\Trait\Renderer;

final class IndexController
{
    use Renderer;

    public function index()
    {
        return $this->string('OK');
    }
}

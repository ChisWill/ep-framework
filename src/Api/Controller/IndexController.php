<?php

declare(strict_types=1);

namespace App\Api\Controller;

use Ep\Web\Controller;

final class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->string('OK');
    }
}
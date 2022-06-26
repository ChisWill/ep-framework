<?php

declare(strict_types=1);

namespace App\Admin\Controller;

use Ep\Web\Controller;

final class PublicController extends Controller
{
    public function loginAction()
    {
        return $this->string('OK');
    }
}
<?php

declare(strict_types=1);

namespace App\Admin\Controller;

use App\Common\Component\Controller;
use Ep\Db\Query;
use Psr\Http\Message\ResponseInterface;

final class UserController extends Controller
{
    public function info(): ResponseInterface
    {
        $user = Query::find()
            ->from('admin_user')
            ->where([
                'username' => 'master'
            ])
            ->one();

        return $this->success($user);
    }
}

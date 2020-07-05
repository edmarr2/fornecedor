<?php

namespace App\Services\Models;

use App\Contracts\Models\UserServiceInterface;
use App\Services\BaseModelService;
use App\User;

class UserService extends BaseModelService implements UserServiceInterface
{
    public function model()
    {
        return User::class;
    }

}

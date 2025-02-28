<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\InterfaceEloquent\InterfaceUserRepository;

class UserRepository extends BaseRepository implements InterfaceUserRepository
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }
}

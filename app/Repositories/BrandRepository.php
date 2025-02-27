<?php

namespace App\Repositories;

use App\Models\Brand;
use App\Repositories\InterfaceEloquent\InterfaceBrandRepository;

class BrandRepository extends BaseRepository implements InterfaceBrandRepository
{
    public function __construct(Brand $model)
    {
        parent::__construct($model);
    }
}

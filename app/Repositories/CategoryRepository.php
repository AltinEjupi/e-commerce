<?php

namespace App\Repositories;

use App\Models\Category;
use App\Repositories\InterfaceEloquent\InterfaceCategoryRepository;

class CategoryRepository extends BaseRepository implements InterfaceCategoryRepository
{
    public function __construct(Category $model)
    {
        parent::__construct($model);
    }
}

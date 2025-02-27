<?php

namespace App\Repositories;

use App\Models\ProductImage;
use App\Repositories\InterfaceEloquent\InterfaceProductImageRepository;

class ProductImageRepository extends BaseRepository implements InterfaceProductImageRepository
{
    public function __construct(ProductImage $model)
    {
        parent::__construct($model);
    }
}

<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\InterfaceEloquent\InterfaceProductRepository;

class ProductRepository extends BaseRepository implements InterfaceProductRepository
{
    public function __construct(Product $model)
    {
        parent::__construct($model);
    }
}

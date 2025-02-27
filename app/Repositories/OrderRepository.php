<?php

namespace App\Repositories;

use App\Models\Order;
use App\Repositories\InterfaceEloquent\InterfaceOrderRepository;

class OrderRepository extends BaseRepository implements InterfaceOrderRepository
{
    public function __construct(Order $model)
    {
        parent::__construct($model);
    }
}

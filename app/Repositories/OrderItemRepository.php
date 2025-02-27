<?php

namespace App\Repositories;

use App\Models\OrderItem;
use App\Repositories\InterfaceEloquent\InterfaceOrderItemRepository;

class OrderItemRepository extends BaseRepository implements InterfaceOrderItemRepository
{
    public function __construct(OrderItem $model)
    {
        parent::__construct($model);
    }
}

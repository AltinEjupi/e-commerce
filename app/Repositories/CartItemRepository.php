<?php

namespace App\Repositories;

use App\Models\CartItem;
use App\Repositories\InterfaceEloquent\InterfaceCartItemRepository;

class CartItemRepository extends BaseRepository implements InterfaceCartItemRepository
{
    public function __construct(CartItem $model)
    {
        parent::__construct($model);
    }
}

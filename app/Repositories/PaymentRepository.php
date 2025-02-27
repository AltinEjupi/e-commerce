<?php

namespace App\Repositories;

use App\Models\Payment;
use App\Repositories\InterfaceEloquent\InterfacePaymentRepository;

class PaymentRepository extends BaseRepository implements InterfacePaymentRepository
{
    public function __construct(Payment $model)
    {
        parent::__construct($model);
    }
}

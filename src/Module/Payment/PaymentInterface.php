<?php

declare(strict_types = 1);

namespace App\Module\Payment;

use App\Domain\Order;

interface PaymentInterface
{
    public function payOrder(Order $order): void;
}

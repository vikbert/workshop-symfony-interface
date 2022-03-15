<?php

declare(strict_types = 1);

namespace App\Domain\Voucher\Rule;

use App\Entity\Order;

trait DebugTrait
{
    public function reduceTotal(Order $order): void
    {
        $order->setTotal($order->getTotal() - 10);
        dump(sprintf('Checking Rule: %s', self::class));
    }
}

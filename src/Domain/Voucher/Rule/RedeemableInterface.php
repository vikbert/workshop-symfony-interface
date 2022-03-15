<?php

declare(strict_types = 1);

namespace App\Domain\Voucher\Rule;

use App\Entity\Order;
use App\Entity\Voucher;

interface RedeemableInterface
{
    public function redeem(Voucher $voucher, Order $order): void;
}
